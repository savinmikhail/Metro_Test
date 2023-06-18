<?php

use yii\db\Schema;
use yii\db\Migration;

class m230617_102025_stations_audio extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable('{{%stations_audio}}',[
            'id'=> $this->primaryKey(),
            'station_id'=> $this->integer()->notNull(),
            'direction'=> "enum('forward', 'backward') NOT NULL",
            'action'=> "enum('arrive', 'departure', 'toend') NOT NULL",
            'sound'=> $this->string(500)->null()->defaultValue(null),
        ], $tableOptions);

        $this->createIndex('station_id','{{%stations_audio}}',['station_id'],false);
        $this->addForeignKey(
            'fk_stations_audio_station_id',
            '{{%stations_audio}}', 'station_id',
            '{{%stations}}', 'id',
            'CASCADE', 'CASCADE'
        );
    }

    public function safeDown()
    {
            $this->dropForeignKey('fk_stations_audio_station_id', '{{%stations_audio}}');
            $this->dropTable('{{%stations_audio}}');
    }
}
