<?php


use yii\db\Migration;

class m230617_102551_linesDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%lines}}',
            ["id", "number", "name", "color", "style", "circular", "external_id", "sort"],
            [
                [
                    'id' => 21,
                    'number' => '1',
                    'name' => 'Сокольническая линия',
                    'color' => '#FF0000',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '1',
                    'sort' => 1,
                ],
                [
                    'id' => 22,
                    'number' => '2',
                    'name' => 'Замоскворецкая линия',
                    'color' => '#009245',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '2',
                    'sort' => 2,
                ],
                [
                    'id' => 23,
                    'number' => '3',
                    'name' => 'Арбатско-Покровская линия',
                    'color' => '#0078BE',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '3',
                    'sort' => 3,
                ],
                [
                    'id' => 24,
                    'number' => '4',
                    'name' => 'Филёвская линия',
                    'color' => '#00C0F2',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '4',
                    'sort' => 4,
                ],
                [
                    'id' => 25,
                    'number' => '5',
                    'name' => 'Калужско-Рижская линия',
                    'color' => '#FF7C00',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '5',
                    'sort' => 6,
                ],
                [
                    'id' => 26,
                    'number' => '6',
                    'name' => 'Кольцевая линия',
                    'color' => '#754C24',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '6',
                    'sort' => 5,
                ],
                [
                    'id' => 27,
                    'number' => '7',
                    'name' => 'Серпуховско-Тимирязевская линия',
                    'color' => '#A1A3A5',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '7',
                    'sort' => 9,
                ],
                [
                    'id' => 28,
                    'number' => '8',
                    'name' => 'Таганско-Краснопресненская линия',
                    'color' => '#93278F',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '8',
                    'sort' => 7,
                ],
                [
                    'id' => 29,
                    'number' => '9',
                    'name' => 'Калининская линия',
                    'color' => '#E8CC00',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '9',
                    'sort' => 8,
                ],
                [
                    'id' => 30,
                    'number' => '10',
                    'name' => 'Люблинско-Дмитровская линия',
                    'color' => '#ACD60D',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '10',
                    'sort' => 10,
                ],
                [
                    'id' => 31,
                    'number' => '11',
                    'name' => 'Большая кольцевая линия',
                    'color' => '#6CC1BA',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '11',
                    'sort' => 11,
                ],
                [
                    'id' => 32,
                    'number' => '12',
                    'name' => 'Бутовская линия',
                    'color' => '#ABBEE2',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '12',
                    'sort' => 12,
                ],
                [
                    'id' => 33,
                    'number' => '13',
                    'name' => 'Солнцевская линия',
                    'color' => '#FFDD00',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '13',
                    'sort' => 80,
                ],
                [
                    'id' => 34,
                    'number' => '14',
                    'name' => 'МЦД-1',
                    'color' => '#F7A600',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '14',
                    'sort' => 16,
                ],
                [
                    'id' => 35,
                    'number' => '15',
                    'name' => 'МЦД-2',
                    'color' => '#F42A7C',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '15',
                    'sort' => 17,
                ],
                [
                    'id' => 36,
                    'number' => '16',
                    'name' => 'МЦК',
                    'color' => '#FF0000',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '16',
                    'sort' => 14,
                ],
                [
                    'id' => 37,
                    'number' => '17',
                    'name' => 'Некрасовская линия',
                    'color' => '#E09EBF',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '17',
                    'sort' => 15,
                ],
                [
                    'id' => 38,
                    'number' => '20',
                    'name' => 'line 18',
                    'color' => '#FF0000',
                    'style' => null,
                    'circular' => 0,
                    'external_id' => '1',
                    'sort' => 1,
                ],
            ]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%lines}} CASCADE');
    }
}
