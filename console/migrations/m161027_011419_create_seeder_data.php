<?php

use yii\db\Migration;
use common\models\User;
class m161027_011419_create_seeder_data extends Migration
{
    public function up()
    {
//        $seeder = new \tebazil\yii2seeder\Seeder();
//        $generator = $seeder->getGeneratorConfigurator();
//        $faker = $generator->getFakerConfigurator();
//        $seeder->table('user')->columns([
//            'id', //automatic pk
//            'username'=>$faker->firstName,
//            'auth_key'=>Yii::$app->security->generateRandomString(),
//            'password_hash'=>Yii::$app->security->generatePasswordHash('abc123'),
//            'email'=>$faker->email,
//            'avatar'=>"",
//            'role'=>$faker->randomElement(User::getRole()),
//            'status'=>$faker->randomElement(User::getStatus()),
//        ])->rowQuantity(20);
//        $seeder->table('device')->columns([
//            'id',
//            'user_id'=>$generator->relation('user', 'id'),
//            'device_type'=>1,
//            'device_token'=>"a",
//        ])->rowQuantity(20);
//
//
//        $seeder->table('page')->columns([
//            'id',
//            'name'=>$faker->text(20),
//            'content'=>$faker->text(50),
//        ])->rowQuantity(20);
//
//        $seeder->table('category')->columns([
//            'id',
//            'name'=>$faker->text(10),
//            'image'=>'',
//        ])->rowQuantity(10);
//        
//        $seeder->table('category')->columns([
//            'id',
//            'name'=>$faker->text(10),
//            'image'=>'',
//        ])->rowQuantity(10);
//        
//        
//        $seeder->table('food')->columns([
//            'id',
//            'category_id'=>$generator->relation('category', 'id'),
//            'user_id'=>$generator->relation('user', 'id'),
//            'name'=>$faker->text(10),
//            'image'=>'',
//            'content'=>$faker->text(50),
//        ])->rowQuantity(20);
//
//        $seeder->refill();
    }

    public function down()
    {
        
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
