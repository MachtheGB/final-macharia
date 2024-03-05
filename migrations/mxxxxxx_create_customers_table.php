<?php
use yii\db\Migration;

class mxxxxxx_create_customers_table extends Migration
{
    public function up()
    {
        $this->createTable('customers', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'phone' => $this->string(),
            'address' => $this->string(),
            'lead_level' => "ENUM('Cold Lead', 'Warm Lead', 'Hot Lead') NOT NULL DEFAULT 'Cold Lead'",
        ]);
    }

    public function down()
    {
        $this->dropTable('customers');
    }
}
