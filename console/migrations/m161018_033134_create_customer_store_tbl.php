<?php

use yii\db\Migration;

class m161018_033134_create_customer_store_tbl extends Migration
{
    public function up()
    {
        $this->createTable('customer_store', [
            'customer_id' => $this->integer()->notNull(),
            'store_id' => $this->integer()->notNull(),
            'PRIMARY KEY(customer_id, store_id)',
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
            'deleted_at' => $this->dateTime(),
        ]);
    }

    public function down()
    {
        $this->dropTable('customer_store');
    }
}
