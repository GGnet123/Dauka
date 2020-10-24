<?php

use yii\db\Migration;

/**
 * Class m200721_134043_create_table_transports
 */
class m200721_134043_create_table_transports extends Migration
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

        $this->createTable('{{%transports}}', [
            'id' => $this->primaryKey(),
            'type_id' => $this->integer(),
            'title' => $this->string()
        ], $tableOptions);

        $this->addForeignKey(
            'fk-type',
            'transports',
            'type_id',
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
        $this->dropForeignKey('fk-type', 'transports');
        $this->dropTable('{{%transports}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200721_134043_create_table_transports cannot be reverted.\n";

        return false;
    }
    */
}
