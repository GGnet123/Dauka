<?php

use yii\db\Migration;

/**
 * Class m200721_134007_create_table_transport_types
 */
class m200721_134007_create_table_transport_types extends Migration
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

        $this->createTable('{{%transport_types}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%transport_types}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200721_134007_create_table_transport_types cannot be reverted.\n";

        return false;
    }
    */
}
