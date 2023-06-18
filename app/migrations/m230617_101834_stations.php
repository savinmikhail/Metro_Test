<?php

use yii\db\Schema;
use yii\db\Migration;

class m230617_101834_stations extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable('{{%stations}}',[
            'id'=> $this->primaryKey(),
            'external_id'=> $this->string(128)->null()->defaultValue(null),
            'number'=> $this->string(128)->null()->defaultValue(null),
            'line_id'=> $this->integer()->notNull(),
            'name'=> $this->string(128)->notNull(),
            'cross_line_id'=> $this->integer()->null()->defaultValue(null),
            'cross_type'=> "enum('simple', 'circular') NULL DEFAULT NULL",
            'crossPlatform'=> $this->tinyInteger(1)->null()->defaultValue(null),
            'crossPlatformColor'=> $this->string(7)->null()->defaultValue(null),
            'scheme'=> $this->string(500)->null()->defaultValue(null),
            'sort'=> $this->integer()->null()->defaultValue(null),
            'active'=> $this->integer()->notNull()->defaultValue(1),
        ], $tableOptions);

        $this->createIndex('line_id','{{%stations}}',['line_id','cross_line_id'],false);
        $this->addForeignKey(
            'fk_stations_line_id',
            '{{%stations}}', 'line_id',
            '{{%lines}}', 'id',
            'CASCADE', 'CASCADE'
        );
    }

    public function safeDown()
    {
            $this->dropForeignKey('fk_stations_line_id', '{{%stations}}');
            $this->dropTable('{{%stations}}');
    }
}
