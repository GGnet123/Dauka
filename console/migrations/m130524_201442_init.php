<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'phone_number' => $this->string()->notNull()->unique(),
            'name' => $this->string(),
            'iin' => $this->string(),
            'rating' => $this->double(1),
            'auth_key' => $this->string(32)->notNull(),
            'role' => $this->string(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->timestamp()->defaultExpression('NOW()')->comment('Дата создания'),
            'updated_at' => $this->timestamp()->defaultExpression('NOW()')->comment('Дата редактирования'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
