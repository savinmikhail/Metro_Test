<?php

use yii\db\Schema;
use yii\db\Migration;

class m230617_101821_services extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable('{{%services}}',[
            'id'=> $this->primaryKey(),
            'code'=> $this->string(50)->notNull(),
            'name'=> $this->string(500)->notNull(),
            'icon'=> $this->string(500)->null()->defaultValue(null),
        ], $tableOptions);

        $this->createIndex('code','{{%services}}',['code'],false);
    }

    public function safeDown()
    {
            $this->dropTable('{{%services}}');
    }
}
