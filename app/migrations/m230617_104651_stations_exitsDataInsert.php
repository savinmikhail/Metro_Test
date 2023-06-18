<?php

use yii\db\Migration;

class m230617_104651_stations_exitsDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%stations_exits}}',
                           ["id", "station_id", "direction", "doors"],
                            [
    [
        'id' => 1,
        'station_id' => 324,
        'direction' => 'forward',
        'doors' => 'left',
    ],
    [
        'id' => 2,
        'station_id' => 324,
        'direction' => 'forward',
        'doors' => 'right',
    ],
    [
        'id' => 3,
        'station_id' => 324,
        'direction' => 'backward',
        'doors' => 'left',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%stations_exits}} CASCADE');
    }
}
