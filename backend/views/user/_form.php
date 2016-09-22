<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
use kartik\file\FileInput;
use common\components\Util;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
        ]);
    ?>
    <?= $model->id ? $form->field($model, 'username')->textInput(['maxlength' => true, 'readonly'=>'']): $form->field($model, 'username')->textInput(['maxlength' => true])?>

    <?= $model->id ? $form->field($model, 'email')->textInput(['maxlength' => true, 'readonly'=>'']):$form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'password')->passwordInput() ?>
    
    <?= $form->field($model, 'password_repeat')->passwordInput() ?>

    <?= $form->field($model, 'file_image')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'allowedFileExtensions'=>['jpg', 'gif', 'png'],
            'initialPreview'=>[
                Html::img(Util::getUrlImage($model->avatar))
            ],
            'overwriteInitial'=>true,
            'showUpload' => false,
            'showCaption' => false,
            'maxFileSize'=>2000
        ]
    ]);  
    ?>

    <?= $model->role === User::ROLE_ADMIN ? $form->field($model, 'role')->dropDownList(User::getListRole()) :'' ?>

    <?= $model->role === User::ROLE_ADMIN ? $form->field($model, 'status')->dropDownList(User::getListStatus()):'' ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
