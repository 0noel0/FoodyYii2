<?php

use yii\db\Migration;

class m161011_043426_create_fk_user_tbl_auth_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey('fk_user_tbl_auth_tbl', 'auth', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey("fk_user_tbl_auth_tbl", "auth");
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
