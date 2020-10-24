<?php

use yii\db\Migration;

/**
 * Class m200721_134024_create_table_order_delivery
 */
class m200721_134024_create_table_order_delivery extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%order_delivery}}', [
            'id' => $this->primaryKey(),
            'order_info' => $this->string(),
            'category_id' => $this->integer(),
            'package_size' => $this->integer(),
            'photo' => $this->string(),
            'from_address' => $this->string(),
            'from_me' => $this->boolean(),
            'giver_name' => $this->string(),
            'giver_phone' => $this->string(),
            'giver_email' => $this->string(),
            'to_address' => $this->string(),
            'to_me' => $this->boolean(),
            'taker_name' => $this->string(),
            'taker_phone' => $this->string(),
            'taker_email' => $this->string(),
            'urgency' => $this->integer(),
            'deadline' => $this->string(),
            'comment' => $this->string(),
            'created_at' => $this->timestamp()->defaultExpression('NOW()')->comment('Дата создания'),
            'updated_at' => $this->timestamp()->defaultExpression('NOW()')->comment('Дата редактирования'),
        ], $tableOptions);

        $this->addForeignKey(
            'fk-category',
            'order_delivery',
            'category_id',
            'categories',
            'id',
            'CASCADE',
            'NO ACTION'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-category', 'order_delivery');
        $this->dropTable('{{%order_delivery}}');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200721_134024_create_table_order_delivery cannot be reverted.\n";

        return false;
    }
    */
}
