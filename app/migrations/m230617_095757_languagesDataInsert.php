<?php


use yii\db\Migration;

class m230617_095757_languagesDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%languages}}',
            ["id", "active", "name", "code", "sort"],
            [
                [
                    'id' => 1,
                    'active' => 1,
                    'name' => 'Русский',
                    'code' => 'rus',
                    'sort' => 1,
                ],
                [
                    'id' => 2,
                    'active' => 1,
                    'name' => 'Транслит',
                    'code' => 'eng',
                    'sort' => 2,
                ],
            ]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%languages}} CASCADE');
    }
}
