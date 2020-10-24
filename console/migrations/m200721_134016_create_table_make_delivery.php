<?php

use yii\db\Migration;

/**
 * Class m200721_134016_create_table_make_delivery
 */
class m200721_134016_create_table_make_delivery extends Migration
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

        $this->createTable('{{%make_delivery}}', [
            'id' => $this->primaryKey(),
            'from_address' => $this->string(),
            'to_address' => $this->string(),
            'date' => $this->string(),
            'transport_type_id' => $this->integer(),
            'on_road_task' => $this->string(),
            'type' => $this->integer(),
            'package_size' => $this->integer(),
            'comment' => $this->string(),
            'price' => $this->integer(),
            'created_at' => $this->timestamp()->defaultExpression('NOW()')->comment('Дата создания'),
            'updated_at' => $this->timestamp()->defaultExpression('NOW()')->comment('Дата редактирования'),
        ], $tableOptions);

        $this->addForeignKey(
            'fk-transport-type',
            'make_delivery',
            'transport_type_id',
            'transport_types',
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
        $this->dropForeignKey('fk-transport-type', 'make_delivery');
        $this->dropTable('{{%make_delivery}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200721_134016_create_table_make_delivery cannot be reverted.\n";

        return false;
    }
    */
}
