<?php

use yii\db\Migration;

class m161018_033551_create_fk_customer_store_tbl extends Migration
{
    public function up() {
        $this->addForeignKey("fk_store_tbl_customer_store_tbl", 'customer_store', 'store_id', 'store', 'id', "CASCADE");
        $this->addForeignKey("fk_customer_tbl_customer_store_tbl", 'customer_store', 'customer_id', 'customer', 'id', "CASCADE");
    }

    public function down() {
        $this->dropForeignKey("fk_store_tbl_customer_store_tbl", "customer_store");
        $this->dropForeignKey("fk_customer_tbl_customer_store_tbl", "customer_store");
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
