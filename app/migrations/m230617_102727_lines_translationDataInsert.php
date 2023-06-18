<?php


use yii\db\Migration;

class m230617_102727_lines_translationDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%lines_translation}}',
            ["id", "line_id", "language_id", "value"],
            [
                [
                    'id' => 1,
                    'line_id' => 21,
                    'language_id' => 1,
                    'value' => 'Сокольническая линия',
                ],
                [
                    'id' => 2,
                    'line_id' => 21,
                    'language_id' => 2,
                    'value' => 'Sokolnicheskaya line',
                ],
                [
                    'id' => 3,
                    'line_id' => 22,
                    'language_id' => 1,
                    'value' => 'Замоскворецкая линия',
                ],
                [
                    'id' => 4,
                    'line_id' => 22,
                    'language_id' => 2,
                    'value' => 'Zamoskvoretskaya line',
                ],
                [
                    'id' => 5,
                    'line_id' => 23,
                    'language_id' => 1,
                    'value' => 'Арбатско-Покровская линия',
                ],
                [
                    'id' => 6,
                    'line_id' => 23,
                    'language_id' => 2,
                    'value' => 'Arbatsko-Pokrovskaya Line',
                ],
                [
                    'id' => 7,
                    'line_id' => 24,
                    'language_id' => 1,
                    'value' => 'Филёвская линия',
                ],
                [
                    'id' => 8,
                    'line_id' => 24,
                    'language_id' => 2,
                    'value' => 'Filevskaya line',
                ],
                [
                    'id' => 9,
                    'line_id' => 25,
                    'language_id' => 1,
                    'value' => 'Калужско-Рижская линия',
                ],
                [
                    'id' => 10,
                    'line_id' => 25,
                    'language_id' => 2,
                    'value' => 'Kaluzhsko-Rizhskaya Line',
                ],
                [
                    'id' => 11,
                    'line_id' => 26,
                    'language_id' => 1,
                    'value' => 'Кольцевая линия',
                ],
                [
                    'id' => 12,
                    'line_id' => 26,
                    'language_id' => 2,
                    'value' => 'Koltsevaya line',
                ],
                [
                    'id' => 13,
                    'line_id' => 27,
                    'language_id' => 1,
                    'value' => 'Серпуховско-Тимирязевская линия',
                ],
                [
                    'id' => 14,
                    'line_id' => 27,
                    'language_id' => 2,
                    'value' => 'Serpukhovksko-Timiryazevskaya line',
                ],
                [
                    'id' => 15,
                    'line_id' => 28,
                    'language_id' => 1,
                    'value' => 'Таганско-Краснопресненская линия',
                ],
                [
                    'id' => 16,
                    'line_id' => 28,
                    'language_id' => 2,
                    'value' => 'Tagansko-Krasnopresnenskaya line',
                ],
                [
                    'id' => 17,
                    'line_id' => 29,
                    'language_id' => 1,
                    'value' => 'Калининская линия',
                ],
                [
                    'id' => 18,
                    'line_id' => 29,
                    'language_id' => 2,
                    'value' => 'Kalininskaya line',
                ],
                [
                    'id' => 19,
                    'line_id' => 30,
                    'language_id' => 1,
                    'value' => 'Люблинско-Дмитровская линия',
                ],
                [
                    'id' => 20,
                    'line_id' => 30,
                    'language_id' => 2,
                    'value' => 'Lyublinsko-Dmitrovskaya line',
                ],
                [
                    'id' => 21,
                    'line_id' => 31,
                    'language_id' => 1,
                    'value' => 'Большая кольцевая линия',
                ],
                [
                    'id' => 22,
                    'line_id' => 31,
                    'language_id' => 2,
                    'value' => 'Bolshaya Koltsevaya line',
                ],
                [
                    'id' => 23,
                    'line_id' => 32,
                    'language_id' => 1,
                    'value' => 'Бутовская линия',
                ],
                [
                    'id' => 24,
                    'line_id' => 32,
                    'language_id' => 2,
                    'value' => 'Butovskaya line',
                ],
                [
                    'id' => 25,
                    'line_id' => 33,
                    'language_id' => 1,
                    'value' => 'Солнцевская линия',
                ],
                [
                    'id' => 26,
                    'line_id' => 33,
                    'language_id' => 2,
                    'value' => 'Solntsevskaya line',
                ],
                [
                    'id' => 27,
                    'line_id' => 34,
                    'language_id' => 1,
                    'value' => 'МЦД-1',
                ],
                [
                    'id' => 28,
                    'line_id' => 34,
                    'language_id' => 2,
                    'value' => 'D-1',
                ],
                [
                    'id' => 29,
                    'line_id' => 35,
                    'language_id' => 1,
                    'value' => 'МЦД-2',
                ],
                [
                    'id' => 30,
                    'line_id' => 35,
                    'language_id' => 2,
                    'value' => 'D-2',
                ],
                [
                    'id' => 31,
                    'line_id' => 36,
                    'language_id' => 1,
                    'value' => 'МЦК',
                ],
                [
                    'id' => 32,
                    'line_id' => 36,
                    'language_id' => 2,
                    'value' => 'MCC',
                ],
                [
                    'id' => 33,
                    'line_id' => 37,
                    'language_id' => 1,
                    'value' => 'Некрасовская линия',
                ],
                [
                    'id' => 34,
                    'line_id' => 37,
                    'language_id' => 2,
                    'value' => 'Nekrasovkaya line',
                ],
                [
                    'id' => 35,
                    'line_id' => 38,
                    'language_id' => 1,
                    'value' => 'Линия 123',
                ],
                [
                    'id' => 36,
                    'line_id' => 38,
                    'language_id' => 2,
                    'value' => 'Line 123',
                ],
            ]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%lines_translation}} CASCADE');
    }
}
