<?php

use yii\db\Schema;
use yii\db\Migration;

class m230617_100634_lines extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%lines}}',
            [
                'id'=> $this->primaryKey(),
                'number'=> $this->string(10)->notNull(),
                'name'=> $this->string(255)->notNull(),
                'color'=> $this->string(7)->notNull(),
                'style'=> "enum('fill', 'transparent') NULL DEFAULT NULL",
                'circular'=> $this->tinyInteger(1)->null()->defaultValue(0),
                'external_id'=> $this->string(128)->null()->defaultValue(null),
                'sort'=> $this->integer()->null()->defaultValue(null),
            ],$tableOptions
        );
        $this->createIndex('number','{{%lines}}',['number','name'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('number', '{{%lines}}');
        $this->dropTable('{{%lines}}');
    }
}
