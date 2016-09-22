<?php

use yii\db\Migration;
use common\models\User;
/**
 * Handles the creation for table `data_user`.
 */
class m160910_041745_create_data_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $model = new User();
        $model->setAttributes(array(
            'username' => 'admin',
            'email' =>'admin@gmail.com',
            'role' => User::ROLE_ADMIN,
            'avatar' => 'no-image.jpg'
        ));
        $model->setPassword("abc123");
        $model->generateAuthKey();
        $model->save(false);
        
        $model = new User();
        $model->setAttributes(array(
            'username' => 'user',
            'email' =>'user@gmail.com',
            'role' => User::ROLE_USER,
            'avatar' => 'no-image.jpg'
        ));
        $model->setPassword("abc123");
        $model->generateAuthKey();
        $model->save(false);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        User::deleteAll(array('email' => 'admin@gmail.com'));
        User::deleteAll(array('email' => 'user@gmail.com'));
    }
}
