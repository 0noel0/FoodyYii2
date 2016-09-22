<?php

namespace backend\controllers;

use Yii;
use common\models\User;
use common\models\UserSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\components\Util;
use backend\components\BaseController;
use yii\web\UploadedFile;
use cornernote\softdelete\SoftDeleteBehavior;
use yii\helpers\VarDumper;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['access']['rules'] = [
            [
                'actions' => ['view'],
                'allow' => true,
                'roles' => [User::ROLE_ADMIN, User::ROLE_USER],
            ],
            [
                'actions' => ['create','index'],
                'allow' => true,
                'roles' => [User::ROLE_ADMIN],
            ],
            [
                'actions' => ['update'],
                'allow' => true,
                'roles' => ['!'],
            ],
            [
                'actions' => ['delete'],
                'allow' => true,
                'roles' => ['#'],
            ],
        ];
        return $behaviors;
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();
        
        if ($model->load(Yii::$app->request->post())) {
            
            $model->setPassword($model->password);
            $model->generateAuthKey();
            
            $model->file_image = UploadedFile::getInstance($model, 'file_image');
            if ($model->file_image) {
                $model->avatar = Yii::$app->security->generateRandomString() . '.' . $model->file_image->extension;
            }
            
            if ($model->save()) {
                if (!empty($model->avatar)) {
                    Util::uploadFile($model->file_image, $model->avatar);
                }
                return $this->redirect(['index']);
            } else {
                return $this->render('create', [
                            'model' => $model,
                ]);
            }
            //return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            
            $model->setPassword($model->password);
            $model->generateAuthKey();
            
            $model->file_image = UploadedFile::getInstance($model, 'file_image');   
            $old_image = "";
            if($model->file_image){
                $old_image = $model->image;
                $model->image = Yii::$app->security->generateRandomString().'.'.$model->file_image->extension;
            }
            if ($model->save()) {
                if (!empty($model->file_image)) {
                    Util::deleteFile($old_image);
                    Util::uploadFile($model->file_image, $model->image);
                }
                return $this->redirect('index');
            }else{
                return $this->render('update',[
                    'model'=>$model,
                ]);
            }
            //return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->softDelete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
