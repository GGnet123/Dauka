<?php

use yii\db\Migration;

/**
 * Class m201023_220416_create_table_advertisements
 */
class m201023_220416_create_table_advertisements extends Migration
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
        $this->createTable('advertisements', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'address' => $this->string(),
            'area' => $this->string(),
            'region' => $this->string(),
            'city' => $this->string(),
            'year' => $this->string(),
            'price' => $this->string(),
            'description' => $this->text(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('advertisements');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201023_220416_create_table_advertisements cannot be reverted.\n";

        return false;
    }
    */
}
