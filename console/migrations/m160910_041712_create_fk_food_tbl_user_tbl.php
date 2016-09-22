<?php

use yii\db\Migration;

class m160910_041712_create_fk_food_tbl_user_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_food_tbl_user_tbl", 'food', 'user_id', 'user', 'id', "CASCADE");
    }

    public function down()
    {
        $this->dropForeignKey("fk_food_tbl_user_tbl", "food");
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
