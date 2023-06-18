<?php

use yii\db\Schema;
use yii\db\Migration;

class m230617_102358_stations_features extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable('{{%stations_features}}',[
            'id'=> $this->primaryKey(),
            'station_id'=> $this->integer()->null()->defaultValue(null),
            'feature_id'=> $this->integer()->notNull(),
        ], $tableOptions);

        $this->createIndex('feature_id','{{%stations_features}}',['feature_id'],false);
        $this->createIndex('station_id','{{%stations_features}}',['station_id'],false);
        $this->addForeignKey(
            'fk_stations_features_station_id',
            '{{%stations_features}}', 'station_id',
            '{{%stations}}', 'id',
            'CASCADE', 'CASCADE'
        );
        $this->addForeignKey(
            'fk_stations_features_feature_id',
            '{{%stations_features}}', 'feature_id',
            '{{%services}}', 'id',
            'CASCADE', 'CASCADE'
        );
    }

    public function safeDown()
    {
            $this->dropForeignKey('fk_stations_features_station_id', '{{%stations_features}}');
            $this->dropForeignKey('fk_stations_features_feature_id', '{{%stations_features}}');
            $this->dropTable('{{%stations_features}}');
    }
}
