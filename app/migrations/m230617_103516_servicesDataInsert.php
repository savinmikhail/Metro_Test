<?php

use yii\db\Migration;

class m230617_103516_servicesDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%services}}',
                           ["id", "code", "name", "icon"],
                            [
    [
        'id' => 1,
        'code' => 'BANK',
        'name' => 'Банкомат',
        'icon' => null,
    ],
    [
        'id' => 2,
        'code' => 'FOOD',
        'name' => 'Продажа еды',
        'icon' => null,
    ],
    [
        'id' => 3,
        'code' => 'INFO',
        'name' => 'Информационная стойка',
        'icon' => null,
    ],
    [
        'id' => 4,
        'code' => 'PRINT',
        'name' => 'Печать',
        'icon' => null,
    ],
    [
        'id' => 5,
        'code' => 'SALES',
        'name' => 'Точка продаж (бизнес)',
        'icon' => null,
    ],
    [
        'id' => 6,
        'code' => 'COFFEE',
        'name' => 'Можно купить кофе',
        'icon' => null,
    ],
    [
        'id' => 7,
        'code' => 'TOILET',
        'name' => 'Туалет',
        'icon' => null,
    ],
    [
        'id' => 8,
        'code' => 'OPTICS',
        'name' => 'Салоны оптики',
        'icon' => null,
    ],
    [
        'id' => 9,
        'code' => 'FLOWERS',
        'name' => 'Продажа цветов',
        'icon' => null,
    ],
    [
        'id' => 10,
        'code' => 'BATTERY',
        'name' => 'Зарядка для гаджетов',
        'icon' => null,
    ],
    [
        'id' => 11,
        'code' => 'CARRIER',
        'name' => 'Продажа сим карт',
        'icon' => null,
    ],
    [
        'id' => 12,
        'code' => 'THEATRE',
        'name' => 'Билеты на театр',
        'icon' => null,
    ],
    [
        'id' => 13,
        'code' => 'VENDING',
        'name' => 'Вендинговые автоматы',
        'icon' => null,
    ],
    [
        'id' => 14,
        'code' => 'INVALID',
        'name' => 'Поддержка МГН',
        'icon' => null,
    ],
    [
        'id' => 15,
        'code' => 'PARKING',
        'name' => 'Парковка перехватывающая',
        'icon' => null,
    ],
    [
        'id' => 16,
        'code' => 'SIMCARD',
        'name' => 'Симкаматы',
        'icon' => null,
    ],
    [
        'id' => 17,
        'code' => 'ELEVATOR',
        'name' => 'Лифт',
        'icon' => null,
    ],
    [
        'id' => 18,
        'code' => 'CANDY',
        'name' => 'Продажа сладостей',
        'icon' => null,
    ],
    [
        'id' => 19,
        'code' => 'WINDOW',
        'name' => 'Сервисное окно',
        'icon' => null,
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%services}} CASCADE');
    }
}
