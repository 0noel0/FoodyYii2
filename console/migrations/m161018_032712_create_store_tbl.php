<?php

use yii\db\Migration;

class m161018_032712_create_store_tbl extends Migration
{
    public function up()
    {
        $this->createTable('store', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()->unique(),
            'rank' => $this->string(50)->notNull(),
            'image' => $this->string(100),
            'detail' => $this->text(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
            'deleted_at' => $this->dateTime(),
        ]);
    }

    public function down()
    {
        $this->dropTable('store');
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
