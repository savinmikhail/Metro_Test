<?php


use yii\db\Migration;

class m230617_104630_stations_audioDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%stations_audio}}',
            ["id", "station_id", "direction", "action", "sound"],
            [
                [
                    'id' => '1',
                    'station_id' => '3',
                    'direction' => 'forward',
                    'action' => 'arrive',
                    'sound' => 'foo',
                ],
            ]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%stations_audio}} CASCADE');
    }
}
