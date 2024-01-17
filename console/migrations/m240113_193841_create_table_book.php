<?php

use yii\db\Migration;

/**
 * Class m240113_193841_create_table_book
 */
class m240113_193841_create_table_book extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // https://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('book', [
            'id' => 'pk',
            'title' => $this->string(32)->notNull(),
            'description' => $this->string(244),
            'author' => $this->string(32),
            'pages' => $this->integer()->notNull(),
            'created_at' => $this->string()->notNull(),
            'updated_at' => $this->string()->notNull()

        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('book');
    }
}
