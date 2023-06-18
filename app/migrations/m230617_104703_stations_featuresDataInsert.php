<?php

use yii\db\Migration;

class m230617_104703_stations_featuresDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%stations_features}}',
                           ["id", "station_id", "feature_id"],
                            [
    [
        'id' => 1,
        'station_id' => 3,
        'feature_id' => 10,
    ],
    [
        'id' => 2,
        'station_id' => 3,
        'feature_id' => 1,
    ],
    [
        'id' => 3,
        'station_id' => 4,
        'feature_id' => 14,
    ],
    [
        'id' => 4,
        'station_id' => 5,
        'feature_id' => 14,
    ],
    [
        'id' => 5,
        'station_id' => 5,
        'feature_id' => 17,
    ],
    [
        'id' => 6,
        'station_id' => 5,
        'feature_id' => 15,
    ],
    [
        'id' => 7,
        'station_id' => 6,
        'feature_id' => 14,
    ],
    [
        'id' => 8,
        'station_id' => 6,
        'feature_id' => 6,
    ],
    [
        'id' => 9,
        'station_id' => 6,
        'feature_id' => 10,
    ],
    [
        'id' => 10,
        'station_id' => 6,
        'feature_id' => 1,
    ],
    [
        'id' => 11,
        'station_id' => 7,
        'feature_id' => 11,
    ],
    [
        'id' => 12,
        'station_id' => 7,
        'feature_id' => 9,
    ],
    [
        'id' => 13,
        'station_id' => 7,
        'feature_id' => 6,
    ],
    [
        'id' => 14,
        'station_id' => 7,
        'feature_id' => 12,
    ],
    [
        'id' => 15,
        'station_id' => 7,
        'feature_id' => 5,
    ],
    [
        'id' => 16,
        'station_id' => 7,
        'feature_id' => 4,
    ],
    [
        'id' => 17,
        'station_id' => 7,
        'feature_id' => 8,
    ],
    [
        'id' => 18,
        'station_id' => 7,
        'feature_id' => 1,
    ],
    [
        'id' => 19,
        'station_id' => 7,
        'feature_id' => 18,
    ],
    [
        'id' => 20,
        'station_id' => 8,
        'feature_id' => 3,
    ],
    [
        'id' => 21,
        'station_id' => 8,
        'feature_id' => 17,
    ],
    [
        'id' => 22,
        'station_id' => 8,
        'feature_id' => 15,
    ],
    [
        'id' => 23,
        'station_id' => 9,
        'feature_id' => 11,
    ],
    [
        'id' => 24,
        'station_id' => 9,
        'feature_id' => 14,
    ],
    [
        'id' => 25,
        'station_id' => 9,
        'feature_id' => 10,
    ],
    [
        'id' => 26,
        'station_id' => 9,
        'feature_id' => 5,
    ],
    [
        'id' => 27,
        'station_id' => 9,
        'feature_id' => 7,
    ],
    [
        'id' => 28,
        'station_id' => 9,
        'feature_id' => 13,
    ],
    [
        'id' => 29,
        'station_id' => 9,
        'feature_id' => 1,
    ],
    [
        'id' => 30,
        'station_id' => 10,
        'feature_id' => 6,
    ],
    [
        'id' => 31,
        'station_id' => 10,
        'feature_id' => 5,
    ],
    [
        'id' => 32,
        'station_id' => 10,
        'feature_id' => 1,
    ],
    [
        'id' => 33,
        'station_id' => 10,
        'feature_id' => 18,
    ],
    [
        'id' => 34,
        'station_id' => 11,
        'feature_id' => 14,
    ],
    [
        'id' => 35,
        'station_id' => 11,
        'feature_id' => 13,
    ],
    [
        'id' => 36,
        'station_id' => 11,
        'feature_id' => 1,
    ],
    [
        'id' => 37,
        'station_id' => 12,
        'feature_id' => 11,
    ],
    [
        'id' => 38,
        'station_id' => 12,
        'feature_id' => 14,
    ],
    [
        'id' => 39,
        'station_id' => 12,
        'feature_id' => 9,
    ],
    [
        'id' => 40,
        'station_id' => 12,
        'feature_id' => 3,
    ],
    [
        'id' => 41,
        'station_id' => 12,
        'feature_id' => 6,
    ],
    [
        'id' => 42,
        'station_id' => 12,
        'feature_id' => 10,
    ],
    [
        'id' => 43,
        'station_id' => 12,
        'feature_id' => 5,
    ],
    [
        'id' => 44,
        'station_id' => 12,
        'feature_id' => 17,
    ],
    [
        'id' => 45,
        'station_id' => 12,
        'feature_id' => 1,
    ],
    [
        'id' => 46,
        'station_id' => 12,
        'feature_id' => 18,
    ],
    [
        'id' => 47,
        'station_id' => 13,
        'feature_id' => 14,
    ],
    [
        'id' => 48,
        'station_id' => 13,
        'feature_id' => 9,
    ],
    [
        'id' => 49,
        'station_id' => 13,
        'feature_id' => 6,
    ],
    [
        'id' => 50,
        'station_id' => 13,
        'feature_id' => 12,
    ],
    [
        'id' => 51,
        'station_id' => 13,
        'feature_id' => 5,
    ],
    [
        'id' => 52,
        'station_id' => 13,
        'feature_id' => 4,
    ],
    [
        'id' => 53,
        'station_id' => 13,
        'feature_id' => 8,
    ],
    [
        'id' => 54,
        'station_id' => 13,
        'feature_id' => 13,
    ],
    [
        'id' => 55,
        'station_id' => 13,
        'feature_id' => 2,
    ],
    [
        'id' => 56,
        'station_id' => 13,
        'feature_id' => 1,
    ],
    [
        'id' => 57,
        'station_id' => 13,
        'feature_id' => 18,
    ],
    [
        'id' => 58,
        'station_id' => 14,
        'feature_id' => 7,
    ],
    [
        'id' => 59,
        'station_id' => 14,
        'feature_id' => 1,
    ],
    [
        'id' => 60,
        'station_id' => 15,
        'feature_id' => 1,
    ],
    [
        'id' => 61,
        'station_id' => 16,
        'feature_id' => 11,
    ],
    [
        'id' => 62,
        'station_id' => 16,
        'feature_id' => 10,
    ],
    [
        'id' => 63,
        'station_id' => 16,
        'feature_id' => 1,
    ],
    [
        'id' => 64,
        'station_id' => 17,
        'feature_id' => 10,
    ],
    [
        'id' => 65,
        'station_id' => 17,
        'feature_id' => 1,
    ],
    [
        'id' => 66,
        'station_id' => 18,
        'feature_id' => 14,
    ],
    [
        'id' => 67,
        'station_id' => 18,
        'feature_id' => 17,
    ],
    [
        'id' => 68,
        'station_id' => 19,
        'feature_id' => 11,
    ],
    [
        'id' => 69,
        'station_id' => 19,
        'feature_id' => 14,
    ],
    [
        'id' => 70,
        'station_id' => 19,
        'feature_id' => 10,
    ],
    [
        'id' => 71,
        'station_id' => 19,
        'feature_id' => 1,
    ],
    [
        'id' => 72,
        'station_id' => 20,
        'feature_id' => 2,
    ],
    [
        'id' => 73,
        'station_id' => 20,
        'feature_id' => 1,
    ],
    [
        'id' => 74,
        'station_id' => 21,
        'feature_id' => 11,
    ],
    [
        'id' => 75,
        'station_id' => 21,
        'feature_id' => 7,
    ],
    [
        'id' => 76,
        'station_id' => 21,
        'feature_id' => 1,
    ],
    [
        'id' => 77,
        'station_id' => 22,
        'feature_id' => 11,
    ],
    [
        'id' => 78,
        'station_id' => 22,
        'feature_id' => 9,
    ],
    [
        'id' => 79,
        'station_id' => 22,
        'feature_id' => 3,
    ],
    [
        'id' => 80,
        'station_id' => 22,
        'feature_id' => 6,
    ],
    [
        'id' => 81,
        'station_id' => 22,
        'feature_id' => 12,
    ],
    [
        'id' => 82,
        'station_id' => 22,
        'feature_id' => 5,
    ],
    [
        'id' => 83,
        'station_id' => 22,
        'feature_id' => 1,
    ],
    [
        'id' => 84,
        'station_id' => 23,
        'feature_id' => 7,
    ],
    [
        'id' => 85,
        'station_id' => 23,
        'feature_id' => 1,
    ],
    [
        'id' => 86,
        'station_id' => 24,
        'feature_id' => 1,
    ],
    [
        'id' => 87,
        'station_id' => 25,
        'feature_id' => 10,
    ],
    [
        'id' => 88,
        'station_id' => 26,
        'feature_id' => 11,
    ],
    [
        'id' => 89,
        'station_id' => 26,
        'feature_id' => 14,
    ],
    [
        'id' => 90,
        'station_id' => 26,
        'feature_id' => 10,
    ],
    [
        'id' => 91,
        'station_id' => 26,
        'feature_id' => 5,
    ],
    [
        'id' => 92,
        'station_id' => 26,
        'feature_id' => 4,
    ],
    [
        'id' => 93,
        'station_id' => 26,
        'feature_id' => 13,
    ],
    [
        'id' => 94,
        'station_id' => 26,
        'feature_id' => 1,
    ],
    [
        'id' => 95,
        'station_id' => 27,
        'feature_id' => 11,
    ],
    [
        'id' => 96,
        'station_id' => 27,
        'feature_id' => 1,
    ],
    [
        'id' => 97,
        'station_id' => 28,
        'feature_id' => 11,
    ],
    [
        'id' => 98,
        'station_id' => 28,
        'feature_id' => 10,
    ],
    [
        'id' => 99,
        'station_id' => 28,
        'feature_id' => 7,
    ],
    [
        'id' => 100,
        'station_id' => 28,
        'feature_id' => 1,
    ],
    [
        'id' => 101,
        'station_id' => 29,
        'feature_id' => 5,
    ],
    [
        'id' => 102,
        'station_id' => 29,
        'feature_id' => 17,
    ],
    [
        'id' => 103,
        'station_id' => 29,
        'feature_id' => 4,
    ],
    [
        'id' => 104,
        'station_id' => 30,
        'feature_id' => 14,
    ],
    [
        'id' => 105,
        'station_id' => 30,
        'feature_id' => 17,
    ],
    [
        'id' => 106,
        'station_id' => 30,
        'feature_id' => 13,
    ],
    [
        'id' => 107,
        'station_id' => 30,
        'feature_id' => 1,
    ],
    [
        'id' => 108,
        'station_id' => 31,
        'feature_id' => 11,
    ],
    [
        'id' => 109,
        'station_id' => 31,
        'feature_id' => 10,
    ],
    [
        'id' => 110,
        'station_id' => 31,
        'feature_id' => 17,
    ],
    [
        'id' => 111,
        'station_id' => 31,
        'feature_id' => 13,
    ],
    [
        'id' => 112,
        'station_id' => 31,
        'feature_id' => 1,
    ],
    [
        'id' => 113,
        'station_id' => 32,
        'feature_id' => 17,
    ],
    [
        'id' => 114,
        'station_id' => 32,
        'feature_id' => 15,
    ],
    [
        'id' => 115,
        'station_id' => 33,
        'feature_id' => 3,
    ],
    [
        'id' => 116,
        'station_id' => 33,
        'feature_id' => 1,
    ],
    [
        'id' => 117,
        'station_id' => 34,
        'feature_id' => 10,
    ],
    [
        'id' => 118,
        'station_id' => 34,
        'feature_id' => 17,
    ],
    [
        'id' => 119,
        'station_id' => 34,
        'feature_id' => 13,
    ],
    [
        'id' => 120,
        'station_id' => 34,
        'feature_id' => 1,
    ],
    [
        'id' => 121,
        'station_id' => 35,
        'feature_id' => 17,
    ],
    [
        'id' => 122,
        'station_id' => 35,
        'feature_id' => 1,
    ],
    [
        'id' => 123,
        'station_id' => 36,
        'feature_id' => 14,
    ],
    [
        'id' => 124,
        'station_id' => 36,
        'feature_id' => 1,
    ],
    [
        'id' => 125,
        'station_id' => 37,
        'feature_id' => 11,
    ],
    [
        'id' => 126,
        'station_id' => 37,
        'feature_id' => 10,
    ],
    [
        'id' => 127,
        'station_id' => 37,
        'feature_id' => 1,
    ],
    [
        'id' => 128,
        'station_id' => 38,
        'feature_id' => 1,
    ],
    [
        'id' => 129,
        'station_id' => 40,
        'feature_id' => 14,
    ],
    [
        'id' => 130,
        'station_id' => 41,
        'feature_id' => 11,
    ],
    [
        'id' => 131,
        'station_id' => 41,
        'feature_id' => 14,
    ],
    [
        'id' => 132,
        'station_id' => 41,
        'feature_id' => 10,
    ],
    [
        'id' => 133,
        'station_id' => 41,
        'feature_id' => 1,
    ],
    [
        'id' => 134,
        'station_id' => 42,
        'feature_id' => 3,
    ],
    [
        'id' => 135,
        'station_id' => 42,
        'feature_id' => 10,
    ],
    [
        'id' => 136,
        'station_id' => 42,
        'feature_id' => 1,
    ],
    [
        'id' => 137,
        'station_id' => 43,
        'feature_id' => 14,
    ],
    [
        'id' => 138,
        'station_id' => 43,
        'feature_id' => 10,
    ],
    [
        'id' => 139,
        'station_id' => 43,
        'feature_id' => 17,
    ],
    [
        'id' => 140,
        'station_id' => 43,
        'feature_id' => 1,
    ],
    [
        'id' => 141,
        'station_id' => 44,
        'feature_id' => 11,
    ],
    [
        'id' => 142,
        'station_id' => 44,
        'feature_id' => 14,
    ],
    [
        'id' => 143,
        'station_id' => 44,
        'feature_id' => 9,
    ],
    [
        'id' => 144,
        'station_id' => 44,
        'feature_id' => 6,
    ],
    [
        'id' => 145,
        'station_id' => 44,
        'feature_id' => 12,
    ],
    [
        'id' => 146,
        'station_id' => 44,
        'feature_id' => 5,
    ],
    [
        'id' => 147,
        'station_id' => 44,
        'feature_id' => 4,
    ],
    [
        'id' => 148,
        'station_id' => 44,
        'feature_id' => 8,
    ],
    [
        'id' => 149,
        'station_id' => 44,
        'feature_id' => 13,
    ],
    [
        'id' => 150,
        'station_id' => 45,
        'feature_id' => 14,
    ],
    [
        'id' => 151,
        'station_id' => 45,
        'feature_id' => 1,
    ],
    [
        'id' => 152,
        'station_id' => 46,
        'feature_id' => 14,
    ],
    [
        'id' => 153,
        'station_id' => 46,
        'feature_id' => 1,
    ],
    [
        'id' => 154,
        'station_id' => 47,
        'feature_id' => 11,
    ],
    [
        'id' => 155,
        'station_id' => 47,
        'feature_id' => 14,
    ],
    [
        'id' => 156,
        'station_id' => 47,
        'feature_id' => 9,
    ],
    [
        'id' => 157,
        'station_id' => 47,
        'feature_id' => 6,
    ],
    [
        'id' => 158,
        'station_id' => 47,
        'feature_id' => 12,
    ],
    [
        'id' => 159,
        'station_id' => 47,
        'feature_id' => 5,
    ],
    [
        'id' => 160,
        'station_id' => 47,
        'feature_id' => 15,
    ],
    [
        'id' => 161,
        'station_id' => 47,
        'feature_id' => 4,
    ],
    [
        'id' => 162,
        'station_id' => 47,
        'feature_id' => 8,
    ],
    [
        'id' => 163,
        'station_id' => 47,
        'feature_id' => 13,
    ],
    [
        'id' => 164,
        'station_id' => 47,
        'feature_id' => 1,
    ],
    [
        'id' => 165,
        'station_id' => 47,
        'feature_id' => 18,
    ],
    [
        'id' => 166,
        'station_id' => 48,
        'feature_id' => 10,
    ],
    [
        'id' => 167,
        'station_id' => 48,
        'feature_id' => 5,
    ],
    [
        'id' => 168,
        'station_id' => 48,
        'feature_id' => 17,
    ],
    [
        'id' => 169,
        'station_id' => 48,
        'feature_id' => 4,
    ],
    [
        'id' => 170,
        'station_id' => 48,
        'feature_id' => 13,
    ],
    [
        'id' => 171,
        'station_id' => 49,
        'feature_id' => 11,
    ],
    [
        'id' => 172,
        'station_id' => 49,
        'feature_id' => 14,
    ],
    [
        'id' => 173,
        'station_id' => 49,
        'feature_id' => 6,
    ],
    [
        'id' => 174,
        'station_id' => 49,
        'feature_id' => 12,
    ],
    [
        'id' => 175,
        'station_id' => 49,
        'feature_id' => 10,
    ],
    [
        'id' => 176,
        'station_id' => 49,
        'feature_id' => 5,
    ],
    [
        'id' => 177,
        'station_id' => 49,
        'feature_id' => 17,
    ],
    [
        'id' => 178,
        'station_id' => 49,
        'feature_id' => 4,
    ],
    [
        'id' => 179,
        'station_id' => 49,
        'feature_id' => 8,
    ],
    [
        'id' => 180,
        'station_id' => 49,
        'feature_id' => 13,
    ],
    [
        'id' => 181,
        'station_id' => 49,
        'feature_id' => 18,
    ],
    [
        'id' => 182,
        'station_id' => 50,
        'feature_id' => 11,
    ],
    [
        'id' => 183,
        'station_id' => 50,
        'feature_id' => 14,
    ],
    [
        'id' => 184,
        'station_id' => 50,
        'feature_id' => 17,
    ],
    [
        'id' => 185,
        'station_id' => 50,
        'feature_id' => 15,
    ],
    [
        'id' => 186,
        'station_id' => 50,
        'feature_id' => 1,
    ],
    [
        'id' => 187,
        'station_id' => 51,
        'feature_id' => 14,
    ],
    [
        'id' => 188,
        'station_id' => 52,
        'feature_id' => 14,
    ],
    [
        'id' => 189,
        'station_id' => 52,
        'feature_id' => 10,
    ],
    [
        'id' => 190,
        'station_id' => 52,
        'feature_id' => 5,
    ],
    [
        'id' => 191,
        'station_id' => 52,
        'feature_id' => 17,
    ],
    [
        'id' => 192,
        'station_id' => 52,
        'feature_id' => 15,
    ],
    [
        'id' => 193,
        'station_id' => 52,
        'feature_id' => 4,
    ],
    [
        'id' => 194,
        'station_id' => 52,
        'feature_id' => 13,
    ],
    [
        'id' => 195,
        'station_id' => 53,
        'feature_id' => 17,
    ],
    [
        'id' => 196,
        'station_id' => 54,
        'feature_id' => 14,
    ],
    [
        'id' => 197,
        'station_id' => 54,
        'feature_id' => 3,
    ],
    [
        'id' => 198,
        'station_id' => 54,
        'feature_id' => 17,
    ],
    [
        'id' => 199,
        'station_id' => 54,
        'feature_id' => 15,
    ],
    [
        'id' => 200,
        'station_id' => 54,
        'feature_id' => 1,
    ],
    [
        'id' => 201,
        'station_id' => 55,
        'feature_id' => 11,
    ],
    [
        'id' => 202,
        'station_id' => 55,
        'feature_id' => 14,
    ],
    [
        'id' => 203,
        'station_id' => 55,
        'feature_id' => 3,
    ],
    [
        'id' => 204,
        'station_id' => 55,
        'feature_id' => 1,
    ],
    [
        'id' => 205,
        'station_id' => 57,
        'feature_id' => 3,
    ],
    [
        'id' => 206,
        'station_id' => 57,
        'feature_id' => 7,
    ],
    [
        'id' => 207,
        'station_id' => 57,
        'feature_id' => 1,
    ],
    [
        'id' => 208,
        'station_id' => 58,
        'feature_id' => 1,
    ],
    [
        'id' => 209,
        'station_id' => 60,
        'feature_id' => 7,
    ],
    [
        'id' => 210,
        'station_id' => 61,
        'feature_id' => 11,
    ],
    [
        'id' => 211,
        'station_id' => 61,
        'feature_id' => 10,
    ],
    [
        'id' => 212,
        'station_id' => 61,
        'feature_id' => 1,
    ],
    [
        'id' => 213,
        'station_id' => 62,
        'feature_id' => 3,
    ],
    [
        'id' => 214,
        'station_id' => 62,
        'feature_id' => 10,
    ],
    [
        'id' => 215,
        'station_id' => 62,
        'feature_id' => 2,
    ],
    [
        'id' => 216,
        'station_id' => 62,
        'feature_id' => 1,
    ],
    [
        'id' => 217,
        'station_id' => 63,
        'feature_id' => 14,
    ],
    [
        'id' => 218,
        'station_id' => 63,
        'feature_id' => 10,
    ],
    [
        'id' => 219,
        'station_id' => 63,
        'feature_id' => 1,
    ],
    [
        'id' => 220,
        'station_id' => 64,
        'feature_id' => 14,
    ],
    [
        'id' => 221,
        'station_id' => 64,
        'feature_id' => 15,
    ],
    [
        'id' => 222,
        'station_id' => 65,
        'feature_id' => 14,
    ],
    [
        'id' => 223,
        'station_id' => 65,
        'feature_id' => 10,
    ],
    [
        'id' => 224,
        'station_id' => 65,
        'feature_id' => 5,
    ],
    [
        'id' => 225,
        'station_id' => 65,
        'feature_id' => 13,
    ],
    [
        'id' => 226,
        'station_id' => 65,
        'feature_id' => 1,
    ],
    [
        'id' => 227,
        'station_id' => 72,
        'feature_id' => 11,
    ],
    [
        'id' => 228,
        'station_id' => 74,
        'feature_id' => 10,
    ],
    [
        'id' => 229,
        'station_id' => 74,
        'feature_id' => 17,
    ],
    [
        'id' => 230,
        'station_id' => 74,
        'feature_id' => 1,
    ],
    [
        'id' => 231,
        'station_id' => 75,
        'feature_id' => 3,
    ],
    [
        'id' => 232,
        'station_id' => 75,
        'feature_id' => 2,
    ],
    [
        'id' => 233,
        'station_id' => 75,
        'feature_id' => 1,
    ],
    [
        'id' => 234,
        'station_id' => 77,
        'feature_id' => 14,
    ],
    [
        'id' => 235,
        'station_id' => 77,
        'feature_id' => 15,
    ],
    [
        'id' => 236,
        'station_id' => 77,
        'feature_id' => 1,
    ],
    [
        'id' => 237,
        'station_id' => 79,
        'feature_id' => 10,
    ],
    [
        'id' => 238,
        'station_id' => 79,
        'feature_id' => 1,
    ],
    [
        'id' => 239,
        'station_id' => 80,
        'feature_id' => 11,
    ],
    [
        'id' => 240,
        'station_id' => 80,
        'feature_id' => 3,
    ],
    [
        'id' => 241,
        'station_id' => 80,
        'feature_id' => 10,
    ],
    [
        'id' => 242,
        'station_id' => 80,
        'feature_id' => 7,
    ],
    [
        'id' => 243,
        'station_id' => 80,
        'feature_id' => 1,
    ],
    [
        'id' => 244,
        'station_id' => 81,
        'feature_id' => 11,
    ],
    [
        'id' => 245,
        'station_id' => 81,
        'feature_id' => 14,
    ],
    [
        'id' => 246,
        'station_id' => 81,
        'feature_id' => 9,
    ],
    [
        'id' => 247,
        'station_id' => 81,
        'feature_id' => 6,
    ],
    [
        'id' => 248,
        'station_id' => 81,
        'feature_id' => 12,
    ],
    [
        'id' => 249,
        'station_id' => 81,
        'feature_id' => 5,
    ],
    [
        'id' => 250,
        'station_id' => 81,
        'feature_id' => 4,
    ],
    [
        'id' => 251,
        'station_id' => 81,
        'feature_id' => 13,
    ],
    [
        'id' => 252,
        'station_id' => 81,
        'feature_id' => 1,
    ],
    [
        'id' => 253,
        'station_id' => 81,
        'feature_id' => 18,
    ],
    [
        'id' => 254,
        'station_id' => 82,
        'feature_id' => 11,
    ],
    [
        'id' => 255,
        'station_id' => 82,
        'feature_id' => 14,
    ],
    [
        'id' => 256,
        'station_id' => 82,
        'feature_id' => 9,
    ],
    [
        'id' => 257,
        'station_id' => 82,
        'feature_id' => 6,
    ],
    [
        'id' => 258,
        'station_id' => 82,
        'feature_id' => 5,
    ],
    [
        'id' => 259,
        'station_id' => 82,
        'feature_id' => 7,
    ],
    [
        'id' => 260,
        'station_id' => 82,
        'feature_id' => 4,
    ],
    [
        'id' => 261,
        'station_id' => 82,
        'feature_id' => 8,
    ],
    [
        'id' => 262,
        'station_id' => 82,
        'feature_id' => 1,
    ],
    [
        'id' => 263,
        'station_id' => 82,
        'feature_id' => 18,
    ],
    [
        'id' => 264,
        'station_id' => 83,
        'feature_id' => 1,
    ],
    [
        'id' => 265,
        'station_id' => 84,
        'feature_id' => 7,
    ],
    [
        'id' => 266,
        'station_id' => 84,
        'feature_id' => 1,
    ],
    [
        'id' => 267,
        'station_id' => 85,
        'feature_id' => 11,
    ],
    [
        'id' => 268,
        'station_id' => 85,
        'feature_id' => 14,
    ],
    [
        'id' => 269,
        'station_id' => 85,
        'feature_id' => 9,
    ],
    [
        'id' => 270,
        'station_id' => 85,
        'feature_id' => 12,
    ],
    [
        'id' => 271,
        'station_id' => 85,
        'feature_id' => 10,
    ],
    [
        'id' => 272,
        'station_id' => 85,
        'feature_id' => 5,
    ],
    [
        'id' => 273,
        'station_id' => 85,
        'feature_id' => 4,
    ],
    [
        'id' => 274,
        'station_id' => 85,
        'feature_id' => 13,
    ],
    [
        'id' => 275,
        'station_id' => 85,
        'feature_id' => 1,
    ],
    [
        'id' => 276,
        'station_id' => 85,
        'feature_id' => 18,
    ],
    [
        'id' => 277,
        'station_id' => 86,
        'feature_id' => 1,
    ],
    [
        'id' => 278,
        'station_id' => 87,
        'feature_id' => 11,
    ],
    [
        'id' => 279,
        'station_id' => 87,
        'feature_id' => 14,
    ],
    [
        'id' => 280,
        'station_id' => 87,
        'feature_id' => 3,
    ],
    [
        'id' => 281,
        'station_id' => 87,
        'feature_id' => 13,
    ],
    [
        'id' => 282,
        'station_id' => 87,
        'feature_id' => 1,
    ],
    [
        'id' => 283,
        'station_id' => 88,
        'feature_id' => 3,
    ],
    [
        'id' => 284,
        'station_id' => 88,
        'feature_id' => 10,
    ],
    [
        'id' => 285,
        'station_id' => 88,
        'feature_id' => 7,
    ],
    [
        'id' => 286,
        'station_id' => 88,
        'feature_id' => 13,
    ],
    [
        'id' => 287,
        'station_id' => 88,
        'feature_id' => 1,
    ],
    [
        'id' => 288,
        'station_id' => 89,
        'feature_id' => 11,
    ],
    [
        'id' => 289,
        'station_id' => 89,
        'feature_id' => 3,
    ],
    [
        'id' => 290,
        'station_id' => 89,
        'feature_id' => 1,
    ],
    [
        'id' => 291,
        'station_id' => 90,
        'feature_id' => 3,
    ],
    [
        'id' => 292,
        'station_id' => 90,
        'feature_id' => 7,
    ],
    [
        'id' => 293,
        'station_id' => 91,
        'feature_id' => 11,
    ],
    [
        'id' => 294,
        'station_id' => 91,
        'feature_id' => 14,
    ],
    [
        'id' => 295,
        'station_id' => 91,
        'feature_id' => 3,
    ],
    [
        'id' => 296,
        'station_id' => 91,
        'feature_id' => 6,
    ],
    [
        'id' => 297,
        'station_id' => 91,
        'feature_id' => 4,
    ],
    [
        'id' => 298,
        'station_id' => 91,
        'feature_id' => 12,
    ],
    [
        'id' => 299,
        'station_id' => 91,
        'feature_id' => 5,
    ],
    [
        'id' => 300,
        'station_id' => 91,
        'feature_id' => 8,
    ],
    [
        'id' => 301,
        'station_id' => 91,
        'feature_id' => 13,
    ],
    [
        'id' => 302,
        'station_id' => 91,
        'feature_id' => 2,
    ],
    [
        'id' => 303,
        'station_id' => 91,
        'feature_id' => 1,
    ],
    [
        'id' => 304,
        'station_id' => 91,
        'feature_id' => 18,
    ],
    [
        'id' => 305,
        'station_id' => 92,
        'feature_id' => 10,
    ],
    [
        'id' => 306,
        'station_id' => 92,
        'feature_id' => 1,
    ],
    [
        'id' => 307,
        'station_id' => 93,
        'feature_id' => 11,
    ],
    [
        'id' => 308,
        'station_id' => 93,
        'feature_id' => 1,
    ],
    [
        'id' => 309,
        'station_id' => 94,
        'feature_id' => 11,
    ],
    [
        'id' => 310,
        'station_id' => 94,
        'feature_id' => 7,
    ],
    [
        'id' => 311,
        'station_id' => 95,
        'feature_id' => 13,
    ],
    [
        'id' => 312,
        'station_id' => 95,
        'feature_id' => 1,
    ],
    [
        'id' => 313,
        'station_id' => 96,
        'feature_id' => 3,
    ],
    [
        'id' => 314,
        'station_id' => 96,
        'feature_id' => 10,
    ],
    [
        'id' => 315,
        'station_id' => 96,
        'feature_id' => 1,
    ],
    [
        'id' => 316,
        'station_id' => 98,
        'feature_id' => 3,
    ],
    [
        'id' => 317,
        'station_id' => 98,
        'feature_id' => 1,
    ],
    [
        'id' => 318,
        'station_id' => 99,
        'feature_id' => 11,
    ],
    [
        'id' => 319,
        'station_id' => 99,
        'feature_id' => 7,
    ],
    [
        'id' => 320,
        'station_id' => 99,
        'feature_id' => 1,
    ],
    [
        'id' => 321,
        'station_id' => 100,
        'feature_id' => 1,
    ],
    [
        'id' => 322,
        'station_id' => 101,
        'feature_id' => 9,
    ],
    [
        'id' => 323,
        'station_id' => 101,
        'feature_id' => 3,
    ],
    [
        'id' => 324,
        'station_id' => 101,
        'feature_id' => 5,
    ],
    [
        'id' => 325,
        'station_id' => 101,
        'feature_id' => 4,
    ],
    [
        'id' => 326,
        'station_id' => 101,
        'feature_id' => 1,
    ],
    [
        'id' => 327,
        'station_id' => 102,
        'feature_id' => 1,
    ],
    [
        'id' => 328,
        'station_id' => 103,
        'feature_id' => 14,
    ],
    [
        'id' => 329,
        'station_id' => 103,
        'feature_id' => 10,
    ],
    [
        'id' => 330,
        'station_id' => 103,
        'feature_id' => 13,
    ],
    [
        'id' => 331,
        'station_id' => 104,
        'feature_id' => 14,
    ],
    [
        'id' => 332,
        'station_id' => 104,
        'feature_id' => 13,
    ],
    [
        'id' => 333,
        'station_id' => 104,
        'feature_id' => 1,
    ],
    [
        'id' => 334,
        'station_id' => 105,
        'feature_id' => 11,
    ],
    [
        'id' => 335,
        'station_id' => 105,
        'feature_id' => 14,
    ],
    [
        'id' => 336,
        'station_id' => 105,
        'feature_id' => 9,
    ],
    [
        'id' => 337,
        'station_id' => 105,
        'feature_id' => 12,
    ],
    [
        'id' => 338,
        'station_id' => 105,
        'feature_id' => 5,
    ],
    [
        'id' => 339,
        'station_id' => 105,
        'feature_id' => 4,
    ],
    [
        'id' => 340,
        'station_id' => 105,
        'feature_id' => 13,
    ],
    [
        'id' => 341,
        'station_id' => 106,
        'feature_id' => 14,
    ],
    [
        'id' => 342,
        'station_id' => 106,
        'feature_id' => 1,
    ],
    [
        'id' => 343,
        'station_id' => 107,
        'feature_id' => 14,
    ],
    [
        'id' => 344,
        'station_id' => 107,
        'feature_id' => 13,
    ],
    [
        'id' => 345,
        'station_id' => 107,
        'feature_id' => 1,
    ],
    [
        'id' => 346,
        'station_id' => 108,
        'feature_id' => 11,
    ],
    [
        'id' => 347,
        'station_id' => 108,
        'feature_id' => 14,
    ],
    [
        'id' => 348,
        'station_id' => 108,
        'feature_id' => 6,
    ],
    [
        'id' => 349,
        'station_id' => 108,
        'feature_id' => 12,
    ],
    [
        'id' => 350,
        'station_id' => 108,
        'feature_id' => 10,
    ],
    [
        'id' => 351,
        'station_id' => 108,
        'feature_id' => 5,
    ],
    [
        'id' => 352,
        'station_id' => 108,
        'feature_id' => 4,
    ],
    [
        'id' => 353,
        'station_id' => 108,
        'feature_id' => 8,
    ],
    [
        'id' => 354,
        'station_id' => 108,
        'feature_id' => 13,
    ],
    [
        'id' => 355,
        'station_id' => 108,
        'feature_id' => 2,
    ],
    [
        'id' => 356,
        'station_id' => 108,
        'feature_id' => 1,
    ],
    [
        'id' => 357,
        'station_id' => 108,
        'feature_id' => 18,
    ],
    [
        'id' => 358,
        'station_id' => 109,
        'feature_id' => 11,
    ],
    [
        'id' => 359,
        'station_id' => 109,
        'feature_id' => 14,
    ],
    [
        'id' => 360,
        'station_id' => 109,
        'feature_id' => 15,
    ],
    [
        'id' => 361,
        'station_id' => 110,
        'feature_id' => 11,
    ],
    [
        'id' => 362,
        'station_id' => 110,
        'feature_id' => 14,
    ],
    [
        'id' => 363,
        'station_id' => 110,
        'feature_id' => 6,
    ],
    [
        'id' => 364,
        'station_id' => 110,
        'feature_id' => 12,
    ],
    [
        'id' => 365,
        'station_id' => 110,
        'feature_id' => 10,
    ],
    [
        'id' => 366,
        'station_id' => 110,
        'feature_id' => 5,
    ],
    [
        'id' => 367,
        'station_id' => 110,
        'feature_id' => 15,
    ],
    [
        'id' => 368,
        'station_id' => 110,
        'feature_id' => 4,
    ],
    [
        'id' => 369,
        'station_id' => 110,
        'feature_id' => 8,
    ],
    [
        'id' => 370,
        'station_id' => 110,
        'feature_id' => 13,
    ],
    [
        'id' => 371,
        'station_id' => 110,
        'feature_id' => 1,
    ],
    [
        'id' => 372,
        'station_id' => 110,
        'feature_id' => 18,
    ],
    [
        'id' => 373,
        'station_id' => 111,
        'feature_id' => 14,
    ],
    [
        'id' => 374,
        'station_id' => 111,
        'feature_id' => 10,
    ],
    [
        'id' => 375,
        'station_id' => 111,
        'feature_id' => 13,
    ],
    [
        'id' => 376,
        'station_id' => 111,
        'feature_id' => 1,
    ],
    [
        'id' => 377,
        'station_id' => 112,
        'feature_id' => 11,
    ],
    [
        'id' => 378,
        'station_id' => 112,
        'feature_id' => 9,
    ],
    [
        'id' => 379,
        'station_id' => 112,
        'feature_id' => 6,
    ],
    [
        'id' => 380,
        'station_id' => 112,
        'feature_id' => 12,
    ],
    [
        'id' => 381,
        'station_id' => 112,
        'feature_id' => 10,
    ],
    [
        'id' => 382,
        'station_id' => 112,
        'feature_id' => 5,
    ],
    [
        'id' => 383,
        'station_id' => 112,
        'feature_id' => 4,
    ],
    [
        'id' => 384,
        'station_id' => 112,
        'feature_id' => 8,
    ],
    [
        'id' => 385,
        'station_id' => 112,
        'feature_id' => 13,
    ],
    [
        'id' => 386,
        'station_id' => 112,
        'feature_id' => 1,
    ],
    [
        'id' => 387,
        'station_id' => 112,
        'feature_id' => 18,
    ],
    [
        'id' => 388,
        'station_id' => 113,
        'feature_id' => 14,
    ],
    [
        'id' => 389,
        'station_id' => 113,
        'feature_id' => 9,
    ],
    [
        'id' => 390,
        'station_id' => 113,
        'feature_id' => 5,
    ],
    [
        'id' => 391,
        'station_id' => 113,
        'feature_id' => 15,
    ],
    [
        'id' => 392,
        'station_id' => 113,
        'feature_id' => 13,
    ],
    [
        'id' => 393,
        'station_id' => 113,
        'feature_id' => 1,
    ],
    [
        'id' => 394,
        'station_id' => 114,
        'feature_id' => 11,
    ],
    [
        'id' => 395,
        'station_id' => 114,
        'feature_id' => 14,
    ],
    [
        'id' => 396,
        'station_id' => 114,
        'feature_id' => 9,
    ],
    [
        'id' => 397,
        'station_id' => 114,
        'feature_id' => 6,
    ],
    [
        'id' => 398,
        'station_id' => 114,
        'feature_id' => 12,
    ],
    [
        'id' => 399,
        'station_id' => 114,
        'feature_id' => 5,
    ],
    [
        'id' => 400,
        'station_id' => 114,
        'feature_id' => 4,
    ],
    [
        'id' => 401,
        'station_id' => 114,
        'feature_id' => 13,
    ],
    [
        'id' => 402,
        'station_id' => 114,
        'feature_id' => 1,
    ],
    [
        'id' => 403,
        'station_id' => 114,
        'feature_id' => 18,
    ],
    [
        'id' => 404,
        'station_id' => 115,
        'feature_id' => 5,
    ],
    [
        'id' => 405,
        'station_id' => 115,
        'feature_id' => 15,
    ],
    [
        'id' => 406,
        'station_id' => 115,
        'feature_id' => 1,
    ],
    [
        'id' => 407,
        'station_id' => 116,
        'feature_id' => 11,
    ],
    [
        'id' => 408,
        'station_id' => 116,
        'feature_id' => 6,
    ],
    [
        'id' => 409,
        'station_id' => 116,
        'feature_id' => 12,
    ],
    [
        'id' => 410,
        'station_id' => 116,
        'feature_id' => 5,
    ],
    [
        'id' => 411,
        'station_id' => 116,
        'feature_id' => 4,
    ],
    [
        'id' => 412,
        'station_id' => 116,
        'feature_id' => 8,
    ],
    [
        'id' => 413,
        'station_id' => 116,
        'feature_id' => 13,
    ],
    [
        'id' => 414,
        'station_id' => 116,
        'feature_id' => 1,
    ],
    [
        'id' => 415,
        'station_id' => 117,
        'feature_id' => 14,
    ],
    [
        'id' => 416,
        'station_id' => 117,
        'feature_id' => 5,
    ],
    [
        'id' => 417,
        'station_id' => 117,
        'feature_id' => 13,
    ],
    [
        'id' => 418,
        'station_id' => 118,
        'feature_id' => 14,
    ],
    [
        'id' => 419,
        'station_id' => 118,
        'feature_id' => 1,
    ],
    [
        'id' => 420,
        'station_id' => 119,
        'feature_id' => 14,
    ],
    [
        'id' => 421,
        'station_id' => 119,
        'feature_id' => 17,
    ],
    [
        'id' => 422,
        'station_id' => 120,
        'feature_id' => 14,
    ],
    [
        'id' => 423,
        'station_id' => 120,
        'feature_id' => 1,
    ],
    [
        'id' => 424,
        'station_id' => 121,
        'feature_id' => 14,
    ],
    [
        'id' => 425,
        'station_id' => 121,
        'feature_id' => 6,
    ],
    [
        'id' => 426,
        'station_id' => 121,
        'feature_id' => 12,
    ],
    [
        'id' => 427,
        'station_id' => 121,
        'feature_id' => 5,
    ],
    [
        'id' => 428,
        'station_id' => 121,
        'feature_id' => 4,
    ],
    [
        'id' => 429,
        'station_id' => 121,
        'feature_id' => 13,
    ],
    [
        'id' => 430,
        'station_id' => 121,
        'feature_id' => 1,
    ],
    [
        'id' => 431,
        'station_id' => 121,
        'feature_id' => 18,
    ],
    [
        'id' => 432,
        'station_id' => 122,
        'feature_id' => 11,
    ],
    [
        'id' => 433,
        'station_id' => 122,
        'feature_id' => 17,
    ],
    [
        'id' => 434,
        'station_id' => 122,
        'feature_id' => 1,
    ],
    [
        'id' => 435,
        'station_id' => 123,
        'feature_id' => 11,
    ],
    [
        'id' => 436,
        'station_id' => 123,
        'feature_id' => 14,
    ],
    [
        'id' => 437,
        'station_id' => 123,
        'feature_id' => 9,
    ],
    [
        'id' => 438,
        'station_id' => 123,
        'feature_id' => 6,
    ],
    [
        'id' => 439,
        'station_id' => 123,
        'feature_id' => 12,
    ],
    [
        'id' => 440,
        'station_id' => 123,
        'feature_id' => 5,
    ],
    [
        'id' => 441,
        'station_id' => 123,
        'feature_id' => 15,
    ],
    [
        'id' => 442,
        'station_id' => 123,
        'feature_id' => 8,
    ],
    [
        'id' => 443,
        'station_id' => 123,
        'feature_id' => 13,
    ],
    [
        'id' => 444,
        'station_id' => 123,
        'feature_id' => 1,
    ],
    [
        'id' => 445,
        'station_id' => 123,
        'feature_id' => 18,
    ],
    [
        'id' => 446,
        'station_id' => 124,
        'feature_id' => 14,
    ],
    [
        'id' => 447,
        'station_id' => 124,
        'feature_id' => 1,
    ],
    [
        'id' => 448,
        'station_id' => 125,
        'feature_id' => 11,
    ],
    [
        'id' => 449,
        'station_id' => 125,
        'feature_id' => 14,
    ],
    [
        'id' => 450,
        'station_id' => 125,
        'feature_id' => 6,
    ],
    [
        'id' => 451,
        'station_id' => 125,
        'feature_id' => 10,
    ],
    [
        'id' => 452,
        'station_id' => 125,
        'feature_id' => 5,
    ],
    [
        'id' => 453,
        'station_id' => 125,
        'feature_id' => 4,
    ],
    [
        'id' => 454,
        'station_id' => 125,
        'feature_id' => 8,
    ],
    [
        'id' => 455,
        'station_id' => 125,
        'feature_id' => 1,
    ],
    [
        'id' => 456,
        'station_id' => 125,
        'feature_id' => 18,
    ],
    [
        'id' => 457,
        'station_id' => 126,
        'feature_id' => 1,
    ],
    [
        'id' => 458,
        'station_id' => 127,
        'feature_id' => 11,
    ],
    [
        'id' => 459,
        'station_id' => 127,
        'feature_id' => 9,
    ],
    [
        'id' => 460,
        'station_id' => 127,
        'feature_id' => 6,
    ],
    [
        'id' => 461,
        'station_id' => 127,
        'feature_id' => 10,
    ],
    [
        'id' => 462,
        'station_id' => 127,
        'feature_id' => 5,
    ],
    [
        'id' => 463,
        'station_id' => 127,
        'feature_id' => 4,
    ],
    [
        'id' => 464,
        'station_id' => 127,
        'feature_id' => 1,
    ],
    [
        'id' => 465,
        'station_id' => 127,
        'feature_id' => 18,
    ],
    [
        'id' => 466,
        'station_id' => 128,
        'feature_id' => 11,
    ],
    [
        'id' => 467,
        'station_id' => 128,
        'feature_id' => 9,
    ],
    [
        'id' => 468,
        'station_id' => 128,
        'feature_id' => 6,
    ],
    [
        'id' => 469,
        'station_id' => 128,
        'feature_id' => 12,
    ],
    [
        'id' => 470,
        'station_id' => 128,
        'feature_id' => 5,
    ],
    [
        'id' => 471,
        'station_id' => 128,
        'feature_id' => 15,
    ],
    [
        'id' => 472,
        'station_id' => 128,
        'feature_id' => 4,
    ],
    [
        'id' => 473,
        'station_id' => 128,
        'feature_id' => 8,
    ],
    [
        'id' => 474,
        'station_id' => 128,
        'feature_id' => 13,
    ],
    [
        'id' => 475,
        'station_id' => 128,
        'feature_id' => 1,
    ],
    [
        'id' => 476,
        'station_id' => 128,
        'feature_id' => 18,
    ],
    [
        'id' => 477,
        'station_id' => 129,
        'feature_id' => 11,
    ],
    [
        'id' => 478,
        'station_id' => 129,
        'feature_id' => 9,
    ],
    [
        'id' => 479,
        'station_id' => 129,
        'feature_id' => 6,
    ],
    [
        'id' => 480,
        'station_id' => 129,
        'feature_id' => 12,
    ],
    [
        'id' => 481,
        'station_id' => 129,
        'feature_id' => 5,
    ],
    [
        'id' => 482,
        'station_id' => 129,
        'feature_id' => 15,
    ],
    [
        'id' => 483,
        'station_id' => 129,
        'feature_id' => 4,
    ],
    [
        'id' => 484,
        'station_id' => 129,
        'feature_id' => 13,
    ],
    [
        'id' => 485,
        'station_id' => 129,
        'feature_id' => 2,
    ],
    [
        'id' => 486,
        'station_id' => 129,
        'feature_id' => 1,
    ],
    [
        'id' => 487,
        'station_id' => 129,
        'feature_id' => 18,
    ],
    [
        'id' => 488,
        'station_id' => 130,
        'feature_id' => 14,
    ],
    [
        'id' => 489,
        'station_id' => 130,
        'feature_id' => 1,
    ],
    [
        'id' => 490,
        'station_id' => 131,
        'feature_id' => 14,
    ],
    [
        'id' => 491,
        'station_id' => 131,
        'feature_id' => 10,
    ],
    [
        'id' => 492,
        'station_id' => 131,
        'feature_id' => 17,
    ],
    [
        'id' => 493,
        'station_id' => 132,
        'feature_id' => 14,
    ],
    [
        'id' => 494,
        'station_id' => 132,
        'feature_id' => 15,
    ],
    [
        'id' => 495,
        'station_id' => 134,
        'feature_id' => 3,
    ],
    [
        'id' => 496,
        'station_id' => 134,
        'feature_id' => 10,
    ],
    [
        'id' => 497,
        'station_id' => 135,
        'feature_id' => 11,
    ],
    [
        'id' => 498,
        'station_id' => 135,
        'feature_id' => 14,
    ],
    [
        'id' => 499,
        'station_id' => 135,
        'feature_id' => 3,
    ],
    [
        'id' => 500,
        'station_id' => 135,
        'feature_id' => 10,
    ],
    [
        'id' => 501,
        'station_id' => 135,
        'feature_id' => 7,
    ],
    [
        'id' => 502,
        'station_id' => 135,
        'feature_id' => 13,
    ],
    [
        'id' => 503,
        'station_id' => 135,
        'feature_id' => 1,
    ],
    [
        'id' => 504,
        'station_id' => 136,
        'feature_id' => 11,
    ],
    [
        'id' => 505,
        'station_id' => 136,
        'feature_id' => 14,
    ],
    [
        'id' => 506,
        'station_id' => 136,
        'feature_id' => 9,
    ],
    [
        'id' => 507,
        'station_id' => 136,
        'feature_id' => 6,
    ],
    [
        'id' => 508,
        'station_id' => 136,
        'feature_id' => 12,
    ],
    [
        'id' => 509,
        'station_id' => 136,
        'feature_id' => 5,
    ],
    [
        'id' => 510,
        'station_id' => 136,
        'feature_id' => 4,
    ],
    [
        'id' => 511,
        'station_id' => 136,
        'feature_id' => 13,
    ],
    [
        'id' => 512,
        'station_id' => 136,
        'feature_id' => 1,
    ],
    [
        'id' => 513,
        'station_id' => 137,
        'feature_id' => 11,
    ],
    [
        'id' => 514,
        'station_id' => 137,
        'feature_id' => 14,
    ],
    [
        'id' => 515,
        'station_id' => 137,
        'feature_id' => 9,
    ],
    [
        'id' => 516,
        'station_id' => 137,
        'feature_id' => 3,
    ],
    [
        'id' => 517,
        'station_id' => 137,
        'feature_id' => 6,
    ],
    [
        'id' => 518,
        'station_id' => 137,
        'feature_id' => 12,
    ],
    [
        'id' => 519,
        'station_id' => 137,
        'feature_id' => 5,
    ],
    [
        'id' => 520,
        'station_id' => 137,
        'feature_id' => 7,
    ],
    [
        'id' => 521,
        'station_id' => 137,
        'feature_id' => 4,
    ],
    [
        'id' => 522,
        'station_id' => 137,
        'feature_id' => 8,
    ],
    [
        'id' => 523,
        'station_id' => 137,
        'feature_id' => 13,
    ],
    [
        'id' => 524,
        'station_id' => 137,
        'feature_id' => 18,
    ],
    [
        'id' => 525,
        'station_id' => 139,
        'feature_id' => 6,
    ],
    [
        'id' => 526,
        'station_id' => 139,
        'feature_id' => 12,
    ],
    [
        'id' => 527,
        'station_id' => 139,
        'feature_id' => 5,
    ],
    [
        'id' => 528,
        'station_id' => 139,
        'feature_id' => 4,
    ],
    [
        'id' => 529,
        'station_id' => 139,
        'feature_id' => 18,
    ],
    [
        'id' => 530,
        'station_id' => 140,
        'feature_id' => 11,
    ],
    [
        'id' => 531,
        'station_id' => 140,
        'feature_id' => 14,
    ],
    [
        'id' => 532,
        'station_id' => 140,
        'feature_id' => 6,
    ],
    [
        'id' => 533,
        'station_id' => 140,
        'feature_id' => 12,
    ],
    [
        'id' => 534,
        'station_id' => 140,
        'feature_id' => 5,
    ],
    [
        'id' => 535,
        'station_id' => 140,
        'feature_id' => 4,
    ],
    [
        'id' => 536,
        'station_id' => 140,
        'feature_id' => 8,
    ],
    [
        'id' => 537,
        'station_id' => 140,
        'feature_id' => 13,
    ],
    [
        'id' => 538,
        'station_id' => 140,
        'feature_id' => 1,
    ],
    [
        'id' => 539,
        'station_id' => 140,
        'feature_id' => 18,
    ],
    [
        'id' => 540,
        'station_id' => 141,
        'feature_id' => 11,
    ],
    [
        'id' => 541,
        'station_id' => 141,
        'feature_id' => 14,
    ],
    [
        'id' => 542,
        'station_id' => 141,
        'feature_id' => 6,
    ],
    [
        'id' => 543,
        'station_id' => 141,
        'feature_id' => 12,
    ],
    [
        'id' => 544,
        'station_id' => 141,
        'feature_id' => 10,
    ],
    [
        'id' => 545,
        'station_id' => 141,
        'feature_id' => 5,
    ],
    [
        'id' => 546,
        'station_id' => 141,
        'feature_id' => 7,
    ],
    [
        'id' => 547,
        'station_id' => 141,
        'feature_id' => 4,
    ],
    [
        'id' => 548,
        'station_id' => 141,
        'feature_id' => 13,
    ],
    [
        'id' => 549,
        'station_id' => 141,
        'feature_id' => 1,
    ],
    [
        'id' => 550,
        'station_id' => 141,
        'feature_id' => 18,
    ],
    [
        'id' => 551,
        'station_id' => 142,
        'feature_id' => 11,
    ],
    [
        'id' => 552,
        'station_id' => 142,
        'feature_id' => 14,
    ],
    [
        'id' => 553,
        'station_id' => 142,
        'feature_id' => 10,
    ],
    [
        'id' => 554,
        'station_id' => 142,
        'feature_id' => 1,
    ],
    [
        'id' => 555,
        'station_id' => 143,
        'feature_id' => 11,
    ],
    [
        'id' => 556,
        'station_id' => 143,
        'feature_id' => 14,
    ],
    [
        'id' => 557,
        'station_id' => 144,
        'feature_id' => 13,
    ],
    [
        'id' => 558,
        'station_id' => 144,
        'feature_id' => 1,
    ],
    [
        'id' => 559,
        'station_id' => 146,
        'feature_id' => 15,
    ],
    [
        'id' => 560,
        'station_id' => 146,
        'feature_id' => 1,
    ],
    [
        'id' => 561,
        'station_id' => 147,
        'feature_id' => 11,
    ],
    [
        'id' => 562,
        'station_id' => 147,
        'feature_id' => 14,
    ],
    [
        'id' => 563,
        'station_id' => 147,
        'feature_id' => 9,
    ],
    [
        'id' => 564,
        'station_id' => 147,
        'feature_id' => 6,
    ],
    [
        'id' => 565,
        'station_id' => 147,
        'feature_id' => 17,
    ],
    [
        'id' => 566,
        'station_id' => 147,
        'feature_id' => 4,
    ],
    [
        'id' => 567,
        'station_id' => 147,
        'feature_id' => 12,
    ],
    [
        'id' => 568,
        'station_id' => 147,
        'feature_id' => 10,
    ],
    [
        'id' => 569,
        'station_id' => 147,
        'feature_id' => 5,
    ],
    [
        'id' => 570,
        'station_id' => 147,
        'feature_id' => 8,
    ],
    [
        'id' => 571,
        'station_id' => 147,
        'feature_id' => 13,
    ],
    [
        'id' => 572,
        'station_id' => 147,
        'feature_id' => 2,
    ],
    [
        'id' => 573,
        'station_id' => 147,
        'feature_id' => 18,
    ],
    [
        'id' => 574,
        'station_id' => 148,
        'feature_id' => 11,
    ],
    [
        'id' => 575,
        'station_id' => 148,
        'feature_id' => 10,
    ],
    [
        'id' => 576,
        'station_id' => 148,
        'feature_id' => 7,
    ],
    [
        'id' => 577,
        'station_id' => 148,
        'feature_id' => 13,
    ],
    [
        'id' => 578,
        'station_id' => 148,
        'feature_id' => 1,
    ],
    [
        'id' => 579,
        'station_id' => 149,
        'feature_id' => 11,
    ],
    [
        'id' => 580,
        'station_id' => 149,
        'feature_id' => 14,
    ],
    [
        'id' => 581,
        'station_id' => 149,
        'feature_id' => 10,
    ],
    [
        'id' => 582,
        'station_id' => 149,
        'feature_id' => 17,
    ],
    [
        'id' => 583,
        'station_id' => 149,
        'feature_id' => 13,
    ],
    [
        'id' => 584,
        'station_id' => 150,
        'feature_id' => 11,
    ],
    [
        'id' => 585,
        'station_id' => 150,
        'feature_id' => 14,
    ],
    [
        'id' => 586,
        'station_id' => 150,
        'feature_id' => 10,
    ],
    [
        'id' => 587,
        'station_id' => 150,
        'feature_id' => 17,
    ],
    [
        'id' => 588,
        'station_id' => 150,
        'feature_id' => 15,
    ],
    [
        'id' => 589,
        'station_id' => 150,
        'feature_id' => 13,
    ],
    [
        'id' => 590,
        'station_id' => 150,
        'feature_id' => 1,
    ],
    [
        'id' => 591,
        'station_id' => 151,
        'feature_id' => 11,
    ],
    [
        'id' => 592,
        'station_id' => 151,
        'feature_id' => 1,
    ],
    [
        'id' => 593,
        'station_id' => 152,
        'feature_id' => 11,
    ],
    [
        'id' => 594,
        'station_id' => 152,
        'feature_id' => 7,
    ],
    [
        'id' => 595,
        'station_id' => 152,
        'feature_id' => 1,
    ],
    [
        'id' => 596,
        'station_id' => 153,
        'feature_id' => 11,
    ],
    [
        'id' => 597,
        'station_id' => 153,
        'feature_id' => 14,
    ],
    [
        'id' => 598,
        'station_id' => 153,
        'feature_id' => 9,
    ],
    [
        'id' => 599,
        'station_id' => 153,
        'feature_id' => 12,
    ],
    [
        'id' => 600,
        'station_id' => 153,
        'feature_id' => 10,
    ],
    [
        'id' => 601,
        'station_id' => 153,
        'feature_id' => 5,
    ],
    [
        'id' => 602,
        'station_id' => 153,
        'feature_id' => 4,
    ],
    [
        'id' => 603,
        'station_id' => 153,
        'feature_id' => 8,
    ],
    [
        'id' => 604,
        'station_id' => 153,
        'feature_id' => 13,
    ],
    [
        'id' => 605,
        'station_id' => 154,
        'feature_id' => 14,
    ],
    [
        'id' => 606,
        'station_id' => 154,
        'feature_id' => 6,
    ],
    [
        'id' => 607,
        'station_id' => 154,
        'feature_id' => 12,
    ],
    [
        'id' => 608,
        'station_id' => 154,
        'feature_id' => 5,
    ],
    [
        'id' => 609,
        'station_id' => 154,
        'feature_id' => 4,
    ],
    [
        'id' => 610,
        'station_id' => 154,
        'feature_id' => 13,
    ],
    [
        'id' => 611,
        'station_id' => 154,
        'feature_id' => 1,
    ],
    [
        'id' => 612,
        'station_id' => 155,
        'feature_id' => 14,
    ],
    [
        'id' => 613,
        'station_id' => 155,
        'feature_id' => 13,
    ],
    [
        'id' => 614,
        'station_id' => 155,
        'feature_id' => 1,
    ],
    [
        'id' => 615,
        'station_id' => 156,
        'feature_id' => 11,
    ],
    [
        'id' => 616,
        'station_id' => 156,
        'feature_id' => 14,
    ],
    [
        'id' => 617,
        'station_id' => 156,
        'feature_id' => 9,
    ],
    [
        'id' => 618,
        'station_id' => 156,
        'feature_id' => 6,
    ],
    [
        'id' => 619,
        'station_id' => 156,
        'feature_id' => 5,
    ],
    [
        'id' => 620,
        'station_id' => 156,
        'feature_id' => 4,
    ],
    [
        'id' => 621,
        'station_id' => 156,
        'feature_id' => 8,
    ],
    [
        'id' => 622,
        'station_id' => 156,
        'feature_id' => 1,
    ],
    [
        'id' => 623,
        'station_id' => 156,
        'feature_id' => 18,
    ],
    [
        'id' => 624,
        'station_id' => 157,
        'feature_id' => 11,
    ],
    [
        'id' => 625,
        'station_id' => 157,
        'feature_id' => 14,
    ],
    [
        'id' => 626,
        'station_id' => 157,
        'feature_id' => 12,
    ],
    [
        'id' => 627,
        'station_id' => 157,
        'feature_id' => 10,
    ],
    [
        'id' => 628,
        'station_id' => 157,
        'feature_id' => 5,
    ],
    [
        'id' => 629,
        'station_id' => 157,
        'feature_id' => 4,
    ],
    [
        'id' => 630,
        'station_id' => 157,
        'feature_id' => 13,
    ],
    [
        'id' => 631,
        'station_id' => 157,
        'feature_id' => 1,
    ],
    [
        'id' => 632,
        'station_id' => 158,
        'feature_id' => 14,
    ],
    [
        'id' => 633,
        'station_id' => 158,
        'feature_id' => 13,
    ],
    [
        'id' => 634,
        'station_id' => 158,
        'feature_id' => 1,
    ],
    [
        'id' => 635,
        'station_id' => 159,
        'feature_id' => 11,
    ],
    [
        'id' => 636,
        'station_id' => 159,
        'feature_id' => 9,
    ],
    [
        'id' => 637,
        'station_id' => 159,
        'feature_id' => 6,
    ],
    [
        'id' => 638,
        'station_id' => 159,
        'feature_id' => 10,
    ],
    [
        'id' => 639,
        'station_id' => 159,
        'feature_id' => 5,
    ],
    [
        'id' => 640,
        'station_id' => 159,
        'feature_id' => 4,
    ],
    [
        'id' => 641,
        'station_id' => 159,
        'feature_id' => 8,
    ],
    [
        'id' => 642,
        'station_id' => 159,
        'feature_id' => 1,
    ],
    [
        'id' => 643,
        'station_id' => 159,
        'feature_id' => 18,
    ],
    [
        'id' => 644,
        'station_id' => 160,
        'feature_id' => 11,
    ],
    [
        'id' => 645,
        'station_id' => 160,
        'feature_id' => 9,
    ],
    [
        'id' => 646,
        'station_id' => 160,
        'feature_id' => 12,
    ],
    [
        'id' => 647,
        'station_id' => 160,
        'feature_id' => 5,
    ],
    [
        'id' => 648,
        'station_id' => 160,
        'feature_id' => 15,
    ],
    [
        'id' => 649,
        'station_id' => 160,
        'feature_id' => 4,
    ],
    [
        'id' => 650,
        'station_id' => 160,
        'feature_id' => 8,
    ],
    [
        'id' => 651,
        'station_id' => 160,
        'feature_id' => 13,
    ],
    [
        'id' => 652,
        'station_id' => 160,
        'feature_id' => 1,
    ],
    [
        'id' => 653,
        'station_id' => 160,
        'feature_id' => 18,
    ],
    [
        'id' => 654,
        'station_id' => 161,
        'feature_id' => 14,
    ],
    [
        'id' => 655,
        'station_id' => 161,
        'feature_id' => 9,
    ],
    [
        'id' => 656,
        'station_id' => 161,
        'feature_id' => 10,
    ],
    [
        'id' => 657,
        'station_id' => 161,
        'feature_id' => 5,
    ],
    [
        'id' => 658,
        'station_id' => 161,
        'feature_id' => 8,
    ],
    [
        'id' => 659,
        'station_id' => 161,
        'feature_id' => 13,
    ],
    [
        'id' => 660,
        'station_id' => 161,
        'feature_id' => 2,
    ],
    [
        'id' => 661,
        'station_id' => 161,
        'feature_id' => 1,
    ],
    [
        'id' => 662,
        'station_id' => 162,
        'feature_id' => 11,
    ],
    [
        'id' => 663,
        'station_id' => 162,
        'feature_id' => 9,
    ],
    [
        'id' => 664,
        'station_id' => 162,
        'feature_id' => 6,
    ],
    [
        'id' => 665,
        'station_id' => 162,
        'feature_id' => 10,
    ],
    [
        'id' => 666,
        'station_id' => 162,
        'feature_id' => 5,
    ],
    [
        'id' => 667,
        'station_id' => 162,
        'feature_id' => 17,
    ],
    [
        'id' => 668,
        'station_id' => 162,
        'feature_id' => 15,
    ],
    [
        'id' => 669,
        'station_id' => 162,
        'feature_id' => 2,
    ],
    [
        'id' => 670,
        'station_id' => 162,
        'feature_id' => 1,
    ],
    [
        'id' => 671,
        'station_id' => 162,
        'feature_id' => 18,
    ],
    [
        'id' => 672,
        'station_id' => 163,
        'feature_id' => 10,
    ],
    [
        'id' => 673,
        'station_id' => 163,
        'feature_id' => 13,
    ],
    [
        'id' => 674,
        'station_id' => 163,
        'feature_id' => 1,
    ],
    [
        'id' => 675,
        'station_id' => 164,
        'feature_id' => 11,
    ],
    [
        'id' => 676,
        'station_id' => 164,
        'feature_id' => 1,
    ],
    [
        'id' => 677,
        'station_id' => 165,
        'feature_id' => 11,
    ],
    [
        'id' => 678,
        'station_id' => 165,
        'feature_id' => 1,
    ],
    [
        'id' => 679,
        'station_id' => 166,
        'feature_id' => 11,
    ],
    [
        'id' => 680,
        'station_id' => 166,
        'feature_id' => 14,
    ],
    [
        'id' => 681,
        'station_id' => 166,
        'feature_id' => 3,
    ],
    [
        'id' => 682,
        'station_id' => 166,
        'feature_id' => 12,
    ],
    [
        'id' => 683,
        'station_id' => 166,
        'feature_id' => 5,
    ],
    [
        'id' => 684,
        'station_id' => 166,
        'feature_id' => 4,
    ],
    [
        'id' => 685,
        'station_id' => 166,
        'feature_id' => 13,
    ],
    [
        'id' => 686,
        'station_id' => 166,
        'feature_id' => 1,
    ],
    [
        'id' => 687,
        'station_id' => 167,
        'feature_id' => 11,
    ],
    [
        'id' => 688,
        'station_id' => 167,
        'feature_id' => 10,
    ],
    [
        'id' => 689,
        'station_id' => 167,
        'feature_id' => 13,
    ],
    [
        'id' => 690,
        'station_id' => 167,
        'feature_id' => 1,
    ],
    [
        'id' => 691,
        'station_id' => 168,
        'feature_id' => 10,
    ],
    [
        'id' => 692,
        'station_id' => 168,
        'feature_id' => 17,
    ],
    [
        'id' => 693,
        'station_id' => 169,
        'feature_id' => 17,
    ],
    [
        'id' => 694,
        'station_id' => 170,
        'feature_id' => 14,
    ],
    [
        'id' => 695,
        'station_id' => 170,
        'feature_id' => 17,
    ],
    [
        'id' => 696,
        'station_id' => 171,
        'feature_id' => 10,
    ],
    [
        'id' => 697,
        'station_id' => 171,
        'feature_id' => 17,
    ],
    [
        'id' => 698,
        'station_id' => 171,
        'feature_id' => 1,
    ],
    [
        'id' => 699,
        'station_id' => 172,
        'feature_id' => 14,
    ],
    [
        'id' => 700,
        'station_id' => 172,
        'feature_id' => 17,
    ],
    [
        'id' => 701,
        'station_id' => 172,
        'feature_id' => 13,
    ],
    [
        'id' => 702,
        'station_id' => 173,
        'feature_id' => 11,
    ],
    [
        'id' => 703,
        'station_id' => 173,
        'feature_id' => 14,
    ],
    [
        'id' => 704,
        'station_id' => 173,
        'feature_id' => 10,
    ],
    [
        'id' => 705,
        'station_id' => 173,
        'feature_id' => 17,
    ],
    [
        'id' => 706,
        'station_id' => 173,
        'feature_id' => 1,
    ],
    [
        'id' => 707,
        'station_id' => 174,
        'feature_id' => 10,
    ],
    [
        'id' => 708,
        'station_id' => 174,
        'feature_id' => 5,
    ],
    [
        'id' => 709,
        'station_id' => 174,
        'feature_id' => 13,
    ],
    [
        'id' => 710,
        'station_id' => 174,
        'feature_id' => 1,
    ],
    [
        'id' => 711,
        'station_id' => 175,
        'feature_id' => 3,
    ],
    [
        'id' => 712,
        'station_id' => 175,
        'feature_id' => 10,
    ],
    [
        'id' => 713,
        'station_id' => 175,
        'feature_id' => 13,
    ],
    [
        'id' => 714,
        'station_id' => 175,
        'feature_id' => 2,
    ],
    [
        'id' => 715,
        'station_id' => 176,
        'feature_id' => 14,
    ],
    [
        'id' => 716,
        'station_id' => 176,
        'feature_id' => 7,
    ],
    [
        'id' => 717,
        'station_id' => 176,
        'feature_id' => 1,
    ],
    [
        'id' => 718,
        'station_id' => 177,
        'feature_id' => 12,
    ],
    [
        'id' => 719,
        'station_id' => 177,
        'feature_id' => 10,
    ],
    [
        'id' => 720,
        'station_id' => 177,
        'feature_id' => 5,
    ],
    [
        'id' => 721,
        'station_id' => 177,
        'feature_id' => 13,
    ],
    [
        'id' => 722,
        'station_id' => 177,
        'feature_id' => 1,
    ],
    [
        'id' => 723,
        'station_id' => 178,
        'feature_id' => 14,
    ],
    [
        'id' => 724,
        'station_id' => 178,
        'feature_id' => 6,
    ],
    [
        'id' => 725,
        'station_id' => 178,
        'feature_id' => 5,
    ],
    [
        'id' => 726,
        'station_id' => 178,
        'feature_id' => 8,
    ],
    [
        'id' => 727,
        'station_id' => 178,
        'feature_id' => 13,
    ],
    [
        'id' => 728,
        'station_id' => 178,
        'feature_id' => 1,
    ],
    [
        'id' => 729,
        'station_id' => 179,
        'feature_id' => 11,
    ],
    [
        'id' => 730,
        'station_id' => 179,
        'feature_id' => 14,
    ],
    [
        'id' => 731,
        'station_id' => 179,
        'feature_id' => 6,
    ],
    [
        'id' => 732,
        'station_id' => 179,
        'feature_id' => 5,
    ],
    [
        'id' => 733,
        'station_id' => 179,
        'feature_id' => 4,
    ],
    [
        'id' => 734,
        'station_id' => 179,
        'feature_id' => 13,
    ],
    [
        'id' => 735,
        'station_id' => 179,
        'feature_id' => 1,
    ],
    [
        'id' => 736,
        'station_id' => 179,
        'feature_id' => 18,
    ],
    [
        'id' => 737,
        'station_id' => 180,
        'feature_id' => 14,
    ],
    [
        'id' => 738,
        'station_id' => 180,
        'feature_id' => 5,
    ],
    [
        'id' => 739,
        'station_id' => 180,
        'feature_id' => 13,
    ],
    [
        'id' => 740,
        'station_id' => 180,
        'feature_id' => 1,
    ],
    [
        'id' => 741,
        'station_id' => 181,
        'feature_id' => 1,
    ],
    [
        'id' => 742,
        'station_id' => 182,
        'feature_id' => 13,
    ],
    [
        'id' => 743,
        'station_id' => 182,
        'feature_id' => 1,
    ],
    [
        'id' => 744,
        'station_id' => 183,
        'feature_id' => 11,
    ],
    [
        'id' => 745,
        'station_id' => 183,
        'feature_id' => 14,
    ],
    [
        'id' => 746,
        'station_id' => 183,
        'feature_id' => 6,
    ],
    [
        'id' => 747,
        'station_id' => 183,
        'feature_id' => 12,
    ],
    [
        'id' => 748,
        'station_id' => 183,
        'feature_id' => 5,
    ],
    [
        'id' => 749,
        'station_id' => 183,
        'feature_id' => 4,
    ],
    [
        'id' => 750,
        'station_id' => 183,
        'feature_id' => 13,
    ],
    [
        'id' => 751,
        'station_id' => 183,
        'feature_id' => 1,
    ],
    [
        'id' => 752,
        'station_id' => 183,
        'feature_id' => 18,
    ],
    [
        'id' => 753,
        'station_id' => 184,
        'feature_id' => 14,
    ],
    [
        'id' => 754,
        'station_id' => 184,
        'feature_id' => 9,
    ],
    [
        'id' => 755,
        'station_id' => 184,
        'feature_id' => 10,
    ],
    [
        'id' => 756,
        'station_id' => 184,
        'feature_id' => 5,
    ],
    [
        'id' => 757,
        'station_id' => 184,
        'feature_id' => 15,
    ],
    [
        'id' => 758,
        'station_id' => 184,
        'feature_id' => 2,
    ],
    [
        'id' => 759,
        'station_id' => 184,
        'feature_id' => 1,
    ],
    [
        'id' => 760,
        'station_id' => 185,
        'feature_id' => 11,
    ],
    [
        'id' => 761,
        'station_id' => 185,
        'feature_id' => 14,
    ],
    [
        'id' => 762,
        'station_id' => 185,
        'feature_id' => 9,
    ],
    [
        'id' => 763,
        'station_id' => 185,
        'feature_id' => 6,
    ],
    [
        'id' => 764,
        'station_id' => 185,
        'feature_id' => 10,
    ],
    [
        'id' => 765,
        'station_id' => 185,
        'feature_id' => 5,
    ],
    [
        'id' => 766,
        'station_id' => 185,
        'feature_id' => 15,
    ],
    [
        'id' => 767,
        'station_id' => 185,
        'feature_id' => 8,
    ],
    [
        'id' => 768,
        'station_id' => 185,
        'feature_id' => 2,
    ],
    [
        'id' => 769,
        'station_id' => 185,
        'feature_id' => 1,
    ],
    [
        'id' => 770,
        'station_id' => 185,
        'feature_id' => 18,
    ],
    [
        'id' => 771,
        'station_id' => 186,
        'feature_id' => 11,
    ],
    [
        'id' => 772,
        'station_id' => 186,
        'feature_id' => 6,
    ],
    [
        'id' => 773,
        'station_id' => 186,
        'feature_id' => 5,
    ],
    [
        'id' => 774,
        'station_id' => 186,
        'feature_id' => 13,
    ],
    [
        'id' => 775,
        'station_id' => 186,
        'feature_id' => 1,
    ],
    [
        'id' => 776,
        'station_id' => 186,
        'feature_id' => 18,
    ],
    [
        'id' => 777,
        'station_id' => 187,
        'feature_id' => 17,
    ],
    [
        'id' => 778,
        'station_id' => 188,
        'feature_id' => 14,
    ],
    [
        'id' => 779,
        'station_id' => 188,
        'feature_id' => 10,
    ],
    [
        'id' => 780,
        'station_id' => 188,
        'feature_id' => 17,
    ],
    [
        'id' => 781,
        'station_id' => 188,
        'feature_id' => 13,
    ],
    [
        'id' => 782,
        'station_id' => 189,
        'feature_id' => 1,
    ],
    [
        'id' => 783,
        'station_id' => 190,
        'feature_id' => 14,
    ],
    [
        'id' => 784,
        'station_id' => 190,
        'feature_id' => 15,
    ],
    [
        'id' => 785,
        'station_id' => 190,
        'feature_id' => 13,
    ],
    [
        'id' => 786,
        'station_id' => 190,
        'feature_id' => 1,
    ],
    [
        'id' => 787,
        'station_id' => 191,
        'feature_id' => 11,
    ],
    [
        'id' => 788,
        'station_id' => 191,
        'feature_id' => 14,
    ],
    [
        'id' => 789,
        'station_id' => 191,
        'feature_id' => 6,
    ],
    [
        'id' => 790,
        'station_id' => 191,
        'feature_id' => 12,
    ],
    [
        'id' => 791,
        'station_id' => 191,
        'feature_id' => 5,
    ],
    [
        'id' => 792,
        'station_id' => 191,
        'feature_id' => 4,
    ],
    [
        'id' => 793,
        'station_id' => 191,
        'feature_id' => 13,
    ],
    [
        'id' => 794,
        'station_id' => 191,
        'feature_id' => 18,
    ],
    [
        'id' => 795,
        'station_id' => 192,
        'feature_id' => 14,
    ],
    [
        'id' => 796,
        'station_id' => 192,
        'feature_id' => 10,
    ],
    [
        'id' => 797,
        'station_id' => 192,
        'feature_id' => 17,
    ],
    [
        'id' => 798,
        'station_id' => 192,
        'feature_id' => 13,
    ],
    [
        'id' => 799,
        'station_id' => 193,
        'feature_id' => 14,
    ],
    [
        'id' => 800,
        'station_id' => 194,
        'feature_id' => 14,
    ],
    [
        'id' => 801,
        'station_id' => 195,
        'feature_id' => 11,
    ],
    [
        'id' => 802,
        'station_id' => 195,
        'feature_id' => 3,
    ],
    [
        'id' => 803,
        'station_id' => 195,
        'feature_id' => 10,
    ],
    [
        'id' => 804,
        'station_id' => 195,
        'feature_id' => 1,
    ],
    [
        'id' => 805,
        'station_id' => 196,
        'feature_id' => 14,
    ],
    [
        'id' => 806,
        'station_id' => 196,
        'feature_id' => 10,
    ],
    [
        'id' => 807,
        'station_id' => 196,
        'feature_id' => 17,
    ],
    [
        'id' => 808,
        'station_id' => 197,
        'feature_id' => 11,
    ],
    [
        'id' => 809,
        'station_id' => 197,
        'feature_id' => 14,
    ],
    [
        'id' => 810,
        'station_id' => 197,
        'feature_id' => 6,
    ],
    [
        'id' => 811,
        'station_id' => 197,
        'feature_id' => 5,
    ],
    [
        'id' => 812,
        'station_id' => 197,
        'feature_id' => 17,
    ],
    [
        'id' => 813,
        'station_id' => 197,
        'feature_id' => 15,
    ],
    [
        'id' => 814,
        'station_id' => 197,
        'feature_id' => 4,
    ],
    [
        'id' => 815,
        'station_id' => 197,
        'feature_id' => 13,
    ],
    [
        'id' => 816,
        'station_id' => 197,
        'feature_id' => 18,
    ],
    [
        'id' => 817,
        'station_id' => 198,
        'feature_id' => 14,
    ],
    [
        'id' => 818,
        'station_id' => 198,
        'feature_id' => 10,
    ],
    [
        'id' => 819,
        'station_id' => 198,
        'feature_id' => 5,
    ],
    [
        'id' => 820,
        'station_id' => 198,
        'feature_id' => 17,
    ],
    [
        'id' => 821,
        'station_id' => 198,
        'feature_id' => 15,
    ],
    [
        'id' => 822,
        'station_id' => 198,
        'feature_id' => 4,
    ],
    [
        'id' => 823,
        'station_id' => 198,
        'feature_id' => 8,
    ],
    [
        'id' => 824,
        'station_id' => 198,
        'feature_id' => 13,
    ],
    [
        'id' => 825,
        'station_id' => 198,
        'feature_id' => 1,
    ],
    [
        'id' => 826,
        'station_id' => 199,
        'feature_id' => 14,
    ],
    [
        'id' => 827,
        'station_id' => 199,
        'feature_id' => 10,
    ],
    [
        'id' => 828,
        'station_id' => 199,
        'feature_id' => 17,
    ],
    [
        'id' => 829,
        'station_id' => 200,
        'feature_id' => 3,
    ],
    [
        'id' => 830,
        'station_id' => 200,
        'feature_id' => 17,
    ],
    [
        'id' => 831,
        'station_id' => 201,
        'feature_id' => 14,
    ],
    [
        'id' => 832,
        'station_id' => 201,
        'feature_id' => 10,
    ],
    [
        'id' => 833,
        'station_id' => 201,
        'feature_id' => 1,
    ],
    [
        'id' => 834,
        'station_id' => 202,
        'feature_id' => 14,
    ],
    [
        'id' => 835,
        'station_id' => 202,
        'feature_id' => 17,
    ],
    [
        'id' => 836,
        'station_id' => 202,
        'feature_id' => 2,
    ],
    [
        'id' => 837,
        'station_id' => 203,
        'feature_id' => 17,
    ],
    [
        'id' => 838,
        'station_id' => 203,
        'feature_id' => 15,
    ],
    [
        'id' => 839,
        'station_id' => 203,
        'feature_id' => 2,
    ],
    [
        'id' => 840,
        'station_id' => 204,
        'feature_id' => 17,
    ],
    [
        'id' => 841,
        'station_id' => 204,
        'feature_id' => 2,
    ],
    [
        'id' => 842,
        'station_id' => 205,
        'feature_id' => 17,
    ],
    [
        'id' => 843,
        'station_id' => 205,
        'feature_id' => 2,
    ],
    [
        'id' => 844,
        'station_id' => 206,
        'feature_id' => 14,
    ],
    [
        'id' => 845,
        'station_id' => 206,
        'feature_id' => 7,
    ],
    [
        'id' => 846,
        'station_id' => 207,
        'feature_id' => 14,
    ],
    [
        'id' => 847,
        'station_id' => 208,
        'feature_id' => 10,
    ],
    [
        'id' => 848,
        'station_id' => 208,
        'feature_id' => 17,
    ],
    [
        'id' => 849,
        'station_id' => 209,
        'feature_id' => 10,
    ],
    [
        'id' => 850,
        'station_id' => 209,
        'feature_id' => 17,
    ],
    [
        'id' => 851,
        'station_id' => 210,
        'feature_id' => 14,
    ],
    [
        'id' => 852,
        'station_id' => 211,
        'feature_id' => 14,
    ],
    [
        'id' => 853,
        'station_id' => 211,
        'feature_id' => 10,
    ],
    [
        'id' => 854,
        'station_id' => 211,
        'feature_id' => 17,
    ],
    [
        'id' => 855,
        'station_id' => 212,
        'feature_id' => 14,
    ],
    [
        'id' => 856,
        'station_id' => 213,
        'feature_id' => 14,
    ],
    [
        'id' => 857,
        'station_id' => 213,
        'feature_id' => 17,
    ],
    [
        'id' => 858,
        'station_id' => 214,
        'feature_id' => 14,
    ],
    [
        'id' => 859,
        'station_id' => 215,
        'feature_id' => 14,
    ],
    [
        'id' => 860,
        'station_id' => 215,
        'feature_id' => 17,
    ],
    [
        'id' => 861,
        'station_id' => 216,
        'feature_id' => 14,
    ],
    [
        'id' => 862,
        'station_id' => 217,
        'feature_id' => 14,
    ],
    [
        'id' => 863,
        'station_id' => 217,
        'feature_id' => 17,
    ],
    [
        'id' => 864,
        'station_id' => 218,
        'feature_id' => 14,
    ],
    [
        'id' => 865,
        'station_id' => 218,
        'feature_id' => 15,
    ],
    [
        'id' => 866,
        'station_id' => 219,
        'feature_id' => 14,
    ],
    [
        'id' => 867,
        'station_id' => 219,
        'feature_id' => 10,
    ],
    [
        'id' => 868,
        'station_id' => 219,
        'feature_id' => 17,
    ],
    [
        'id' => 869,
        'station_id' => 220,
        'feature_id' => 14,
    ],
    [
        'id' => 870,
        'station_id' => 220,
        'feature_id' => 10,
    ],
    [
        'id' => 871,
        'station_id' => 220,
        'feature_id' => 17,
    ],
    [
        'id' => 872,
        'station_id' => 221,
        'feature_id' => 14,
    ],
    [
        'id' => 873,
        'station_id' => 222,
        'feature_id' => 14,
    ],
    [
        'id' => 874,
        'station_id' => 222,
        'feature_id' => 15,
    ],
    [
        'id' => 875,
        'station_id' => 223,
        'feature_id' => 14,
    ],
    [
        'id' => 876,
        'station_id' => 224,
        'feature_id' => 14,
    ],
    [
        'id' => 877,
        'station_id' => 224,
        'feature_id' => 15,
    ],
    [
        'id' => 878,
        'station_id' => 225,
        'feature_id' => 14,
    ],
    [
        'id' => 879,
        'station_id' => 226,
        'feature_id' => 14,
    ],
    [
        'id' => 880,
        'station_id' => 227,
        'feature_id' => 14,
    ],
    [
        'id' => 881,
        'station_id' => 227,
        'feature_id' => 15,
    ],
    [
        'id' => 882,
        'station_id' => 227,
        'feature_id' => 4,
    ],
    [
        'id' => 883,
        'station_id' => 228,
        'feature_id' => 14,
    ],
    [
        'id' => 884,
        'station_id' => 229,
        'feature_id' => 14,
    ],
    [
        'id' => 885,
        'station_id' => 230,
        'feature_id' => 14,
    ],
    [
        'id' => 886,
        'station_id' => 231,
        'feature_id' => 14,
    ],
    [
        'id' => 887,
        'station_id' => 231,
        'feature_id' => 15,
    ],
    [
        'id' => 888,
        'station_id' => 232,
        'feature_id' => 14,
    ],
    [
        'id' => 889,
        'station_id' => 234,
        'feature_id' => 14,
    ],
    [
        'id' => 890,
        'station_id' => 236,
        'feature_id' => 14,
    ],
    [
        'id' => 891,
        'station_id' => 237,
        'feature_id' => 14,
    ],
    [
        'id' => 892,
        'station_id' => 237,
        'feature_id' => 7,
    ],
    [
        'id' => 893,
        'station_id' => 237,
        'feature_id' => 17,
    ],
    [
        'id' => 894,
        'station_id' => 238,
        'feature_id' => 14,
    ],
    [
        'id' => 895,
        'station_id' => 238,
        'feature_id' => 10,
    ],
    [
        'id' => 896,
        'station_id' => 239,
        'feature_id' => 14,
    ],
    [
        'id' => 897,
        'station_id' => 240,
        'feature_id' => 14,
    ],
    [
        'id' => 898,
        'station_id' => 240,
        'feature_id' => 10,
    ],
    [
        'id' => 899,
        'station_id' => 241,
        'feature_id' => 14,
    ],
    [
        'id' => 900,
        'station_id' => 241,
        'feature_id' => 10,
    ],
    [
        'id' => 901,
        'station_id' => 241,
        'feature_id' => 1,
    ],
    [
        'id' => 902,
        'station_id' => 242,
        'feature_id' => 14,
    ],
    [
        'id' => 903,
        'station_id' => 242,
        'feature_id' => 7,
    ],
    [
        'id' => 904,
        'station_id' => 242,
        'feature_id' => 17,
    ],
    [
        'id' => 905,
        'station_id' => 243,
        'feature_id' => 14,
    ],
    [
        'id' => 906,
        'station_id' => 243,
        'feature_id' => 7,
    ],
    [
        'id' => 907,
        'station_id' => 243,
        'feature_id' => 17,
    ],
    [
        'id' => 908,
        'station_id' => 243,
        'feature_id' => 15,
    ],
    [
        'id' => 909,
        'station_id' => 243,
        'feature_id' => 1,
    ],
    [
        'id' => 910,
        'station_id' => 244,
        'feature_id' => 14,
    ],
    [
        'id' => 911,
        'station_id' => 244,
        'feature_id' => 10,
    ],
    [
        'id' => 912,
        'station_id' => 244,
        'feature_id' => 15,
    ],
    [
        'id' => 913,
        'station_id' => 245,
        'feature_id' => 14,
    ],
    [
        'id' => 914,
        'station_id' => 245,
        'feature_id' => 10,
    ],
    [
        'id' => 915,
        'station_id' => 245,
        'feature_id' => 1,
    ],
    [
        'id' => 916,
        'station_id' => 246,
        'feature_id' => 11,
    ],
    [
        'id' => 917,
        'station_id' => 246,
        'feature_id' => 14,
    ],
    [
        'id' => 918,
        'station_id' => 246,
        'feature_id' => 5,
    ],
    [
        'id' => 919,
        'station_id' => 246,
        'feature_id' => 4,
    ],
    [
        'id' => 920,
        'station_id' => 247,
        'feature_id' => 10,
    ],
    [
        'id' => 921,
        'station_id' => 247,
        'feature_id' => 17,
    ],
    [
        'id' => 922,
        'station_id' => 247,
        'feature_id' => 13,
    ],
    [
        'id' => 923,
        'station_id' => 248,
        'feature_id' => 11,
    ],
    [
        'id' => 924,
        'station_id' => 248,
        'feature_id' => 17,
    ],
    [
        'id' => 925,
        'station_id' => 248,
        'feature_id' => 13,
    ],
    [
        'id' => 926,
        'station_id' => 249,
        'feature_id' => 14,
    ],
    [
        'id' => 927,
        'station_id' => 250,
        'feature_id' => 11,
    ],
    [
        'id' => 928,
        'station_id' => 250,
        'feature_id' => 5,
    ],
    [
        'id' => 929,
        'station_id' => 250,
        'feature_id' => 13,
    ],
    [
        'id' => 930,
        'station_id' => 250,
        'feature_id' => 1,
    ],
    [
        'id' => 931,
        'station_id' => 250,
        'feature_id' => 18,
    ],
    [
        'id' => 932,
        'station_id' => 251,
        'feature_id' => 14,
    ],
    [
        'id' => 933,
        'station_id' => 251,
        'feature_id' => 7,
    ],
    [
        'id' => 934,
        'station_id' => 251,
        'feature_id' => 17,
    ],
    [
        'id' => 935,
        'station_id' => 251,
        'feature_id' => 1,
    ],
    [
        'id' => 936,
        'station_id' => 252,
        'feature_id' => 14,
    ],
    [
        'id' => 937,
        'station_id' => 252,
        'feature_id' => 10,
    ],
    [
        'id' => 938,
        'station_id' => 253,
        'feature_id' => 14,
    ],
    [
        'id' => 939,
        'station_id' => 253,
        'feature_id' => 10,
    ],
    [
        'id' => 940,
        'station_id' => 254,
        'feature_id' => 14,
    ],
    [
        'id' => 941,
        'station_id' => 254,
        'feature_id' => 10,
    ],
    [
        'id' => 942,
        'station_id' => 254,
        'feature_id' => 7,
    ],
    [
        'id' => 943,
        'station_id' => 254,
        'feature_id' => 13,
    ],
    [
        'id' => 944,
        'station_id' => 254,
        'feature_id' => 1,
    ],
    [
        'id' => 945,
        'station_id' => 255,
        'feature_id' => 14,
    ],
    [
        'id' => 946,
        'station_id' => 255,
        'feature_id' => 10,
    ],
    [
        'id' => 947,
        'station_id' => 255,
        'feature_id' => 1,
    ],
    [
        'id' => 948,
        'station_id' => 256,
        'feature_id' => 14,
    ],
    [
        'id' => 949,
        'station_id' => 256,
        'feature_id' => 10,
    ],
    [
        'id' => 950,
        'station_id' => 257,
        'feature_id' => 14,
    ],
    [
        'id' => 951,
        'station_id' => 258,
        'feature_id' => 14,
    ],
    [
        'id' => 952,
        'station_id' => 259,
        'feature_id' => 14,
    ],
    [
        'id' => 953,
        'station_id' => 259,
        'feature_id' => 10,
    ],
    [
        'id' => 954,
        'station_id' => 259,
        'feature_id' => 7,
    ],
    [
        'id' => 955,
        'station_id' => 259,
        'feature_id' => 13,
    ],
    [
        'id' => 956,
        'station_id' => 259,
        'feature_id' => 1,
    ],
    [
        'id' => 957,
        'station_id' => 260,
        'feature_id' => 14,
    ],
    [
        'id' => 958,
        'station_id' => 260,
        'feature_id' => 3,
    ],
    [
        'id' => 959,
        'station_id' => 260,
        'feature_id' => 5,
    ],
    [
        'id' => 960,
        'station_id' => 260,
        'feature_id' => 7,
    ],
    [
        'id' => 961,
        'station_id' => 260,
        'feature_id' => 17,
    ],
    [
        'id' => 962,
        'station_id' => 260,
        'feature_id' => 13,
    ],
    [
        'id' => 963,
        'station_id' => 260,
        'feature_id' => 1,
    ],
    [
        'id' => 964,
        'station_id' => 261,
        'feature_id' => 14,
    ],
    [
        'id' => 965,
        'station_id' => 261,
        'feature_id' => 10,
    ],
    [
        'id' => 966,
        'station_id' => 261,
        'feature_id' => 7,
    ],
    [
        'id' => 967,
        'station_id' => 261,
        'feature_id' => 17,
    ],
    [
        'id' => 968,
        'station_id' => 261,
        'feature_id' => 13,
    ],
    [
        'id' => 969,
        'station_id' => 262,
        'feature_id' => 14,
    ],
    [
        'id' => 970,
        'station_id' => 262,
        'feature_id' => 10,
    ],
    [
        'id' => 971,
        'station_id' => 262,
        'feature_id' => 15,
    ],
    [
        'id' => 972,
        'station_id' => 263,
        'feature_id' => 14,
    ],
    [
        'id' => 973,
        'station_id' => 263,
        'feature_id' => 10,
    ],
    [
        'id' => 974,
        'station_id' => 263,
        'feature_id' => 7,
    ],
    [
        'id' => 975,
        'station_id' => 263,
        'feature_id' => 17,
    ],
    [
        'id' => 976,
        'station_id' => 263,
        'feature_id' => 13,
    ],
    [
        'id' => 977,
        'station_id' => 264,
        'feature_id' => 14,
    ],
    [
        'id' => 978,
        'station_id' => 264,
        'feature_id' => 7,
    ],
    [
        'id' => 979,
        'station_id' => 264,
        'feature_id' => 17,
    ],
    [
        'id' => 980,
        'station_id' => 264,
        'feature_id' => 1,
    ],
    [
        'id' => 981,
        'station_id' => 265,
        'feature_id' => 14,
    ],
    [
        'id' => 982,
        'station_id' => 265,
        'feature_id' => 10,
    ],
    [
        'id' => 983,
        'station_id' => 265,
        'feature_id' => 1,
    ],
    [
        'id' => 984,
        'station_id' => 266,
        'feature_id' => 14,
    ],
    [
        'id' => 985,
        'station_id' => 266,
        'feature_id' => 10,
    ],
    [
        'id' => 986,
        'station_id' => 266,
        'feature_id' => 7,
    ],
    [
        'id' => 987,
        'station_id' => 266,
        'feature_id' => 17,
    ],
    [
        'id' => 988,
        'station_id' => 266,
        'feature_id' => 13,
    ],
    [
        'id' => 989,
        'station_id' => 266,
        'feature_id' => 1,
    ],
    [
        'id' => 990,
        'station_id' => 267,
        'feature_id' => 14,
    ],
    [
        'id' => 991,
        'station_id' => 267,
        'feature_id' => 10,
    ],
    [
        'id' => 992,
        'station_id' => 267,
        'feature_id' => 7,
    ],
    [
        'id' => 993,
        'station_id' => 267,
        'feature_id' => 17,
    ],
    [
        'id' => 994,
        'station_id' => 267,
        'feature_id' => 13,
    ],
    [
        'id' => 995,
        'station_id' => 268,
        'feature_id' => 14,
    ],
    [
        'id' => 996,
        'station_id' => 268,
        'feature_id' => 10,
    ],
    [
        'id' => 997,
        'station_id' => 268,
        'feature_id' => 7,
    ],
    [
        'id' => 998,
        'station_id' => 268,
        'feature_id' => 17,
    ],
    [
        'id' => 999,
        'station_id' => 268,
        'feature_id' => 13,
    ],
    [
        'id' => 1000,
        'station_id' => 269,
        'feature_id' => 14,
    ],
    [
        'id' => 1001,
        'station_id' => 269,
        'feature_id' => 10,
    ],
    [
        'id' => 1002,
        'station_id' => 269,
        'feature_id' => 7,
    ],
    [
        'id' => 1003,
        'station_id' => 269,
        'feature_id' => 17,
    ],
    [
        'id' => 1004,
        'station_id' => 269,
        'feature_id' => 13,
    ],
    [
        'id' => 1005,
        'station_id' => 270,
        'feature_id' => 14,
    ],
    [
        'id' => 1006,
        'station_id' => 270,
        'feature_id' => 10,
    ],
    [
        'id' => 1007,
        'station_id' => 270,
        'feature_id' => 7,
    ],
    [
        'id' => 1008,
        'station_id' => 270,
        'feature_id' => 17,
    ],
    [
        'id' => 1009,
        'station_id' => 270,
        'feature_id' => 13,
    ],
    [
        'id' => 1010,
        'station_id' => 270,
        'feature_id' => 1,
    ],
    [
        'id' => 1011,
        'station_id' => 271,
        'feature_id' => 14,
    ],
    [
        'id' => 1012,
        'station_id' => 271,
        'feature_id' => 3,
    ],
    [
        'id' => 1013,
        'station_id' => 271,
        'feature_id' => 10,
    ],
    [
        'id' => 1014,
        'station_id' => 271,
        'feature_id' => 7,
    ],
    [
        'id' => 1015,
        'station_id' => 271,
        'feature_id' => 17,
    ],
    [
        'id' => 1016,
        'station_id' => 271,
        'feature_id' => 13,
    ],
    [
        'id' => 1017,
        'station_id' => 271,
        'feature_id' => 1,
    ],
    [
        'id' => 1018,
        'station_id' => 272,
        'feature_id' => 14,
    ],
    [
        'id' => 1019,
        'station_id' => 272,
        'feature_id' => 3,
    ],
    [
        'id' => 1020,
        'station_id' => 272,
        'feature_id' => 10,
    ],
    [
        'id' => 1021,
        'station_id' => 272,
        'feature_id' => 7,
    ],
    [
        'id' => 1022,
        'station_id' => 272,
        'feature_id' => 17,
    ],
    [
        'id' => 1023,
        'station_id' => 272,
        'feature_id' => 13,
    ],
    [
        'id' => 1024,
        'station_id' => 272,
        'feature_id' => 1,
    ],
    [
        'id' => 1025,
        'station_id' => 273,
        'feature_id' => 14,
    ],
    [
        'id' => 1026,
        'station_id' => 273,
        'feature_id' => 10,
    ],
    [
        'id' => 1027,
        'station_id' => 273,
        'feature_id' => 7,
    ],
    [
        'id' => 1028,
        'station_id' => 273,
        'feature_id' => 17,
    ],
    [
        'id' => 1029,
        'station_id' => 273,
        'feature_id' => 13,
    ],
    [
        'id' => 1030,
        'station_id' => 273,
        'feature_id' => 1,
    ],
    [
        'id' => 1031,
        'station_id' => 274,
        'feature_id' => 14,
    ],
    [
        'id' => 1032,
        'station_id' => 274,
        'feature_id' => 10,
    ],
    [
        'id' => 1033,
        'station_id' => 274,
        'feature_id' => 7,
    ],
    [
        'id' => 1034,
        'station_id' => 274,
        'feature_id' => 17,
    ],
    [
        'id' => 1035,
        'station_id' => 274,
        'feature_id' => 13,
    ],
    [
        'id' => 1036,
        'station_id' => 275,
        'feature_id' => 14,
    ],
    [
        'id' => 1037,
        'station_id' => 275,
        'feature_id' => 10,
    ],
    [
        'id' => 1038,
        'station_id' => 275,
        'feature_id' => 7,
    ],
    [
        'id' => 1039,
        'station_id' => 275,
        'feature_id' => 17,
    ],
    [
        'id' => 1040,
        'station_id' => 275,
        'feature_id' => 13,
    ],
    [
        'id' => 1041,
        'station_id' => 276,
        'feature_id' => 14,
    ],
    [
        'id' => 1042,
        'station_id' => 276,
        'feature_id' => 10,
    ],
    [
        'id' => 1043,
        'station_id' => 276,
        'feature_id' => 7,
    ],
    [
        'id' => 1044,
        'station_id' => 276,
        'feature_id' => 17,
    ],
    [
        'id' => 1045,
        'station_id' => 276,
        'feature_id' => 13,
    ],
    [
        'id' => 1046,
        'station_id' => 277,
        'feature_id' => 14,
    ],
    [
        'id' => 1047,
        'station_id' => 277,
        'feature_id' => 10,
    ],
    [
        'id' => 1048,
        'station_id' => 277,
        'feature_id' => 7,
    ],
    [
        'id' => 1049,
        'station_id' => 277,
        'feature_id' => 13,
    ],
    [
        'id' => 1050,
        'station_id' => 277,
        'feature_id' => 1,
    ],
    [
        'id' => 1051,
        'station_id' => 278,
        'feature_id' => 14,
    ],
    [
        'id' => 1052,
        'station_id' => 278,
        'feature_id' => 10,
    ],
    [
        'id' => 1053,
        'station_id' => 278,
        'feature_id' => 17,
    ],
    [
        'id' => 1054,
        'station_id' => 278,
        'feature_id' => 13,
    ],
    [
        'id' => 1055,
        'station_id' => 279,
        'feature_id' => 14,
    ],
    [
        'id' => 1056,
        'station_id' => 279,
        'feature_id' => 10,
    ],
    [
        'id' => 1057,
        'station_id' => 279,
        'feature_id' => 7,
    ],
    [
        'id' => 1058,
        'station_id' => 279,
        'feature_id' => 17,
    ],
    [
        'id' => 1059,
        'station_id' => 279,
        'feature_id' => 13,
    ],
    [
        'id' => 1060,
        'station_id' => 280,
        'feature_id' => 14,
    ],
    [
        'id' => 1061,
        'station_id' => 280,
        'feature_id' => 10,
    ],
    [
        'id' => 1062,
        'station_id' => 280,
        'feature_id' => 7,
    ],
    [
        'id' => 1063,
        'station_id' => 280,
        'feature_id' => 17,
    ],
    [
        'id' => 1064,
        'station_id' => 280,
        'feature_id' => 13,
    ],
    [
        'id' => 1065,
        'station_id' => 281,
        'feature_id' => 14,
    ],
    [
        'id' => 1066,
        'station_id' => 281,
        'feature_id' => 3,
    ],
    [
        'id' => 1067,
        'station_id' => 281,
        'feature_id' => 7,
    ],
    [
        'id' => 1068,
        'station_id' => 281,
        'feature_id' => 17,
    ],
    [
        'id' => 1069,
        'station_id' => 281,
        'feature_id' => 13,
    ],
    [
        'id' => 1070,
        'station_id' => 282,
        'feature_id' => 14,
    ],
    [
        'id' => 1071,
        'station_id' => 282,
        'feature_id' => 10,
    ],
    [
        'id' => 1072,
        'station_id' => 282,
        'feature_id' => 7,
    ],
    [
        'id' => 1073,
        'station_id' => 282,
        'feature_id' => 17,
    ],
    [
        'id' => 1074,
        'station_id' => 282,
        'feature_id' => 13,
    ],
    [
        'id' => 1075,
        'station_id' => 283,
        'feature_id' => 14,
    ],
    [
        'id' => 1076,
        'station_id' => 283,
        'feature_id' => 10,
    ],
    [
        'id' => 1077,
        'station_id' => 283,
        'feature_id' => 7,
    ],
    [
        'id' => 1078,
        'station_id' => 283,
        'feature_id' => 17,
    ],
    [
        'id' => 1079,
        'station_id' => 283,
        'feature_id' => 13,
    ],
    [
        'id' => 1080,
        'station_id' => 284,
        'feature_id' => 14,
    ],
    [
        'id' => 1081,
        'station_id' => 284,
        'feature_id' => 10,
    ],
    [
        'id' => 1082,
        'station_id' => 284,
        'feature_id' => 17,
    ],
    [
        'id' => 1083,
        'station_id' => 284,
        'feature_id' => 13,
    ],
    [
        'id' => 1084,
        'station_id' => 285,
        'feature_id' => 14,
    ],
    [
        'id' => 1085,
        'station_id' => 285,
        'feature_id' => 10,
    ],
    [
        'id' => 1086,
        'station_id' => 285,
        'feature_id' => 7,
    ],
    [
        'id' => 1087,
        'station_id' => 285,
        'feature_id' => 17,
    ],
    [
        'id' => 1088,
        'station_id' => 285,
        'feature_id' => 13,
    ],
    [
        'id' => 1089,
        'station_id' => 286,
        'feature_id' => 14,
    ],
    [
        'id' => 1090,
        'station_id' => 286,
        'feature_id' => 10,
    ],
    [
        'id' => 1091,
        'station_id' => 286,
        'feature_id' => 7,
    ],
    [
        'id' => 1092,
        'station_id' => 286,
        'feature_id' => 17,
    ],
    [
        'id' => 1093,
        'station_id' => 286,
        'feature_id' => 13,
    ],
    [
        'id' => 1094,
        'station_id' => 286,
        'feature_id' => 1,
    ],
    [
        'id' => 1095,
        'station_id' => 287,
        'feature_id' => 14,
    ],
    [
        'id' => 1096,
        'station_id' => 287,
        'feature_id' => 3,
    ],
    [
        'id' => 1097,
        'station_id' => 287,
        'feature_id' => 10,
    ],
    [
        'id' => 1098,
        'station_id' => 287,
        'feature_id' => 7,
    ],
    [
        'id' => 1099,
        'station_id' => 287,
        'feature_id' => 17,
    ],
    [
        'id' => 1100,
        'station_id' => 287,
        'feature_id' => 13,
    ],
    [
        'id' => 1101,
        'station_id' => 287,
        'feature_id' => 1,
    ],
    [
        'id' => 1102,
        'station_id' => 288,
        'feature_id' => 14,
    ],
    [
        'id' => 1103,
        'station_id' => 288,
        'feature_id' => 10,
    ],
    [
        'id' => 1104,
        'station_id' => 288,
        'feature_id' => 7,
    ],
    [
        'id' => 1105,
        'station_id' => 288,
        'feature_id' => 17,
    ],
    [
        'id' => 1106,
        'station_id' => 288,
        'feature_id' => 13,
    ],
    [
        'id' => 1107,
        'station_id' => 289,
        'feature_id' => 14,
    ],
    [
        'id' => 1108,
        'station_id' => 289,
        'feature_id' => 10,
    ],
    [
        'id' => 1109,
        'station_id' => 289,
        'feature_id' => 7,
    ],
    [
        'id' => 1110,
        'station_id' => 289,
        'feature_id' => 17,
    ],
    [
        'id' => 1111,
        'station_id' => 289,
        'feature_id' => 13,
    ],
    [
        'id' => 1112,
        'station_id' => 290,
        'feature_id' => 14,
    ],
    [
        'id' => 1113,
        'station_id' => 290,
        'feature_id' => 10,
    ],
    [
        'id' => 1114,
        'station_id' => 290,
        'feature_id' => 7,
    ],
    [
        'id' => 1115,
        'station_id' => 290,
        'feature_id' => 17,
    ],
    [
        'id' => 1116,
        'station_id' => 290,
        'feature_id' => 13,
    ],
    [
        'id' => 1117,
        'station_id' => 291,
        'feature_id' => 14,
    ],
    [
        'id' => 1118,
        'station_id' => 291,
        'feature_id' => 10,
    ],
    [
        'id' => 1119,
        'station_id' => 291,
        'feature_id' => 17,
    ],
    [
        'id' => 1120,
        'station_id' => 291,
        'feature_id' => 13,
    ],
    [
        'id' => 1121,
        'station_id' => 292,
        'feature_id' => 14,
    ],
    [
        'id' => 1122,
        'station_id' => 292,
        'feature_id' => 10,
    ],
    [
        'id' => 1123,
        'station_id' => 292,
        'feature_id' => 7,
    ],
    [
        'id' => 1124,
        'station_id' => 292,
        'feature_id' => 17,
    ],
    [
        'id' => 1125,
        'station_id' => 292,
        'feature_id' => 13,
    ],
    [
        'id' => 1126,
        'station_id' => 293,
        'feature_id' => 3,
    ],
    [
        'id' => 1127,
        'station_id' => 293,
        'feature_id' => 17,
    ],
    [
        'id' => 1128,
        'station_id' => 294,
        'feature_id' => 17,
    ],
    [
        'id' => 1129,
        'station_id' => 295,
        'feature_id' => 11,
    ],
    [
        'id' => 1130,
        'station_id' => 295,
        'feature_id' => 14,
    ],
    [
        'id' => 1131,
        'station_id' => 295,
        'feature_id' => 9,
    ],
    [
        'id' => 1132,
        'station_id' => 295,
        'feature_id' => 6,
    ],
    [
        'id' => 1133,
        'station_id' => 295,
        'feature_id' => 12,
    ],
    [
        'id' => 1134,
        'station_id' => 295,
        'feature_id' => 10,
    ],
    [
        'id' => 1135,
        'station_id' => 295,
        'feature_id' => 5,
    ],
    [
        'id' => 1136,
        'station_id' => 295,
        'feature_id' => 4,
    ],
    [
        'id' => 1137,
        'station_id' => 295,
        'feature_id' => 8,
    ],
    [
        'id' => 1138,
        'station_id' => 295,
        'feature_id' => 2,
    ],
    [
        'id' => 1139,
        'station_id' => 295,
        'feature_id' => 18,
    ],
    [
        'id' => 1140,
        'station_id' => 296,
        'feature_id' => 17,
    ],
    [
        'id' => 1141,
        'station_id' => 297,
        'feature_id' => 17,
    ],
    [
        'id' => 1142,
        'station_id' => 298,
        'feature_id' => 17,
    ],
    [
        'id' => 1143,
        'station_id' => 299,
        'feature_id' => 17,
    ],
    [
        'id' => 1144,
        'station_id' => 300,
        'feature_id' => 17,
    ],
    [
        'id' => 1145,
        'station_id' => 301,
        'feature_id' => 17,
    ],
    [
        'id' => 1146,
        'station_id' => 302,
        'feature_id' => 17,
    ],
    [
        'id' => 1147,
        'station_id' => 303,
        'feature_id' => 17,
    ],
    [
        'id' => 1148,
        'station_id' => 304,
        'feature_id' => 14,
    ],
    [
        'id' => 1149,
        'station_id' => 304,
        'feature_id' => 10,
    ],
    [
        'id' => 1150,
        'station_id' => 305,
        'feature_id' => 14,
    ],
    [
        'id' => 1151,
        'station_id' => 305,
        'feature_id' => 17,
    ],
    [
        'id' => 1152,
        'station_id' => 306,
        'feature_id' => 1,
    ],
    [
        'id' => 1153,
        'station_id' => 307,
        'feature_id' => 1,
    ],
    [
        'id' => 1154,
        'station_id' => 308,
        'feature_id' => 11,
    ],
    [
        'id' => 1155,
        'station_id' => 308,
        'feature_id' => 14,
    ],
    [
        'id' => 1156,
        'station_id' => 308,
        'feature_id' => 6,
    ],
    [
        'id' => 1157,
        'station_id' => 308,
        'feature_id' => 12,
    ],
    [
        'id' => 1158,
        'station_id' => 308,
        'feature_id' => 10,
    ],
    [
        'id' => 1159,
        'station_id' => 308,
        'feature_id' => 5,
    ],
    [
        'id' => 1160,
        'station_id' => 308,
        'feature_id' => 4,
    ],
    [
        'id' => 1161,
        'station_id' => 308,
        'feature_id' => 13,
    ],
    [
        'id' => 1162,
        'station_id' => 308,
        'feature_id' => 1,
    ],
    [
        'id' => 1163,
        'station_id' => 308,
        'feature_id' => 18,
    ],
    [
        'id' => 1164,
        'station_id' => 309,
        'feature_id' => 14,
    ],
    [
        'id' => 1165,
        'station_id' => 309,
        'feature_id' => 10,
    ],
    [
        'id' => 1166,
        'station_id' => 309,
        'feature_id' => 7,
    ],
    [
        'id' => 1167,
        'station_id' => 310,
        'feature_id' => 14,
    ],
    [
        'id' => 1168,
        'station_id' => 310,
        'feature_id' => 10,
    ],
    [
        'id' => 1169,
        'station_id' => 311,
        'feature_id' => 14,
    ],
    [
        'id' => 1170,
        'station_id' => 311,
        'feature_id' => 10,
    ],
    [
        'id' => 1171,
        'station_id' => 312,
        'feature_id' => 14,
    ],
    [
        'id' => 1172,
        'station_id' => 312,
        'feature_id' => 10,
    ],
    [
        'id' => 1173,
        'station_id' => 312,
        'feature_id' => 15,
    ],
    [
        'id' => 1174,
        'station_id' => 313,
        'feature_id' => 14,
    ],
    [
        'id' => 1175,
        'station_id' => 313,
        'feature_id' => 7,
    ],
    [
        'id' => 1176,
        'station_id' => 313,
        'feature_id' => 17,
    ],
    [
        'id' => 1177,
        'station_id' => 314,
        'feature_id' => 14,
    ],
    [
        'id' => 1178,
        'station_id' => 314,
        'feature_id' => 10,
    ],
    [
        'id' => 1179,
        'station_id' => 315,
        'feature_id' => 15,
    ],
    [
        'id' => 1180,
        'station_id' => 316,
        'feature_id' => 14,
    ],
    [
        'id' => 1181,
        'station_id' => 317,
        'feature_id' => 14,
    ],
    [
        'id' => 1182,
        'station_id' => 317,
        'feature_id' => 10,
    ],
    [
        'id' => 1183,
        'station_id' => 318,
        'feature_id' => 14,
    ],
    [
        'id' => 1184,
        'station_id' => 318,
        'feature_id' => 10,
    ],
    [
        'id' => 1185,
        'station_id' => 319,
        'feature_id' => 14,
    ],
    [
        'id' => 1186,
        'station_id' => 319,
        'feature_id' => 10,
    ],
    [
        'id' => 1187,
        'station_id' => 319,
        'feature_id' => 15,
    ],
    [
        'id' => 1188,
        'station_id' => 320,
        'feature_id' => 14,
    ],
    [
        'id' => 1189,
        'station_id' => 320,
        'feature_id' => 10,
    ],
    [
        'id' => 1190,
        'station_id' => 321,
        'feature_id' => 14,
    ],
    [
        'id' => 1191,
        'station_id' => 321,
        'feature_id' => 7,
    ],
    [
        'id' => 1192,
        'station_id' => 321,
        'feature_id' => 17,
    ],
    [
        'id' => 1193,
        'station_id' => 322,
        'feature_id' => 14,
    ],
    [
        'id' => 1194,
        'station_id' => 322,
        'feature_id' => 10,
    ],
    [
        'id' => 1195,
        'station_id' => 323,
        'feature_id' => 14,
    ],
    [
        'id' => 1196,
        'station_id' => 323,
        'feature_id' => 7,
    ],
    [
        'id' => 1197,
        'station_id' => 324,
        'feature_id' => 19,
    ],
    [
        'id' => 1198,
        'station_id' => 324,
        'feature_id' => 17,
    ],
    [
        'id' => 1199,
        'station_id' => 324,
        'feature_id' => 13,
    ],
    [
        'id' => 1200,
        'station_id' => 325,
        'feature_id' => 17,
    ],
    [
        'id' => 1201,
        'station_id' => 326,
        'feature_id' => 10,
    ],
    [
        'id' => 1202,
        'station_id' => 326,
        'feature_id' => 17,
    ],
    [
        'id' => 1203,
        'station_id' => 327,
        'feature_id' => 10,
    ],
    [
        'id' => 1204,
        'station_id' => 327,
        'feature_id' => 17,
    ],
    [
        'id' => 1205,
        'station_id' => 328,
        'feature_id' => 17,
    ],
    [
        'id' => 1206,
        'station_id' => 330,
        'feature_id' => 14,
    ],
    [
        'id' => 1207,
        'station_id' => 331,
        'feature_id' => 14,
    ],
    [
        'id' => 1208,
        'station_id' => 332,
        'feature_id' => 14,
    ],
    [
        'id' => 1209,
        'station_id' => 332,
        'feature_id' => 10,
    ],
    [
        'id' => 1210,
        'station_id' => 332,
        'feature_id' => 17,
    ],
    [
        'id' => 1211,
        'station_id' => 332,
        'feature_id' => 13,
    ],
    [
        'id' => 1212,
        'station_id' => 332,
        'feature_id' => 1,
    ],
    [
        'id' => 1213,
        'station_id' => 333,
        'feature_id' => 17,
    ],
    [
        'id' => 1214,
        'station_id' => 335,
        'feature_id' => 14,
    ],
    [
        'id' => 1215,
        'station_id' => 335,
        'feature_id' => 10,
    ],
    [
        'id' => 1216,
        'station_id' => 335,
        'feature_id' => 17,
    ],
    [
        'id' => 1217,
        'station_id' => 335,
        'feature_id' => 13,
    ],
    [
        'id' => 1218,
        'station_id' => 336,
        'feature_id' => 14,
    ],
    [
        'id' => 1219,
        'station_id' => 336,
        'feature_id' => 10,
    ],
    [
        'id' => 1220,
        'station_id' => 336,
        'feature_id' => 17,
    ],
    [
        'id' => 1221,
        'station_id' => 336,
        'feature_id' => 13,
    ],
    [
        'id' => 1222,
        'station_id' => 337,
        'feature_id' => 14,
    ],
    [
        'id' => 1223,
        'station_id' => 337,
        'feature_id' => 19,
    ],
    [
        'id' => 1224,
        'station_id' => 337,
        'feature_id' => 10,
    ],
    [
        'id' => 1225,
        'station_id' => 337,
        'feature_id' => 17,
    ],
    [
        'id' => 1226,
        'station_id' => 337,
        'feature_id' => 13,
    ],
    [
        'id' => 1227,
        'station_id' => 337,
        'feature_id' => 1,
    ],
    [
        'id' => 1228,
        'station_id' => 338,
        'feature_id' => 14,
    ],
    [
        'id' => 1229,
        'station_id' => 338,
        'feature_id' => 10,
    ],
    [
        'id' => 1230,
        'station_id' => 338,
        'feature_id' => 17,
    ],
    [
        'id' => 1231,
        'station_id' => 338,
        'feature_id' => 13,
    ],
    [
        'id' => 1232,
        'station_id' => 339,
        'feature_id' => 14,
    ],
    [
        'id' => 1233,
        'station_id' => 339,
        'feature_id' => 10,
    ],
    [
        'id' => 1234,
        'station_id' => 339,
        'feature_id' => 17,
    ],
    [
        'id' => 1235,
        'station_id' => 339,
        'feature_id' => 13,
    ],
    [
        'id' => 1236,
        'station_id' => 339,
        'feature_id' => 1,
    ],
    [
        'id' => 1237,
        'station_id' => 340,
        'feature_id' => 14,
    ],
    [
        'id' => 1238,
        'station_id' => 340,
        'feature_id' => 10,
    ],
    [
        'id' => 1239,
        'station_id' => 340,
        'feature_id' => 17,
    ],
    [
        'id' => 1240,
        'station_id' => 340,
        'feature_id' => 13,
    ],
    [
        'id' => 1241,
        'station_id' => 340,
        'feature_id' => 1,
    ],
    [
        'id' => 1242,
        'station_id' => 341,
        'feature_id' => 14,
    ],
    [
        'id' => 1243,
        'station_id' => 341,
        'feature_id' => 19,
    ],
    [
        'id' => 1244,
        'station_id' => 341,
        'feature_id' => 10,
    ],
    [
        'id' => 1245,
        'station_id' => 341,
        'feature_id' => 17,
    ],
    [
        'id' => 1246,
        'station_id' => 341,
        'feature_id' => 13,
    ],
    [
        'id' => 1247,
        'station_id' => 341,
        'feature_id' => 1,
    ],
    [
        'id' => 1248,
        'station_id' => 342,
        'feature_id' => 14,
    ],
    [
        'id' => 1249,
        'station_id' => 342,
        'feature_id' => 10,
    ],
    [
        'id' => 1250,
        'station_id' => 342,
        'feature_id' => 17,
    ],
    [
        'id' => 1251,
        'station_id' => 342,
        'feature_id' => 13,
    ],
    [
        'id' => 1252,
        'station_id' => 342,
        'feature_id' => 1,
    ],
    [
        'id' => 1253,
        'station_id' => 344,
        'feature_id' => 14,
    ],
    [
        'id' => 1254,
        'station_id' => 344,
        'feature_id' => 10,
    ],
    [
        'id' => 1255,
        'station_id' => 344,
        'feature_id' => 1,
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%stations_features}} CASCADE');
    }
}
