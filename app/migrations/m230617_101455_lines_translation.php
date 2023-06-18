<?php

use yii\db\Schema;
use yii\db\Migration;

class m230617_101455_lines_translation extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable('{{%lines_translation}}',[
            'id'=> $this->primaryKey(),
            'line_id'=> $this->integer()->notNull(),
            'language_id'=> $this->integer()->notNull(),
            'value'=> $this->string(255)->notNull(),
        ], $tableOptions);

        $this->createIndex('language_id','{{%lines_translation}}',['language_id'],false);
        $this->createIndex('line_id','{{%lines_translation}}',['line_id'],false);
        $this->addForeignKey(
            'fk_lines_translation_language_id',
            '{{%lines_translation}}', 'language_id',
            '{{%languages}}', 'id',
            'CASCADE', 'CASCADE'
        );
        $this->addForeignKey(
            'fk_lines_translation_line_id',
            '{{%lines_translation}}', 'line_id',
            '{{%lines}}', 'id',
            'CASCADE', 'CASCADE'
        );
    }

    public function safeDown()
    {
            $this->dropForeignKey('fk_lines_translation_language_id', '{{%lines_translation}}');
            $this->dropForeignKey('fk_lines_translation_line_id', '{{%lines_translation}}');
            $this->dropTable('{{%lines_translation}}');
    }
}
