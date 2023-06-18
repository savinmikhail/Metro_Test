<?php

use yii\db\Schema;
use yii\db\Migration;

class m230617_102511_stations_transfers extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable('{{%stations_transfers}}',[
            'id'=> $this->primaryKey(),
            'station_id'=> $this->integer()->notNull(),
            'station_to_id'=> $this->integer()->null()->defaultValue(null),
            'type'=> "enum('mcc', 'mcd', 'metro', 'ground') NOT NULL",
            'name'=> $this->string(255)->null()->defaultValue(null),
            'code'=> $this->string(50)->null()->defaultValue(null),
            'icon'=> $this->string(500)->null()->defaultValue(null),
        ], $tableOptions);

        $this->createIndex('station_id_2','{{%stations_transfers}}',['station_id','station_to_id'],true);
        $this->createIndex('station_id','{{%stations_transfers}}',['station_id'],false);
        $this->createIndex('station_to_id','{{%stations_transfers}}',['station_to_id'],false);
        $this->addForeignKey(
            'fk_stations_transfers_station_id',
            '{{%stations_transfers}}', 'station_id',
            '{{%stations}}', 'id',
            'CASCADE', 'CASCADE'
        );
        $this->addForeignKey(
            'fk_stations_transfers_station_to_id',
            '{{%stations_transfers}}', 'station_to_id',
            '{{%stations}}', 'id',
            'CASCADE', 'CASCADE'
        );
    }

    public function safeDown()
    {
            $this->dropForeignKey('fk_stations_transfers_station_id', '{{%stations_transfers}}');
            $this->dropForeignKey('fk_stations_transfers_station_to_id', '{{%stations_transfers}}');
            $this->dropTable('{{%stations_transfers}}');
    }
}
