<?php
use yii\db\Migration;

class mxxxxxx_create_users_table extends Migration
{
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'password_hash' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'email' => $this->string()->notNull(),
            'phone_number' => $this->string(),
        ]);
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
