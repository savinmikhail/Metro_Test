<?php

use yii\db\Schema;
use yii\db\Migration;

class m230617_102526_stations_translation extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable('{{%stations_translation}}',[
            'id'=> $this->primaryKey(),
            'station_id'=> $this->integer()->notNull(),
            'language_id'=> $this->integer()->notNull(),
            'value'=> $this->string(255)->notNull(),
        ], $tableOptions);

        $this->createIndex('station_id','{{%stations_translation}}',['station_id'],false);
        $this->addForeignKey(
            'fk_stations_translation_station_id',
            '{{%stations_translation}}', 'station_id',
            '{{%stations}}', 'id',
            'CASCADE', 'CASCADE'
        );
    }

    public function safeDown()
    {
            $this->dropForeignKey('fk_stations_translation_station_id', '{{%stations_translation}}');
            $this->dropTable('{{%stations_translation}}');
    }
}
