<?php

namespace common\models;

use Yii;
use cornernote\softdelete\SoftDeleteBehavior;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use yii\db\Expression;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 *
 * @property Food[] $foods
 */
class Category extends ActiveRecord
{
    public $file_image;
    use \mootensai\relation\RelationTrait;
    
    public function behaviors() {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
            [
                'class' => SoftDeleteBehavior::className(),
                'attribute' => 'deleted_at',
                'value' => new Expression('NOW()'), // for sqlite use - new \yii\db\Expression("date('now')")
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'image'], 'required'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 50],
            [['file_image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, gif'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'image' => Yii::t('app', 'Image'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'deleted_at' => Yii::t('app', 'Deleted At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFoods()
    {
        return $this->hasMany(Food::className(), ['category_id' => 'id']);
    }
    
    public static function listCategory(){
        return ArrayHelper::map(self::find()->where(['deleted_at'=>NULL])->all(), 'id', 'name');
    }
}