<?php

use yii\db\Schema;
use yii\db\Migration;

class m230617_095028_languages extends Migration
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
            '{{%languages}}',
            [
                'id'=> $this->primaryKey(),
                'active'=> $this->tinyInteger(1)->notNull()->defaultValue(0),
                'name'=> $this->string(128)->notNull(),
                'code'=> $this->string(50)->notNull(),
                'sort'=> $this->integer()->notNull(),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%languages}}');
    }
}
