<?php

use yii\db\Migration;

class m161018_032728_create_customer_tbl extends Migration
{
    public function up()
    {
        $this->createTable('customer', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()->unique(),
            'email' => $this->string(100),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
            'deleted_at' => $this->dateTime(),
        ]);
    }

    public function down()
    {
        $this->dropTable('customer');
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
