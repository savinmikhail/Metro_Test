<?php

use yii\db\Schema;
use yii\db\Migration;

class m230617_102138_stations_exits extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable('{{%stations_exits}}',[
            'id'=> $this->primaryKey(),
            'station_id'=> $this->integer()->notNull(),
            'direction'=> "enum('forward', 'backward') NOT NULL",
            'doors'=> "enum('left', 'right') NOT NULL",
        ], $tableOptions);

        $this->createIndex('station_id','{{%stations_exits}}',['station_id'],false);
        $this->addForeignKey(
            'fk_stations_exits_station_id',
            '{{%stations_exits}}', 'station_id',
            '{{%stations}}', 'id',
            'CASCADE', 'CASCADE'
        );
    }

    public function safeDown()
    {
            $this->dropForeignKey('fk_stations_exits_station_id', '{{%stations_exits}}');
            $this->dropTable('{{%stations_exits}}');
    }
}
