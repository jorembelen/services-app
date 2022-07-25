<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvinceCitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('province_cities')->delete();
        
        \DB::table('province_cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'province_id' => '1',
                'name' => 'Adams',
            ),
            1 => 
            array (
                'id' => 2,
                'province_id' => '1',
                'name' => 'Bacarra',
            ),
            2 => 
            array (
                'id' => 3,
                'province_id' => '1',
                'name' => 'Badoc',
            ),
            3 => 
            array (
                'id' => 4,
                'province_id' => '1',
                'name' => 'Bangui',
            ),
            4 => 
            array (
                'id' => 5,
                'province_id' => '1',
                'name' => ' Batac',
            ),
            5 => 
            array (
                'id' => 6,
                'province_id' => '1',
                'name' => 'Burgos',
            ),
            6 => 
            array (
                'id' => 7,
                'province_id' => '1',
                'name' => 'Carasi',
            ),
            7 => 
            array (
                'id' => 8,
                'province_id' => '1',
                'name' => 'Currimao',
            ),
            8 => 
            array (
                'id' => 9,
                'province_id' => '1',
                'name' => 'Dingras',
            ),
            9 => 
            array (
                'id' => 10,
                'province_id' => '1',
                'name' => 'Dumalneg',
            ),
            10 => 
            array (
                'id' => 11,
                'province_id' => '1',
            'name' => 'Banna (Espiritu)',
            ),
            11 => 
            array (
                'id' => 12,
                'province_id' => '1',
                'name' => 'Laoag City',
            ),
            12 => 
            array (
                'id' => 13,
                'province_id' => '1',
                'name' => 'Marcos',
            ),
            13 => 
            array (
                'id' => 14,
                'province_id' => '1',
                'name' => 'Nueva Era',
            ),
            14 => 
            array (
                'id' => 15,
                'province_id' => '1',
                'name' => 'Pagudpud',
            ),
            15 => 
            array (
                'id' => 16,
                'province_id' => '1',
                'name' => 'Paoay',
            ),
            16 => 
            array (
                'id' => 17,
                'province_id' => '1',
                'name' => 'Pasuquin',
            ),
            17 => 
            array (
                'id' => 18,
                'province_id' => '1',
                'name' => 'Piddig',
            ),
            18 => 
            array (
                'id' => 19,
                'province_id' => '1',
                'name' => 'Pinili',
            ),
            19 => 
            array (
                'id' => 20,
                'province_id' => '1',
                'name' => 'San Nicolas',
            ),
            20 => 
            array (
                'id' => 21,
                'province_id' => '1',
                'name' => 'Sarrat',
            ),
            21 => 
            array (
                'id' => 22,
                'province_id' => '1',
                'name' => 'Solsona',
            ),
            22 => 
            array (
                'id' => 23,
                'province_id' => '1',
                'name' => 'Vintar',
            ),
            23 => 
            array (
                'id' => 24,
                'province_id' => '2',
                'name' => 'Alilem',
            ),
            24 => 
            array (
                'id' => 25,
                'province_id' => '2',
                'name' => 'Banayoyo',
            ),
            25 => 
            array (
                'id' => 26,
                'province_id' => '2',
                'name' => 'Bantay',
            ),
            26 => 
            array (
                'id' => 27,
                'province_id' => '2',
                'name' => 'Burgos',
            ),
            27 => 
            array (
                'id' => 28,
                'province_id' => '2',
                'name' => 'Cabugao',
            ),
            28 => 
            array (
                'id' => 29,
                'province_id' => '2',
                'name' => ' Candon',
            ),
            29 => 
            array (
                'id' => 30,
                'province_id' => '2',
                'name' => 'Caoayan',
            ),
            30 => 
            array (
                'id' => 31,
                'province_id' => '2',
                'name' => 'Cervantes',
            ),
            31 => 
            array (
                'id' => 32,
                'province_id' => '2',
                'name' => 'Galimuyod',
            ),
            32 => 
            array (
                'id' => 33,
                'province_id' => '2',
            'name' => 'Gregorio Del Pilar (Concepcion)',
            ),
            33 => 
            array (
                'id' => 34,
                'province_id' => '2',
                'name' => 'Lidlidda',
            ),
            34 => 
            array (
                'id' => 35,
                'province_id' => '2',
                'name' => 'Magsingal',
            ),
            35 => 
            array (
                'id' => 36,
                'province_id' => '2',
                'name' => 'Nagbukel',
            ),
            36 => 
            array (
                'id' => 37,
                'province_id' => '2',
                'name' => 'Narvacan',
            ),
            37 => 
            array (
                'id' => 38,
                'province_id' => '2',
            'name' => 'Quirino (Angkaki)',
            ),
            38 => 
            array (
                'id' => 39,
                'province_id' => '2',
            'name' => 'Salcedo (Baugen)',
            ),
            39 => 
            array (
                'id' => 40,
                'province_id' => '2',
                'name' => 'San Emilio',
            ),
            40 => 
            array (
                'id' => 41,
                'province_id' => '2',
                'name' => 'San Esteban',
            ),
            41 => 
            array (
                'id' => 42,
                'province_id' => '2',
                'name' => 'San Ildefonso',
            ),
            42 => 
            array (
                'id' => 43,
                'province_id' => '2',
            'name' => 'San Juan (Lapog)',
            ),
            43 => 
            array (
                'id' => 44,
                'province_id' => '2',
                'name' => 'San Vicente',
            ),
            44 => 
            array (
                'id' => 45,
                'province_id' => '2',
                'name' => 'Santa',
            ),
            45 => 
            array (
                'id' => 46,
                'province_id' => '2',
                'name' => 'Santa Catalina',
            ),
            46 => 
            array (
                'id' => 47,
                'province_id' => '2',
                'name' => 'Santa Cruz',
            ),
            47 => 
            array (
                'id' => 48,
                'province_id' => '2',
                'name' => 'Santa Lucia',
            ),
            48 => 
            array (
                'id' => 49,
                'province_id' => '2',
                'name' => 'Santa Maria',
            ),
            49 => 
            array (
                'id' => 50,
                'province_id' => '2',
                'name' => 'Santiago',
            ),
            50 => 
            array (
                'id' => 51,
                'province_id' => '2',
                'name' => 'Santo Domingo',
            ),
            51 => 
            array (
                'id' => 52,
                'province_id' => '2',
                'name' => 'Sigay',
            ),
            52 => 
            array (
                'id' => 53,
                'province_id' => '2',
                'name' => 'Sinait',
            ),
            53 => 
            array (
                'id' => 54,
                'province_id' => '2',
                'name' => 'Sugpon',
            ),
            54 => 
            array (
                'id' => 55,
                'province_id' => '2',
                'name' => 'Suyo',
            ),
            55 => 
            array (
                'id' => 56,
                'province_id' => '2',
                'name' => 'Tagudin',
            ),
            56 => 
            array (
                'id' => 57,
                'province_id' => '2',
                'name' => ' Vigan',
            ),
            57 => 
            array (
                'id' => 58,
                'province_id' => '3',
                'name' => 'Agoo',
            ),
            58 => 
            array (
                'id' => 59,
                'province_id' => '3',
                'name' => 'Aringay',
            ),
            59 => 
            array (
                'id' => 60,
                'province_id' => '3',
                'name' => 'Bacnotan',
            ),
            60 => 
            array (
                'id' => 61,
                'province_id' => '3',
                'name' => 'Bagulin',
            ),
            61 => 
            array (
                'id' => 62,
                'province_id' => '3',
                'name' => 'Balaoan',
            ),
            62 => 
            array (
                'id' => 63,
                'province_id' => '3',
                'name' => 'Bangar',
            ),
            63 => 
            array (
                'id' => 64,
                'province_id' => '3',
                'name' => 'Bauang',
            ),
            64 => 
            array (
                'id' => 65,
                'province_id' => '3',
                'name' => 'Burgos',
            ),
            65 => 
            array (
                'id' => 66,
                'province_id' => '3',
                'name' => 'Caba',
            ),
            66 => 
            array (
                'id' => 67,
                'province_id' => '3',
                'name' => 'Luna',
            ),
            67 => 
            array (
                'id' => 68,
                'province_id' => '3',
                'name' => 'Naguilian',
            ),
            68 => 
            array (
                'id' => 69,
                'province_id' => '3',
                'name' => 'Pugo',
            ),
            69 => 
            array (
                'id' => 70,
                'province_id' => '3',
                'name' => 'Rosario',
            ),
            70 => 
            array (
                'id' => 71,
                'province_id' => '3',
                'name' => ' San Fernando',
            ),
            71 => 
            array (
                'id' => 72,
                'province_id' => '3',
                'name' => 'San Gabriel',
            ),
            72 => 
            array (
                'id' => 73,
                'province_id' => '3',
                'name' => 'San Juan',
            ),
            73 => 
            array (
                'id' => 74,
                'province_id' => '3',
                'name' => 'Santo Tomas',
            ),
            74 => 
            array (
                'id' => 75,
                'province_id' => '3',
                'name' => 'Santol',
            ),
            75 => 
            array (
                'id' => 76,
                'province_id' => '3',
                'name' => 'Sudipen',
            ),
            76 => 
            array (
                'id' => 77,
                'province_id' => '3',
                'name' => 'Tubao',
            ),
            77 => 
            array (
                'id' => 78,
                'province_id' => '4',
                'name' => 'Agno',
            ),
            78 => 
            array (
                'id' => 79,
                'province_id' => '4',
                'name' => 'Aguilar',
            ),
            79 => 
            array (
                'id' => 80,
                'province_id' => '4',
                'name' => ' Alaminos',
            ),
            80 => 
            array (
                'id' => 81,
                'province_id' => '4',
                'name' => 'Alcala',
            ),
            81 => 
            array (
                'id' => 82,
                'province_id' => '4',
                'name' => 'Anda',
            ),
            82 => 
            array (
                'id' => 83,
                'province_id' => '4',
                'name' => 'Asingan',
            ),
            83 => 
            array (
                'id' => 84,
                'province_id' => '4',
                'name' => 'Balungao',
            ),
            84 => 
            array (
                'id' => 85,
                'province_id' => '4',
                'name' => 'Bani',
            ),
            85 => 
            array (
                'id' => 86,
                'province_id' => '4',
                'name' => 'Basista',
            ),
            86 => 
            array (
                'id' => 87,
                'province_id' => '4',
                'name' => 'Bautista',
            ),
            87 => 
            array (
                'id' => 88,
                'province_id' => '4',
                'name' => 'Bayambang',
            ),
            88 => 
            array (
                'id' => 89,
                'province_id' => '4',
                'name' => 'Binalonan',
            ),
            89 => 
            array (
                'id' => 90,
                'province_id' => '4',
                'name' => 'Binmaley',
            ),
            90 => 
            array (
                'id' => 91,
                'province_id' => '4',
                'name' => 'Bolinao',
            ),
            91 => 
            array (
                'id' => 92,
                'province_id' => '4',
                'name' => 'Bugallon',
            ),
            92 => 
            array (
                'id' => 93,
                'province_id' => '4',
                'name' => 'Burgos',
            ),
            93 => 
            array (
                'id' => 94,
                'province_id' => '4',
                'name' => 'Calasiao',
            ),
            94 => 
            array (
                'id' => 95,
                'province_id' => '4',
                'name' => ' Dagupan',
            ),
            95 => 
            array (
                'id' => 96,
                'province_id' => '4',
                'name' => 'Dasol',
            ),
            96 => 
            array (
                'id' => 97,
                'province_id' => '4',
                'name' => 'Infanta',
            ),
            97 => 
            array (
                'id' => 98,
                'province_id' => '4',
                'name' => 'Labrador',
            ),
            98 => 
            array (
                'id' => 99,
                'province_id' => '4',
                'name' => 'Lingayen',
            ),
            99 => 
            array (
                'id' => 100,
                'province_id' => '4',
                'name' => 'Mabini',
            ),
            100 => 
            array (
                'id' => 101,
                'province_id' => '4',
                'name' => 'Malasiqui',
            ),
            101 => 
            array (
                'id' => 102,
                'province_id' => '4',
                'name' => 'Manaoag',
            ),
            102 => 
            array (
                'id' => 103,
                'province_id' => '4',
                'name' => 'Mangaldan',
            ),
            103 => 
            array (
                'id' => 104,
                'province_id' => '4',
                'name' => 'Mangatarem',
            ),
            104 => 
            array (
                'id' => 105,
                'province_id' => '4',
                'name' => 'Mapandan',
            ),
            105 => 
            array (
                'id' => 106,
                'province_id' => '4',
                'name' => 'Natividad',
            ),
            106 => 
            array (
                'id' => 107,
                'province_id' => '4',
                'name' => 'Pozorrubio',
            ),
            107 => 
            array (
                'id' => 108,
                'province_id' => '4',
                'name' => 'Rosales',
            ),
            108 => 
            array (
                'id' => 109,
                'province_id' => '4',
                'name' => ' San Carlos',
            ),
            109 => 
            array (
                'id' => 110,
                'province_id' => '4',
                'name' => 'San Fabian',
            ),
            110 => 
            array (
                'id' => 111,
                'province_id' => '4',
                'name' => 'San Jacinto',
            ),
            111 => 
            array (
                'id' => 112,
                'province_id' => '4',
                'name' => 'San Manuel',
            ),
            112 => 
            array (
                'id' => 113,
                'province_id' => '4',
                'name' => 'San Nicolas',
            ),
            113 => 
            array (
                'id' => 114,
                'province_id' => '4',
                'name' => 'San Quintin',
            ),
            114 => 
            array (
                'id' => 115,
                'province_id' => '4',
                'name' => 'Santa Barbara',
            ),
            115 => 
            array (
                'id' => 116,
                'province_id' => '4',
                'name' => 'Santa Maria',
            ),
            116 => 
            array (
                'id' => 117,
                'province_id' => '4',
                'name' => 'Santo Tomas',
            ),
            117 => 
            array (
                'id' => 118,
                'province_id' => '4',
                'name' => 'Sison',
            ),
            118 => 
            array (
                'id' => 119,
                'province_id' => '4',
                'name' => 'Sual',
            ),
            119 => 
            array (
                'id' => 120,
                'province_id' => '4',
                'name' => 'Tayug',
            ),
            120 => 
            array (
                'id' => 121,
                'province_id' => '4',
                'name' => 'Umingan',
            ),
            121 => 
            array (
                'id' => 122,
                'province_id' => '4',
                'name' => 'Urbiztondo',
            ),
            122 => 
            array (
                'id' => 123,
                'province_id' => '4',
                'name' => ' Urdaneta',
            ),
            123 => 
            array (
                'id' => 124,
                'province_id' => '4',
                'name' => 'Villasis',
            ),
            124 => 
            array (
                'id' => 125,
                'province_id' => '4',
                'name' => 'Laoac',
            ),
            125 => 
            array (
                'id' => 126,
                'province_id' => '5',
                'name' => 'Basco',
            ),
            126 => 
            array (
                'id' => 127,
                'province_id' => '5',
                'name' => 'Itbayat',
            ),
            127 => 
            array (
                'id' => 128,
                'province_id' => '5',
                'name' => 'Ivana',
            ),
            128 => 
            array (
                'id' => 129,
                'province_id' => '5',
                'name' => 'Mahatao',
            ),
            129 => 
            array (
                'id' => 130,
                'province_id' => '5',
                'name' => 'Sabtang',
            ),
            130 => 
            array (
                'id' => 131,
                'province_id' => '5',
                'name' => 'Uyugan',
            ),
            131 => 
            array (
                'id' => 132,
                'province_id' => '6',
                'name' => 'Abulug',
            ),
            132 => 
            array (
                'id' => 133,
                'province_id' => '6',
                'name' => 'Alcala',
            ),
            133 => 
            array (
                'id' => 134,
                'province_id' => '6',
                'name' => 'Allacapan',
            ),
            134 => 
            array (
                'id' => 135,
                'province_id' => '6',
                'name' => 'Amulung',
            ),
            135 => 
            array (
                'id' => 136,
                'province_id' => '6',
                'name' => 'Aparri',
            ),
            136 => 
            array (
                'id' => 137,
                'province_id' => '6',
                'name' => 'Baggao',
            ),
            137 => 
            array (
                'id' => 138,
                'province_id' => '6',
                'name' => 'Ballesteros',
            ),
            138 => 
            array (
                'id' => 139,
                'province_id' => '6',
                'name' => 'Buguey',
            ),
            139 => 
            array (
                'id' => 140,
                'province_id' => '6',
                'name' => 'Calayan',
            ),
            140 => 
            array (
                'id' => 141,
                'province_id' => '6',
                'name' => 'Camalaniugan',
            ),
            141 => 
            array (
                'id' => 142,
                'province_id' => '6',
                'name' => 'Claveria',
            ),
            142 => 
            array (
                'id' => 143,
                'province_id' => '6',
                'name' => 'Enrile',
            ),
            143 => 
            array (
                'id' => 144,
                'province_id' => '6',
                'name' => 'Gattaran',
            ),
            144 => 
            array (
                'id' => 145,
                'province_id' => '6',
                'name' => 'Gonzaga',
            ),
            145 => 
            array (
                'id' => 146,
                'province_id' => '6',
                'name' => 'Iguig',
            ),
            146 => 
            array (
                'id' => 147,
                'province_id' => '6',
                'name' => 'Lal-Lo',
            ),
            147 => 
            array (
                'id' => 148,
                'province_id' => '6',
                'name' => 'Lasam',
            ),
            148 => 
            array (
                'id' => 149,
                'province_id' => '6',
                'name' => 'Pamplona',
            ),
            149 => 
            array (
                'id' => 150,
                'province_id' => '6',
                'name' => 'Peñablanca',
            ),
            150 => 
            array (
                'id' => 151,
                'province_id' => '6',
                'name' => 'Piat',
            ),
            151 => 
            array (
                'id' => 152,
                'province_id' => '6',
                'name' => 'Rizal',
            ),
            152 => 
            array (
                'id' => 153,
                'province_id' => '6',
                'name' => 'Sanchez-Mira',
            ),
            153 => 
            array (
                'id' => 154,
                'province_id' => '6',
                'name' => 'Santa Ana',
            ),
            154 => 
            array (
                'id' => 155,
                'province_id' => '6',
                'name' => 'Santa Praxedes',
            ),
            155 => 
            array (
                'id' => 156,
                'province_id' => '6',
                'name' => 'Santa Teresita',
            ),
            156 => 
            array (
                'id' => 157,
                'province_id' => '6',
            'name' => 'Santo Niño (Faire)',
            ),
            157 => 
            array (
                'id' => 158,
                'province_id' => '6',
                'name' => 'Solana',
            ),
            158 => 
            array (
                'id' => 159,
                'province_id' => '6',
                'name' => 'Tuao',
            ),
            159 => 
            array (
                'id' => 160,
                'province_id' => '6',
                'name' => 'Tuguegarao City',
            ),
            160 => 
            array (
                'id' => 161,
                'province_id' => '7',
                'name' => 'Alicia',
            ),
            161 => 
            array (
                'id' => 162,
                'province_id' => '7',
                'name' => 'Angadanan',
            ),
            162 => 
            array (
                'id' => 163,
                'province_id' => '7',
                'name' => 'Aurora',
            ),
            163 => 
            array (
                'id' => 164,
                'province_id' => '7',
                'name' => 'Benito Soliven',
            ),
            164 => 
            array (
                'id' => 165,
                'province_id' => '7',
                'name' => 'Burgos',
            ),
            165 => 
            array (
                'id' => 166,
                'province_id' => '7',
                'name' => 'Cabagan',
            ),
            166 => 
            array (
                'id' => 167,
                'province_id' => '7',
                'name' => 'Cabatuan',
            ),
            167 => 
            array (
                'id' => 168,
                'province_id' => '7',
                'name' => ' Cauayan',
            ),
            168 => 
            array (
                'id' => 169,
                'province_id' => '7',
                'name' => 'Cordon',
            ),
            169 => 
            array (
                'id' => 170,
                'province_id' => '7',
                'name' => 'Dinapigue',
            ),
            170 => 
            array (
                'id' => 171,
                'province_id' => '7',
                'name' => 'Divilacan',
            ),
            171 => 
            array (
                'id' => 172,
                'province_id' => '7',
                'name' => 'Echague',
            ),
            172 => 
            array (
                'id' => 173,
                'province_id' => '7',
                'name' => 'Gamu',
            ),
            173 => 
            array (
                'id' => 174,
                'province_id' => '7',
                'name' => ' Ilagan',
            ),
            174 => 
            array (
                'id' => 175,
                'province_id' => '7',
                'name' => 'Jones',
            ),
            175 => 
            array (
                'id' => 176,
                'province_id' => '7',
                'name' => 'Luna',
            ),
            176 => 
            array (
                'id' => 177,
                'province_id' => '7',
                'name' => 'Maconacon',
            ),
            177 => 
            array (
                'id' => 178,
                'province_id' => '7',
            'name' => 'Delfin Albano (Magsaysay)',
            ),
            178 => 
            array (
                'id' => 179,
                'province_id' => '7',
                'name' => 'Mallig',
            ),
            179 => 
            array (
                'id' => 180,
                'province_id' => '7',
                'name' => 'Naguilian',
            ),
            180 => 
            array (
                'id' => 181,
                'province_id' => '7',
                'name' => 'Palanan',
            ),
            181 => 
            array (
                'id' => 182,
                'province_id' => '7',
                'name' => 'Quezon',
            ),
            182 => 
            array (
                'id' => 183,
                'province_id' => '7',
                'name' => 'Quirino',
            ),
            183 => 
            array (
                'id' => 184,
                'province_id' => '7',
                'name' => 'Ramon',
            ),
            184 => 
            array (
                'id' => 185,
                'province_id' => '7',
                'name' => 'Reina Mercedes',
            ),
            185 => 
            array (
                'id' => 186,
                'province_id' => '7',
                'name' => 'Roxas',
            ),
            186 => 
            array (
                'id' => 187,
                'province_id' => '7',
                'name' => 'San Agustin',
            ),
            187 => 
            array (
                'id' => 188,
                'province_id' => '7',
                'name' => 'San Guillermo',
            ),
            188 => 
            array (
                'id' => 189,
                'province_id' => '7',
                'name' => 'San Isidro',
            ),
            189 => 
            array (
                'id' => 190,
                'province_id' => '7',
                'name' => 'San Manuel',
            ),
            190 => 
            array (
                'id' => 191,
                'province_id' => '7',
                'name' => 'San Mariano',
            ),
            191 => 
            array (
                'id' => 192,
                'province_id' => '7',
                'name' => 'San Mateo',
            ),
            192 => 
            array (
                'id' => 193,
                'province_id' => '7',
                'name' => 'San Pablo',
            ),
            193 => 
            array (
                'id' => 194,
                'province_id' => '7',
                'name' => 'Santa Maria',
            ),
            194 => 
            array (
                'id' => 195,
                'province_id' => '7',
                'name' => ' Santiago',
            ),
            195 => 
            array (
                'id' => 196,
                'province_id' => '7',
                'name' => 'Santo Tomas',
            ),
            196 => 
            array (
                'id' => 197,
                'province_id' => '7',
                'name' => 'Tumauini',
            ),
            197 => 
            array (
                'id' => 198,
                'province_id' => '8',
                'name' => 'Ambaguio',
            ),
            198 => 
            array (
                'id' => 199,
                'province_id' => '8',
                'name' => 'Aritao',
            ),
            199 => 
            array (
                'id' => 200,
                'province_id' => '8',
                'name' => 'Bagabag',
            ),
            200 => 
            array (
                'id' => 201,
                'province_id' => '8',
                'name' => 'Bambang',
            ),
            201 => 
            array (
                'id' => 202,
                'province_id' => '8',
                'name' => 'Bayombong',
            ),
            202 => 
            array (
                'id' => 203,
                'province_id' => '8',
                'name' => 'Diadi',
            ),
            203 => 
            array (
                'id' => 204,
                'province_id' => '8',
                'name' => 'Dupax Del Norte',
            ),
            204 => 
            array (
                'id' => 205,
                'province_id' => '8',
                'name' => 'Dupax Del Sur',
            ),
            205 => 
            array (
                'id' => 206,
                'province_id' => '8',
                'name' => 'Kasibu',
            ),
            206 => 
            array (
                'id' => 207,
                'province_id' => '8',
                'name' => 'Kayapa',
            ),
            207 => 
            array (
                'id' => 208,
                'province_id' => '8',
                'name' => 'Quezon',
            ),
            208 => 
            array (
                'id' => 209,
                'province_id' => '8',
                'name' => 'Santa Fe',
            ),
            209 => 
            array (
                'id' => 210,
                'province_id' => '8',
                'name' => 'Solano',
            ),
            210 => 
            array (
                'id' => 211,
                'province_id' => '8',
                'name' => 'Villaverde',
            ),
            211 => 
            array (
                'id' => 212,
                'province_id' => '8',
                'name' => 'Alfonso Castaneda',
            ),
            212 => 
            array (
                'id' => 213,
                'province_id' => '9',
                'name' => 'Aglipay',
            ),
            213 => 
            array (
                'id' => 214,
                'province_id' => '9',
                'name' => 'Cabarroguis',
            ),
            214 => 
            array (
                'id' => 215,
                'province_id' => '9',
                'name' => 'Diffun',
            ),
            215 => 
            array (
                'id' => 216,
                'province_id' => '9',
                'name' => 'Maddela',
            ),
            216 => 
            array (
                'id' => 217,
                'province_id' => '9',
                'name' => 'Saguday',
            ),
            217 => 
            array (
                'id' => 218,
                'province_id' => '9',
                'name' => 'Nagtipunan',
            ),
            218 => 
            array (
                'id' => 219,
                'province_id' => '10',
                'name' => 'Abucay',
            ),
            219 => 
            array (
                'id' => 220,
                'province_id' => '10',
                'name' => 'Bagac',
            ),
            220 => 
            array (
                'id' => 221,
                'province_id' => '10',
                'name' => ' Balanga',
            ),
            221 => 
            array (
                'id' => 222,
                'province_id' => '10',
                'name' => 'Dinalupihan',
            ),
            222 => 
            array (
                'id' => 223,
                'province_id' => '10',
                'name' => 'Hermosa',
            ),
            223 => 
            array (
                'id' => 224,
                'province_id' => '10',
                'name' => 'Limay',
            ),
            224 => 
            array (
                'id' => 225,
                'province_id' => '10',
                'name' => 'Mariveles',
            ),
            225 => 
            array (
                'id' => 226,
                'province_id' => '10',
                'name' => 'Morong',
            ),
            226 => 
            array (
                'id' => 227,
                'province_id' => '10',
                'name' => 'Orani',
            ),
            227 => 
            array (
                'id' => 228,
                'province_id' => '10',
                'name' => 'Orion',
            ),
            228 => 
            array (
                'id' => 229,
                'province_id' => '10',
                'name' => 'Pilar',
            ),
            229 => 
            array (
                'id' => 230,
                'province_id' => '10',
                'name' => 'Samal',
            ),
            230 => 
            array (
                'id' => 231,
                'province_id' => '11',
                'name' => 'Angat',
            ),
            231 => 
            array (
                'id' => 232,
                'province_id' => '11',
            'name' => 'Balagtas (Bigaa)',
            ),
            232 => 
            array (
                'id' => 233,
                'province_id' => '11',
                'name' => 'Baliuag',
            ),
            233 => 
            array (
                'id' => 234,
                'province_id' => '11',
                'name' => 'Bocaue',
            ),
            234 => 
            array (
                'id' => 235,
                'province_id' => '11',
                'name' => 'Bulacan',
            ),
            235 => 
            array (
                'id' => 236,
                'province_id' => '11',
                'name' => 'Bustos',
            ),
            236 => 
            array (
                'id' => 237,
                'province_id' => '11',
                'name' => 'Calumpit',
            ),
            237 => 
            array (
                'id' => 238,
                'province_id' => '11',
                'name' => 'Guiguinto',
            ),
            238 => 
            array (
                'id' => 239,
                'province_id' => '11',
                'name' => 'Hagonoy',
            ),
            239 => 
            array (
                'id' => 240,
                'province_id' => '11',
                'name' => ' Malolos',
            ),
            240 => 
            array (
                'id' => 241,
                'province_id' => '11',
                'name' => 'Marilao',
            ),
            241 => 
            array (
                'id' => 242,
                'province_id' => '11',
                'name' => ' Meycauayan',
            ),
            242 => 
            array (
                'id' => 243,
                'province_id' => '11',
                'name' => 'Norzagaray',
            ),
            243 => 
            array (
                'id' => 244,
                'province_id' => '11',
                'name' => 'Obando',
            ),
            244 => 
            array (
                'id' => 245,
                'province_id' => '11',
                'name' => 'Pandi',
            ),
            245 => 
            array (
                'id' => 246,
                'province_id' => '11',
                'name' => 'Paombong',
            ),
            246 => 
            array (
                'id' => 247,
                'province_id' => '11',
                'name' => 'Plaridel',
            ),
            247 => 
            array (
                'id' => 248,
                'province_id' => '11',
                'name' => 'Pulilan',
            ),
            248 => 
            array (
                'id' => 249,
                'province_id' => '11',
                'name' => 'San Ildefonso',
            ),
            249 => 
            array (
                'id' => 250,
                'province_id' => '11',
                'name' => ' San Jose Del Monte',
            ),
            250 => 
            array (
                'id' => 251,
                'province_id' => '11',
                'name' => 'San Miguel',
            ),
            251 => 
            array (
                'id' => 252,
                'province_id' => '11',
                'name' => 'San Rafael',
            ),
            252 => 
            array (
                'id' => 253,
                'province_id' => '11',
                'name' => 'Santa Maria',
            ),
            253 => 
            array (
                'id' => 254,
                'province_id' => '11',
                'name' => 'Doña Remedios Trinidad',
            ),
            254 => 
            array (
                'id' => 255,
                'province_id' => '12',
                'name' => 'Aliaga',
            ),
            255 => 
            array (
                'id' => 256,
                'province_id' => '12',
                'name' => 'Bongabon',
            ),
            256 => 
            array (
                'id' => 257,
                'province_id' => '12',
                'name' => ' Cabanatuan',
            ),
            257 => 
            array (
                'id' => 258,
                'province_id' => '12',
                'name' => 'Cabiao',
            ),
            258 => 
            array (
                'id' => 259,
                'province_id' => '12',
                'name' => 'Carranglan',
            ),
            259 => 
            array (
                'id' => 260,
                'province_id' => '12',
                'name' => 'Cuyapo',
            ),
            260 => 
            array (
                'id' => 261,
                'province_id' => '12',
            'name' => 'Gabaldon (Bitulok & Sabani)',
            ),
            261 => 
            array (
                'id' => 262,
                'province_id' => '12',
                'name' => ' Gapan',
            ),
            262 => 
            array (
                'id' => 263,
                'province_id' => '12',
                'name' => 'General Mamerto Natividad',
            ),
            263 => 
            array (
                'id' => 264,
                'province_id' => '12',
            'name' => 'General Tinio (Papaya)',
            ),
            264 => 
            array (
                'id' => 265,
                'province_id' => '12',
                'name' => 'Guimba',
            ),
            265 => 
            array (
                'id' => 266,
                'province_id' => '12',
                'name' => 'Jaen',
            ),
            266 => 
            array (
                'id' => 267,
                'province_id' => '12',
                'name' => 'Laur',
            ),
            267 => 
            array (
                'id' => 268,
                'province_id' => '12',
                'name' => 'Licab',
            ),
            268 => 
            array (
                'id' => 269,
                'province_id' => '12',
                'name' => 'Llanera',
            ),
            269 => 
            array (
                'id' => 270,
                'province_id' => '12',
                'name' => 'Lupao',
            ),
            270 => 
            array (
                'id' => 271,
                'province_id' => '12',
                'name' => 'Science  Muñoz',
            ),
            271 => 
            array (
                'id' => 272,
                'province_id' => '12',
                'name' => 'Nampicuan',
            ),
            272 => 
            array (
                'id' => 273,
                'province_id' => '12',
                'name' => ' Palayan',
            ),
            273 => 
            array (
                'id' => 274,
                'province_id' => '12',
                'name' => 'Pantabangan',
            ),
            274 => 
            array (
                'id' => 275,
                'province_id' => '12',
                'name' => 'Peñaranda',
            ),
            275 => 
            array (
                'id' => 276,
                'province_id' => '12',
                'name' => 'Quezon',
            ),
            276 => 
            array (
                'id' => 277,
                'province_id' => '12',
                'name' => 'Rizal',
            ),
            277 => 
            array (
                'id' => 278,
                'province_id' => '12',
                'name' => 'San Antonio',
            ),
            278 => 
            array (
                'id' => 279,
                'province_id' => '12',
                'name' => 'San Isidro',
            ),
            279 => 
            array (
                'id' => 280,
                'province_id' => '12',
                'name' => 'San Jose City',
            ),
            280 => 
            array (
                'id' => 281,
                'province_id' => '12',
                'name' => 'San Leonardo',
            ),
            281 => 
            array (
                'id' => 282,
                'province_id' => '12',
                'name' => 'Santa Rosa',
            ),
            282 => 
            array (
                'id' => 283,
                'province_id' => '12',
                'name' => 'Santo Domingo',
            ),
            283 => 
            array (
                'id' => 284,
                'province_id' => '12',
                'name' => 'Talavera',
            ),
            284 => 
            array (
                'id' => 285,
                'province_id' => '12',
                'name' => 'Talugtug',
            ),
            285 => 
            array (
                'id' => 286,
                'province_id' => '12',
                'name' => 'Zaragoza',
            ),
            286 => 
            array (
                'id' => 287,
                'province_id' => '13',
                'name' => ' Angeles',
            ),
            287 => 
            array (
                'id' => 288,
                'province_id' => '13',
                'name' => 'Apalit',
            ),
            288 => 
            array (
                'id' => 289,
                'province_id' => '13',
                'name' => 'Arayat',
            ),
            289 => 
            array (
                'id' => 290,
                'province_id' => '13',
                'name' => 'Bacolor',
            ),
            290 => 
            array (
                'id' => 291,
                'province_id' => '13',
                'name' => 'Candaba',
            ),
            291 => 
            array (
                'id' => 292,
                'province_id' => '13',
                'name' => 'Floridablanca',
            ),
            292 => 
            array (
                'id' => 293,
                'province_id' => '13',
                'name' => 'Guagua',
            ),
            293 => 
            array (
                'id' => 294,
                'province_id' => '13',
                'name' => 'Lubao',
            ),
            294 => 
            array (
                'id' => 295,
                'province_id' => '13',
                'name' => 'Mabalacat City',
            ),
            295 => 
            array (
                'id' => 296,
                'province_id' => '13',
                'name' => 'Macabebe',
            ),
            296 => 
            array (
                'id' => 297,
                'province_id' => '13',
                'name' => 'Magalang',
            ),
            297 => 
            array (
                'id' => 298,
                'province_id' => '13',
                'name' => 'Masantol',
            ),
            298 => 
            array (
                'id' => 299,
                'province_id' => '13',
                'name' => 'Mexico',
            ),
            299 => 
            array (
                'id' => 300,
                'province_id' => '13',
                'name' => 'Minalin',
            ),
            300 => 
            array (
                'id' => 301,
                'province_id' => '13',
                'name' => 'Porac',
            ),
            301 => 
            array (
                'id' => 302,
                'province_id' => '13',
                'name' => ' San Fernando',
            ),
            302 => 
            array (
                'id' => 303,
                'province_id' => '13',
                'name' => 'San Luis',
            ),
            303 => 
            array (
                'id' => 304,
                'province_id' => '13',
                'name' => 'San Simon',
            ),
            304 => 
            array (
                'id' => 305,
                'province_id' => '13',
                'name' => 'Santa Ana',
            ),
            305 => 
            array (
                'id' => 306,
                'province_id' => '13',
                'name' => 'Santa Rita',
            ),
            306 => 
            array (
                'id' => 307,
                'province_id' => '13',
                'name' => 'Santo Tomas',
            ),
            307 => 
            array (
                'id' => 308,
                'province_id' => '13',
            'name' => 'Sasmuan (Sexmoan)',
            ),
            308 => 
            array (
                'id' => 309,
                'province_id' => '14',
                'name' => 'Anao',
            ),
            309 => 
            array (
                'id' => 310,
                'province_id' => '14',
                'name' => 'Bamban',
            ),
            310 => 
            array (
                'id' => 311,
                'province_id' => '14',
                'name' => 'Camiling',
            ),
            311 => 
            array (
                'id' => 312,
                'province_id' => '14',
                'name' => 'Capas',
            ),
            312 => 
            array (
                'id' => 313,
                'province_id' => '14',
                'name' => 'Concepcion',
            ),
            313 => 
            array (
                'id' => 314,
                'province_id' => '14',
                'name' => 'Gerona',
            ),
            314 => 
            array (
                'id' => 315,
                'province_id' => '14',
                'name' => 'La Paz',
            ),
            315 => 
            array (
                'id' => 316,
                'province_id' => '14',
                'name' => 'Mayantoc',
            ),
            316 => 
            array (
                'id' => 317,
                'province_id' => '14',
                'name' => 'Moncada',
            ),
            317 => 
            array (
                'id' => 318,
                'province_id' => '14',
                'name' => 'Paniqui',
            ),
            318 => 
            array (
                'id' => 319,
                'province_id' => '14',
                'name' => 'Pura',
            ),
            319 => 
            array (
                'id' => 320,
                'province_id' => '14',
                'name' => 'Ramos',
            ),
            320 => 
            array (
                'id' => 321,
                'province_id' => '14',
                'name' => 'San Clemente',
            ),
            321 => 
            array (
                'id' => 322,
                'province_id' => '14',
                'name' => 'San Manuel',
            ),
            322 => 
            array (
                'id' => 323,
                'province_id' => '14',
                'name' => 'Santa Ignacia',
            ),
            323 => 
            array (
                'id' => 324,
                'province_id' => '14',
                'name' => ' Tarlac',
            ),
            324 => 
            array (
                'id' => 325,
                'province_id' => '14',
                'name' => 'Victoria',
            ),
            325 => 
            array (
                'id' => 326,
                'province_id' => '14',
                'name' => 'San Jose',
            ),
            326 => 
            array (
                'id' => 327,
                'province_id' => '15',
                'name' => 'Botolan',
            ),
            327 => 
            array (
                'id' => 328,
                'province_id' => '15',
                'name' => 'Cabangan',
            ),
            328 => 
            array (
                'id' => 329,
                'province_id' => '15',
                'name' => 'Candelaria',
            ),
            329 => 
            array (
                'id' => 330,
                'province_id' => '15',
                'name' => 'Castillejos',
            ),
            330 => 
            array (
                'id' => 331,
                'province_id' => '15',
                'name' => 'Iba',
            ),
            331 => 
            array (
                'id' => 332,
                'province_id' => '15',
                'name' => 'Masinloc',
            ),
            332 => 
            array (
                'id' => 333,
                'province_id' => '15',
                'name' => ' Olongapo',
            ),
            333 => 
            array (
                'id' => 334,
                'province_id' => '15',
                'name' => 'Palauig',
            ),
            334 => 
            array (
                'id' => 335,
                'province_id' => '15',
                'name' => 'San Antonio',
            ),
            335 => 
            array (
                'id' => 336,
                'province_id' => '15',
                'name' => 'San Felipe',
            ),
            336 => 
            array (
                'id' => 337,
                'province_id' => '15',
                'name' => 'San Marcelino',
            ),
            337 => 
            array (
                'id' => 338,
                'province_id' => '15',
                'name' => 'San Narciso',
            ),
            338 => 
            array (
                'id' => 339,
                'province_id' => '15',
                'name' => 'Santa Cruz',
            ),
            339 => 
            array (
                'id' => 340,
                'province_id' => '15',
                'name' => 'Subic',
            ),
            340 => 
            array (
                'id' => 341,
                'province_id' => '16',
                'name' => 'Baler',
            ),
            341 => 
            array (
                'id' => 342,
                'province_id' => '16',
                'name' => 'Casiguran',
            ),
            342 => 
            array (
                'id' => 343,
                'province_id' => '16',
                'name' => 'Dilasag',
            ),
            343 => 
            array (
                'id' => 344,
                'province_id' => '16',
                'name' => 'Dinalungan',
            ),
            344 => 
            array (
                'id' => 345,
                'province_id' => '16',
                'name' => 'Dingalan',
            ),
            345 => 
            array (
                'id' => 346,
                'province_id' => '16',
                'name' => 'Dipaculao',
            ),
            346 => 
            array (
                'id' => 347,
                'province_id' => '16',
                'name' => 'Maria Aurora',
            ),
            347 => 
            array (
                'id' => 348,
                'province_id' => '16',
                'name' => 'San Luis',
            ),
            348 => 
            array (
                'id' => 349,
                'province_id' => '17',
                'name' => 'Agoncillo',
            ),
            349 => 
            array (
                'id' => 350,
                'province_id' => '17',
                'name' => 'Alitagtag',
            ),
            350 => 
            array (
                'id' => 351,
                'province_id' => '17',
                'name' => 'Balayan',
            ),
            351 => 
            array (
                'id' => 352,
                'province_id' => '17',
                'name' => 'Balete',
            ),
            352 => 
            array (
                'id' => 353,
                'province_id' => '17',
                'name' => 'Batangas City',
            ),
            353 => 
            array (
                'id' => 354,
                'province_id' => '17',
                'name' => 'Bauan',
            ),
            354 => 
            array (
                'id' => 355,
                'province_id' => '17',
                'name' => 'Calaca',
            ),
            355 => 
            array (
                'id' => 356,
                'province_id' => '17',
                'name' => 'Calatagan',
            ),
            356 => 
            array (
                'id' => 357,
                'province_id' => '17',
                'name' => 'Cuenca',
            ),
            357 => 
            array (
                'id' => 358,
                'province_id' => '17',
                'name' => 'Ibaan',
            ),
            358 => 
            array (
                'id' => 359,
                'province_id' => '17',
                'name' => 'Laurel',
            ),
            359 => 
            array (
                'id' => 360,
                'province_id' => '17',
                'name' => 'Lemery',
            ),
            360 => 
            array (
                'id' => 361,
                'province_id' => '17',
                'name' => 'Lian',
            ),
            361 => 
            array (
                'id' => 362,
                'province_id' => '17',
                'name' => ' Lipa',
            ),
            362 => 
            array (
                'id' => 363,
                'province_id' => '17',
                'name' => 'Lobo',
            ),
            363 => 
            array (
                'id' => 364,
                'province_id' => '17',
                'name' => 'Mabini',
            ),
            364 => 
            array (
                'id' => 365,
                'province_id' => '17',
                'name' => 'Malvar',
            ),
            365 => 
            array (
                'id' => 366,
                'province_id' => '17',
                'name' => 'Mataasnakahoy',
            ),
            366 => 
            array (
                'id' => 367,
                'province_id' => '17',
                'name' => 'Nasugbu',
            ),
            367 => 
            array (
                'id' => 368,
                'province_id' => '17',
                'name' => 'Padre Garcia',
            ),
            368 => 
            array (
                'id' => 369,
                'province_id' => '17',
                'name' => 'Rosario',
            ),
            369 => 
            array (
                'id' => 370,
                'province_id' => '17',
                'name' => 'San Jose',
            ),
            370 => 
            array (
                'id' => 371,
                'province_id' => '17',
                'name' => 'San Juan',
            ),
            371 => 
            array (
                'id' => 372,
                'province_id' => '17',
                'name' => 'San Luis',
            ),
            372 => 
            array (
                'id' => 373,
                'province_id' => '17',
                'name' => 'San Nicolas',
            ),
            373 => 
            array (
                'id' => 374,
                'province_id' => '17',
                'name' => 'San Pascual',
            ),
            374 => 
            array (
                'id' => 375,
                'province_id' => '17',
                'name' => 'Santa Teresita',
            ),
            375 => 
            array (
                'id' => 376,
                'province_id' => '17',
                'name' => 'Santo Tomas',
            ),
            376 => 
            array (
                'id' => 377,
                'province_id' => '17',
                'name' => 'Taal',
            ),
            377 => 
            array (
                'id' => 378,
                'province_id' => '17',
                'name' => 'Talisay',
            ),
            378 => 
            array (
                'id' => 379,
                'province_id' => '17',
                'name' => ' Tanauan',
            ),
            379 => 
            array (
                'id' => 380,
                'province_id' => '17',
                'name' => 'Taysan',
            ),
            380 => 
            array (
                'id' => 381,
                'province_id' => '17',
                'name' => 'Tingloy',
            ),
            381 => 
            array (
                'id' => 382,
                'province_id' => '17',
                'name' => 'Tuy',
            ),
            382 => 
            array (
                'id' => 383,
                'province_id' => '18',
                'name' => 'Alfonso',
            ),
            383 => 
            array (
                'id' => 384,
                'province_id' => '18',
                'name' => 'Amadeo',
            ),
            384 => 
            array (
                'id' => 385,
                'province_id' => '18',
                'name' => ' Bacoor',
            ),
            385 => 
            array (
                'id' => 386,
                'province_id' => '18',
                'name' => 'Carmona',
            ),
            386 => 
            array (
                'id' => 387,
                'province_id' => '18',
                'name' => ' Cavite',
            ),
            387 => 
            array (
                'id' => 388,
                'province_id' => '18',
                'name' => ' Dasmariñas',
            ),
            388 => 
            array (
                'id' => 389,
                'province_id' => '18',
                'name' => 'General Emilio Aguinaldo',
            ),
            389 => 
            array (
                'id' => 390,
                'province_id' => '18',
                'name' => ' General Trias',
            ),
            390 => 
            array (
                'id' => 391,
                'province_id' => '18',
                'name' => ' Imus',
            ),
            391 => 
            array (
                'id' => 392,
                'province_id' => '18',
                'name' => 'Indang',
            ),
            392 => 
            array (
                'id' => 393,
                'province_id' => '18',
                'name' => 'Kawit',
            ),
            393 => 
            array (
                'id' => 394,
                'province_id' => '18',
                'name' => 'Magallanes',
            ),
            394 => 
            array (
                'id' => 395,
                'province_id' => '18',
                'name' => 'Maragondon',
            ),
            395 => 
            array (
                'id' => 396,
                'province_id' => '18',
            'name' => 'Mendez (Mendez-Nuñez)',
            ),
            396 => 
            array (
                'id' => 397,
                'province_id' => '18',
                'name' => 'Naic',
            ),
            397 => 
            array (
                'id' => 398,
                'province_id' => '18',
                'name' => 'Noveleta',
            ),
            398 => 
            array (
                'id' => 399,
                'province_id' => '18',
                'name' => 'Rosario',
            ),
            399 => 
            array (
                'id' => 400,
                'province_id' => '18',
                'name' => 'Silang',
            ),
            400 => 
            array (
                'id' => 401,
                'province_id' => '18',
                'name' => ' Tagaytay',
            ),
            401 => 
            array (
                'id' => 402,
                'province_id' => '18',
                'name' => 'Tanza',
            ),
            402 => 
            array (
                'id' => 403,
                'province_id' => '18',
                'name' => 'Ternate',
            ),
            403 => 
            array (
                'id' => 404,
                'province_id' => '18',
                'name' => ' Trece Martires',
            ),
            404 => 
            array (
                'id' => 405,
                'province_id' => '18',
                'name' => 'Gen. Mariano Alvarez',
            ),
            405 => 
            array (
                'id' => 406,
                'province_id' => '19',
                'name' => 'Alaminos',
            ),
            406 => 
            array (
                'id' => 407,
                'province_id' => '19',
                'name' => 'Bay',
            ),
            407 => 
            array (
                'id' => 408,
                'province_id' => '19',
                'name' => ' Biñan',
            ),
            408 => 
            array (
                'id' => 409,
                'province_id' => '19',
                'name' => ' Cabuyao',
            ),
            409 => 
            array (
                'id' => 410,
                'province_id' => '19',
                'name' => ' Calamba',
            ),
            410 => 
            array (
                'id' => 411,
                'province_id' => '19',
                'name' => 'Calauan',
            ),
            411 => 
            array (
                'id' => 412,
                'province_id' => '19',
                'name' => 'Cavinti',
            ),
            412 => 
            array (
                'id' => 413,
                'province_id' => '19',
                'name' => 'Famy',
            ),
            413 => 
            array (
                'id' => 414,
                'province_id' => '19',
                'name' => 'Kalayaan',
            ),
            414 => 
            array (
                'id' => 415,
                'province_id' => '19',
                'name' => 'Liliw',
            ),
            415 => 
            array (
                'id' => 416,
                'province_id' => '19',
                'name' => 'Los Baños',
            ),
            416 => 
            array (
                'id' => 417,
                'province_id' => '19',
                'name' => 'Luisiana',
            ),
            417 => 
            array (
                'id' => 418,
                'province_id' => '19',
                'name' => 'Lumban',
            ),
            418 => 
            array (
                'id' => 419,
                'province_id' => '19',
                'name' => 'Mabitac',
            ),
            419 => 
            array (
                'id' => 420,
                'province_id' => '19',
                'name' => 'Magdalena',
            ),
            420 => 
            array (
                'id' => 421,
                'province_id' => '19',
                'name' => 'Majayjay',
            ),
            421 => 
            array (
                'id' => 422,
                'province_id' => '19',
                'name' => 'Nagcarlan',
            ),
            422 => 
            array (
                'id' => 423,
                'province_id' => '19',
                'name' => 'Paete',
            ),
            423 => 
            array (
                'id' => 424,
                'province_id' => '19',
                'name' => 'Pagsanjan',
            ),
            424 => 
            array (
                'id' => 425,
                'province_id' => '19',
                'name' => 'Pakil',
            ),
            425 => 
            array (
                'id' => 426,
                'province_id' => '19',
                'name' => 'Pangil',
            ),
            426 => 
            array (
                'id' => 427,
                'province_id' => '19',
                'name' => 'Pila',
            ),
            427 => 
            array (
                'id' => 428,
                'province_id' => '19',
                'name' => 'Rizal',
            ),
            428 => 
            array (
                'id' => 429,
                'province_id' => '19',
                'name' => ' San Pablo',
            ),
            429 => 
            array (
                'id' => 430,
                'province_id' => '19',
                'name' => ' San Pedro',
            ),
            430 => 
            array (
                'id' => 431,
                'province_id' => '19',
                'name' => 'Santa Cruz',
            ),
            431 => 
            array (
                'id' => 432,
                'province_id' => '19',
                'name' => 'Santa Maria',
            ),
            432 => 
            array (
                'id' => 433,
                'province_id' => '19',
                'name' => ' Santa Rosa',
            ),
            433 => 
            array (
                'id' => 434,
                'province_id' => '19',
                'name' => 'Siniloan',
            ),
            434 => 
            array (
                'id' => 435,
                'province_id' => '19',
                'name' => 'Victoria',
            ),
            435 => 
            array (
                'id' => 436,
                'province_id' => '20',
                'name' => 'Agdangan',
            ),
            436 => 
            array (
                'id' => 437,
                'province_id' => '20',
                'name' => 'Alabat',
            ),
            437 => 
            array (
                'id' => 438,
                'province_id' => '20',
                'name' => 'Atimonan',
            ),
            438 => 
            array (
                'id' => 439,
                'province_id' => '20',
                'name' => 'Buenavista',
            ),
            439 => 
            array (
                'id' => 440,
                'province_id' => '20',
                'name' => 'Burdeos',
            ),
            440 => 
            array (
                'id' => 441,
                'province_id' => '20',
                'name' => 'Calauag',
            ),
            441 => 
            array (
                'id' => 442,
                'province_id' => '20',
                'name' => 'Candelaria',
            ),
            442 => 
            array (
                'id' => 443,
                'province_id' => '20',
                'name' => 'Catanauan',
            ),
            443 => 
            array (
                'id' => 444,
                'province_id' => '20',
                'name' => 'Dolores',
            ),
            444 => 
            array (
                'id' => 445,
                'province_id' => '20',
                'name' => 'General Luna',
            ),
            445 => 
            array (
                'id' => 446,
                'province_id' => '20',
                'name' => 'General Nakar',
            ),
            446 => 
            array (
                'id' => 447,
                'province_id' => '20',
                'name' => 'Guinayangan',
            ),
            447 => 
            array (
                'id' => 448,
                'province_id' => '20',
                'name' => 'Gumaca',
            ),
            448 => 
            array (
                'id' => 449,
                'province_id' => '20',
                'name' => 'Infanta',
            ),
            449 => 
            array (
                'id' => 450,
                'province_id' => '20',
                'name' => 'Jomalig',
            ),
            450 => 
            array (
                'id' => 451,
                'province_id' => '20',
                'name' => 'Lopez',
            ),
            451 => 
            array (
                'id' => 452,
                'province_id' => '20',
                'name' => 'Lucban',
            ),
            452 => 
            array (
                'id' => 453,
                'province_id' => '20',
                'name' => ' Lucena',
            ),
            453 => 
            array (
                'id' => 454,
                'province_id' => '20',
                'name' => 'Macalelon',
            ),
            454 => 
            array (
                'id' => 455,
                'province_id' => '20',
                'name' => 'Mauban',
            ),
            455 => 
            array (
                'id' => 456,
                'province_id' => '20',
                'name' => 'Mulanay',
            ),
            456 => 
            array (
                'id' => 457,
                'province_id' => '20',
                'name' => 'Padre Burgos',
            ),
            457 => 
            array (
                'id' => 458,
                'province_id' => '20',
                'name' => 'Pagbilao',
            ),
            458 => 
            array (
                'id' => 459,
                'province_id' => '20',
                'name' => 'Panukulan',
            ),
            459 => 
            array (
                'id' => 460,
                'province_id' => '20',
                'name' => 'Patnanungan',
            ),
            460 => 
            array (
                'id' => 461,
                'province_id' => '20',
                'name' => 'Perez',
            ),
            461 => 
            array (
                'id' => 462,
                'province_id' => '20',
                'name' => 'Pitogo',
            ),
            462 => 
            array (
                'id' => 463,
                'province_id' => '20',
                'name' => 'Plaridel',
            ),
            463 => 
            array (
                'id' => 464,
                'province_id' => '20',
                'name' => 'Polillo',
            ),
            464 => 
            array (
                'id' => 465,
                'province_id' => '20',
                'name' => 'Quezon',
            ),
            465 => 
            array (
                'id' => 466,
                'province_id' => '20',
                'name' => 'Real',
            ),
            466 => 
            array (
                'id' => 467,
                'province_id' => '20',
                'name' => 'Sampaloc',
            ),
            467 => 
            array (
                'id' => 468,
                'province_id' => '20',
                'name' => 'San Andres',
            ),
            468 => 
            array (
                'id' => 469,
                'province_id' => '20',
                'name' => 'San Antonio',
            ),
            469 => 
            array (
                'id' => 470,
                'province_id' => '20',
            'name' => 'San Francisco (Aurora)',
            ),
            470 => 
            array (
                'id' => 471,
                'province_id' => '20',
                'name' => 'San Narciso',
            ),
            471 => 
            array (
                'id' => 472,
                'province_id' => '20',
                'name' => 'Sariaya',
            ),
            472 => 
            array (
                'id' => 473,
                'province_id' => '20',
                'name' => 'Tagkawayan',
            ),
            473 => 
            array (
                'id' => 474,
                'province_id' => '20',
                'name' => ' Tayabas',
            ),
            474 => 
            array (
                'id' => 475,
                'province_id' => '20',
                'name' => 'Tiaong',
            ),
            475 => 
            array (
                'id' => 476,
                'province_id' => '20',
                'name' => 'Unisan',
            ),
            476 => 
            array (
                'id' => 477,
                'province_id' => '21',
                'name' => 'Angono',
            ),
            477 => 
            array (
                'id' => 478,
                'province_id' => '21',
                'name' => ' Antipolo',
            ),
            478 => 
            array (
                'id' => 479,
                'province_id' => '21',
                'name' => 'Baras',
            ),
            479 => 
            array (
                'id' => 480,
                'province_id' => '21',
                'name' => 'Binangonan',
            ),
            480 => 
            array (
                'id' => 481,
                'province_id' => '21',
                'name' => 'Cainta',
            ),
            481 => 
            array (
                'id' => 482,
                'province_id' => '21',
                'name' => 'Cardona',
            ),
            482 => 
            array (
                'id' => 483,
                'province_id' => '21',
                'name' => 'Jala-Jala',
            ),
            483 => 
            array (
                'id' => 484,
                'province_id' => '21',
            'name' => 'Rodriguez (Montalban)',
            ),
            484 => 
            array (
                'id' => 485,
                'province_id' => '21',
                'name' => 'Morong',
            ),
            485 => 
            array (
                'id' => 486,
                'province_id' => '21',
                'name' => 'Pililla',
            ),
            486 => 
            array (
                'id' => 487,
                'province_id' => '21',
                'name' => 'San Mateo',
            ),
            487 => 
            array (
                'id' => 488,
                'province_id' => '21',
                'name' => 'Tanay',
            ),
            488 => 
            array (
                'id' => 489,
                'province_id' => '21',
                'name' => 'Taytay',
            ),
            489 => 
            array (
                'id' => 490,
                'province_id' => '21',
                'name' => 'Teresa',
            ),
            490 => 
            array (
                'id' => 491,
                'province_id' => '22',
                'name' => 'Boac',
            ),
            491 => 
            array (
                'id' => 492,
                'province_id' => '22',
                'name' => 'Buenavista',
            ),
            492 => 
            array (
                'id' => 493,
                'province_id' => '22',
                'name' => 'Gasan',
            ),
            493 => 
            array (
                'id' => 494,
                'province_id' => '22',
                'name' => 'Mogpog',
            ),
            494 => 
            array (
                'id' => 495,
                'province_id' => '22',
                'name' => 'Santa Cruz',
            ),
            495 => 
            array (
                'id' => 496,
                'province_id' => '22',
                'name' => 'Torrijos',
            ),
            496 => 
            array (
                'id' => 497,
                'province_id' => '23',
                'name' => 'Abra De Ilog',
            ),
            497 => 
            array (
                'id' => 498,
                'province_id' => '23',
                'name' => 'Calintaan',
            ),
            498 => 
            array (
                'id' => 499,
                'province_id' => '23',
                'name' => 'Looc',
            ),
            499 => 
            array (
                'id' => 500,
                'province_id' => '23',
                'name' => 'Lubang',
            ),
        ));
        \DB::table('province_cities')->insert(array (
            0 => 
            array (
                'id' => 501,
                'province_id' => '23',
                'name' => 'Magsaysay',
            ),
            1 => 
            array (
                'id' => 502,
                'province_id' => '23',
                'name' => 'Mamburao',
            ),
            2 => 
            array (
                'id' => 503,
                'province_id' => '23',
                'name' => 'Paluan',
            ),
            3 => 
            array (
                'id' => 504,
                'province_id' => '23',
                'name' => 'Rizal',
            ),
            4 => 
            array (
                'id' => 505,
                'province_id' => '23',
                'name' => 'Sablayan',
            ),
            5 => 
            array (
                'id' => 506,
                'province_id' => '23',
                'name' => 'San Jose',
            ),
            6 => 
            array (
                'id' => 507,
                'province_id' => '23',
                'name' => 'Santa Cruz',
            ),
            7 => 
            array (
                'id' => 508,
                'province_id' => '24',
                'name' => 'Baco',
            ),
            8 => 
            array (
                'id' => 509,
                'province_id' => '24',
                'name' => 'Bansud',
            ),
            9 => 
            array (
                'id' => 510,
                'province_id' => '24',
                'name' => 'Bongabong',
            ),
            10 => 
            array (
                'id' => 511,
                'province_id' => '24',
            'name' => 'Bulalacao (San Pedro)',
            ),
            11 => 
            array (
                'id' => 512,
                'province_id' => '24',
                'name' => ' Calapan',
            ),
            12 => 
            array (
                'id' => 513,
                'province_id' => '24',
                'name' => 'Gloria',
            ),
            13 => 
            array (
                'id' => 514,
                'province_id' => '24',
                'name' => 'Mansalay',
            ),
            14 => 
            array (
                'id' => 515,
                'province_id' => '24',
                'name' => 'Naujan',
            ),
            15 => 
            array (
                'id' => 516,
                'province_id' => '24',
                'name' => 'Pinamalayan',
            ),
            16 => 
            array (
                'id' => 517,
                'province_id' => '24',
                'name' => 'Pola',
            ),
            17 => 
            array (
                'id' => 518,
                'province_id' => '24',
                'name' => 'Puerto Galera',
            ),
            18 => 
            array (
                'id' => 519,
                'province_id' => '24',
                'name' => 'Roxas',
            ),
            19 => 
            array (
                'id' => 520,
                'province_id' => '24',
                'name' => 'San Teodoro',
            ),
            20 => 
            array (
                'id' => 521,
                'province_id' => '24',
                'name' => 'Socorro',
            ),
            21 => 
            array (
                'id' => 522,
                'province_id' => '24',
                'name' => 'Victoria',
            ),
            22 => 
            array (
                'id' => 523,
                'province_id' => '25',
                'name' => 'Aborlan',
            ),
            23 => 
            array (
                'id' => 524,
                'province_id' => '25',
                'name' => 'Agutaya',
            ),
            24 => 
            array (
                'id' => 525,
                'province_id' => '25',
                'name' => 'Araceli',
            ),
            25 => 
            array (
                'id' => 526,
                'province_id' => '25',
                'name' => 'Balabac',
            ),
            26 => 
            array (
                'id' => 527,
                'province_id' => '25',
                'name' => 'Bataraza',
            ),
            27 => 
            array (
                'id' => 528,
                'province_id' => '25',
                'name' => 'Brooke\'S Point',
            ),
            28 => 
            array (
                'id' => 529,
                'province_id' => '25',
                'name' => 'Busuanga',
            ),
            29 => 
            array (
                'id' => 530,
                'province_id' => '25',
                'name' => 'Cagayancillo',
            ),
            30 => 
            array (
                'id' => 531,
                'province_id' => '25',
                'name' => 'Coron',
            ),
            31 => 
            array (
                'id' => 532,
                'province_id' => '25',
                'name' => 'Cuyo',
            ),
            32 => 
            array (
                'id' => 533,
                'province_id' => '25',
                'name' => 'Dumaran',
            ),
            33 => 
            array (
                'id' => 534,
                'province_id' => '25',
            'name' => 'El Nido (Bacuit)',
            ),
            34 => 
            array (
                'id' => 535,
                'province_id' => '25',
                'name' => 'Linapacan',
            ),
            35 => 
            array (
                'id' => 536,
                'province_id' => '25',
                'name' => 'Magsaysay',
            ),
            36 => 
            array (
                'id' => 537,
                'province_id' => '25',
                'name' => 'Narra',
            ),
            37 => 
            array (
                'id' => 538,
                'province_id' => '25',
                'name' => ' Puerto Princesa',
            ),
            38 => 
            array (
                'id' => 539,
                'province_id' => '25',
                'name' => 'Quezon',
            ),
            39 => 
            array (
                'id' => 540,
                'province_id' => '25',
                'name' => 'Roxas',
            ),
            40 => 
            array (
                'id' => 541,
                'province_id' => '25',
                'name' => 'San Vicente',
            ),
            41 => 
            array (
                'id' => 542,
                'province_id' => '25',
                'name' => 'Taytay',
            ),
            42 => 
            array (
                'id' => 543,
                'province_id' => '25',
                'name' => 'Kalayaan',
            ),
            43 => 
            array (
                'id' => 544,
                'province_id' => '25',
                'name' => 'Culion',
            ),
            44 => 
            array (
                'id' => 545,
                'province_id' => '25',
            'name' => 'Rizal (Marcos)',
            ),
            45 => 
            array (
                'id' => 546,
                'province_id' => '25',
                'name' => 'Sofronio Española',
            ),
            46 => 
            array (
                'id' => 547,
                'province_id' => '26',
                'name' => 'Alcantara',
            ),
            47 => 
            array (
                'id' => 548,
                'province_id' => '26',
                'name' => 'Banton',
            ),
            48 => 
            array (
                'id' => 549,
                'province_id' => '26',
                'name' => 'Cajidiocan',
            ),
            49 => 
            array (
                'id' => 550,
                'province_id' => '26',
                'name' => 'Calatrava',
            ),
            50 => 
            array (
                'id' => 551,
                'province_id' => '26',
                'name' => 'Concepcion',
            ),
            51 => 
            array (
                'id' => 552,
                'province_id' => '26',
                'name' => 'Corcuera',
            ),
            52 => 
            array (
                'id' => 553,
                'province_id' => '26',
                'name' => 'Looc',
            ),
            53 => 
            array (
                'id' => 554,
                'province_id' => '26',
                'name' => 'Magdiwang',
            ),
            54 => 
            array (
                'id' => 555,
                'province_id' => '26',
                'name' => 'Odiongan',
            ),
            55 => 
            array (
                'id' => 556,
                'province_id' => '26',
                'name' => 'Romblon',
            ),
            56 => 
            array (
                'id' => 557,
                'province_id' => '26',
                'name' => 'San Agustin',
            ),
            57 => 
            array (
                'id' => 558,
                'province_id' => '26',
                'name' => 'San Andres',
            ),
            58 => 
            array (
                'id' => 559,
                'province_id' => '26',
                'name' => 'San Fernando',
            ),
            59 => 
            array (
                'id' => 560,
                'province_id' => '26',
                'name' => 'San Jose',
            ),
            60 => 
            array (
                'id' => 561,
                'province_id' => '26',
                'name' => 'Santa Fe',
            ),
            61 => 
            array (
                'id' => 562,
                'province_id' => '26',
                'name' => 'Ferrol',
            ),
            62 => 
            array (
                'id' => 563,
                'province_id' => '26',
            'name' => 'Santa Maria (Imelda)',
            ),
            63 => 
            array (
                'id' => 564,
                'province_id' => '27',
                'name' => 'Bacacay',
            ),
            64 => 
            array (
                'id' => 565,
                'province_id' => '27',
                'name' => 'Camalig',
            ),
            65 => 
            array (
                'id' => 566,
                'province_id' => '27',
            'name' => 'Daraga (Locsin)',
            ),
            66 => 
            array (
                'id' => 567,
                'province_id' => '27',
                'name' => 'Guinobatan',
            ),
            67 => 
            array (
                'id' => 568,
                'province_id' => '27',
                'name' => 'Jovellar',
            ),
            68 => 
            array (
                'id' => 569,
                'province_id' => '27',
                'name' => ' Legazpi',
            ),
            69 => 
            array (
                'id' => 570,
                'province_id' => '27',
                'name' => 'Libon',
            ),
            70 => 
            array (
                'id' => 571,
                'province_id' => '27',
                'name' => ' Ligao',
            ),
            71 => 
            array (
                'id' => 572,
                'province_id' => '27',
                'name' => 'Malilipot',
            ),
            72 => 
            array (
                'id' => 573,
                'province_id' => '27',
                'name' => 'Malinao',
            ),
            73 => 
            array (
                'id' => 574,
                'province_id' => '27',
                'name' => 'Manito',
            ),
            74 => 
            array (
                'id' => 575,
                'province_id' => '27',
                'name' => 'Oas',
            ),
            75 => 
            array (
                'id' => 576,
                'province_id' => '27',
                'name' => 'Pio Duran',
            ),
            76 => 
            array (
                'id' => 577,
                'province_id' => '27',
                'name' => 'Polangui',
            ),
            77 => 
            array (
                'id' => 578,
                'province_id' => '27',
                'name' => 'Rapu-Rapu',
            ),
            78 => 
            array (
                'id' => 579,
                'province_id' => '27',
            'name' => 'Santo Domingo (Libog)',
            ),
            79 => 
            array (
                'id' => 580,
                'province_id' => '27',
                'name' => ' Tabaco',
            ),
            80 => 
            array (
                'id' => 581,
                'province_id' => '27',
                'name' => 'Tiwi',
            ),
            81 => 
            array (
                'id' => 582,
                'province_id' => '28',
                'name' => 'Basud',
            ),
            82 => 
            array (
                'id' => 583,
                'province_id' => '28',
                'name' => 'Capalonga',
            ),
            83 => 
            array (
                'id' => 584,
                'province_id' => '28',
                'name' => 'Daet',
            ),
            84 => 
            array (
                'id' => 585,
                'province_id' => '28',
            'name' => 'San Lorenzo Ruiz (Imelda)',
            ),
            85 => 
            array (
                'id' => 586,
                'province_id' => '28',
                'name' => 'Jose Panganiban',
            ),
            86 => 
            array (
                'id' => 587,
                'province_id' => '28',
                'name' => 'Labo',
            ),
            87 => 
            array (
                'id' => 588,
                'province_id' => '28',
                'name' => 'Mercedes',
            ),
            88 => 
            array (
                'id' => 589,
                'province_id' => '28',
                'name' => 'Paracale',
            ),
            89 => 
            array (
                'id' => 590,
                'province_id' => '28',
                'name' => 'San Vicente',
            ),
            90 => 
            array (
                'id' => 591,
                'province_id' => '28',
                'name' => 'Santa Elena',
            ),
            91 => 
            array (
                'id' => 592,
                'province_id' => '28',
                'name' => 'Talisay',
            ),
            92 => 
            array (
                'id' => 593,
                'province_id' => '28',
                'name' => 'Vinzons',
            ),
            93 => 
            array (
                'id' => 594,
                'province_id' => '29',
                'name' => 'Baao',
            ),
            94 => 
            array (
                'id' => 595,
                'province_id' => '29',
                'name' => 'Balatan',
            ),
            95 => 
            array (
                'id' => 596,
                'province_id' => '29',
                'name' => 'Bato',
            ),
            96 => 
            array (
                'id' => 597,
                'province_id' => '29',
                'name' => 'Bombon',
            ),
            97 => 
            array (
                'id' => 598,
                'province_id' => '29',
                'name' => 'Buhi',
            ),
            98 => 
            array (
                'id' => 599,
                'province_id' => '29',
                'name' => 'Bula',
            ),
            99 => 
            array (
                'id' => 600,
                'province_id' => '29',
                'name' => 'Cabusao',
            ),
            100 => 
            array (
                'id' => 601,
                'province_id' => '29',
                'name' => 'Calabanga',
            ),
            101 => 
            array (
                'id' => 602,
                'province_id' => '29',
                'name' => 'Camaligan',
            ),
            102 => 
            array (
                'id' => 603,
                'province_id' => '29',
                'name' => 'Canaman',
            ),
            103 => 
            array (
                'id' => 604,
                'province_id' => '29',
                'name' => 'Caramoan',
            ),
            104 => 
            array (
                'id' => 605,
                'province_id' => '29',
                'name' => 'Del Gallego',
            ),
            105 => 
            array (
                'id' => 606,
                'province_id' => '29',
                'name' => 'Gainza',
            ),
            106 => 
            array (
                'id' => 607,
                'province_id' => '29',
                'name' => 'Garchitorena',
            ),
            107 => 
            array (
                'id' => 608,
                'province_id' => '29',
                'name' => 'Goa',
            ),
            108 => 
            array (
                'id' => 609,
                'province_id' => '29',
                'name' => ' Iriga',
            ),
            109 => 
            array (
                'id' => 610,
                'province_id' => '29',
                'name' => 'Lagonoy',
            ),
            110 => 
            array (
                'id' => 611,
                'province_id' => '29',
                'name' => 'Libmanan',
            ),
            111 => 
            array (
                'id' => 612,
                'province_id' => '29',
                'name' => 'Lupi',
            ),
            112 => 
            array (
                'id' => 613,
                'province_id' => '29',
                'name' => 'Magarao',
            ),
            113 => 
            array (
                'id' => 614,
                'province_id' => '29',
                'name' => 'Milaor',
            ),
            114 => 
            array (
                'id' => 615,
                'province_id' => '29',
                'name' => 'Minalabac',
            ),
            115 => 
            array (
                'id' => 616,
                'province_id' => '29',
                'name' => 'Nabua',
            ),
            116 => 
            array (
                'id' => 617,
                'province_id' => '29',
                'name' => ' Naga',
            ),
            117 => 
            array (
                'id' => 618,
                'province_id' => '29',
                'name' => 'Ocampo',
            ),
            118 => 
            array (
                'id' => 619,
                'province_id' => '29',
                'name' => 'Pamplona',
            ),
            119 => 
            array (
                'id' => 620,
                'province_id' => '29',
                'name' => 'Pasacao',
            ),
            120 => 
            array (
                'id' => 621,
                'province_id' => '29',
                'name' => 'Pili',
            ),
            121 => 
            array (
                'id' => 622,
                'province_id' => '29',
            'name' => 'Presentacion (Parubcan)',
            ),
            122 => 
            array (
                'id' => 623,
                'province_id' => '29',
                'name' => 'Ragay',
            ),
            123 => 
            array (
                'id' => 624,
                'province_id' => '29',
                'name' => 'Sagñay',
            ),
            124 => 
            array (
                'id' => 625,
                'province_id' => '29',
                'name' => 'San Fernando',
            ),
            125 => 
            array (
                'id' => 626,
                'province_id' => '29',
                'name' => 'San Jose',
            ),
            126 => 
            array (
                'id' => 627,
                'province_id' => '29',
                'name' => 'Sipocot',
            ),
            127 => 
            array (
                'id' => 628,
                'province_id' => '29',
                'name' => 'Siruma',
            ),
            128 => 
            array (
                'id' => 629,
                'province_id' => '29',
                'name' => 'Tigaon',
            ),
            129 => 
            array (
                'id' => 630,
                'province_id' => '29',
                'name' => 'Tinambac',
            ),
            130 => 
            array (
                'id' => 631,
                'province_id' => '30',
                'name' => 'Bagamanoc',
            ),
            131 => 
            array (
                'id' => 632,
                'province_id' => '30',
                'name' => 'Baras',
            ),
            132 => 
            array (
                'id' => 633,
                'province_id' => '30',
                'name' => 'Bato',
            ),
            133 => 
            array (
                'id' => 634,
                'province_id' => '30',
                'name' => 'Caramoran',
            ),
            134 => 
            array (
                'id' => 635,
                'province_id' => '30',
                'name' => 'Gigmoto',
            ),
            135 => 
            array (
                'id' => 636,
                'province_id' => '30',
                'name' => 'Pandan',
            ),
            136 => 
            array (
                'id' => 637,
                'province_id' => '30',
            'name' => 'Panganiban (Payo)',
            ),
            137 => 
            array (
                'id' => 638,
                'province_id' => '30',
            'name' => 'San Andres (Calolbon)',
            ),
            138 => 
            array (
                'id' => 639,
                'province_id' => '30',
                'name' => 'San Miguel',
            ),
            139 => 
            array (
                'id' => 640,
                'province_id' => '30',
                'name' => 'Viga',
            ),
            140 => 
            array (
                'id' => 641,
                'province_id' => '30',
                'name' => 'Virac',
            ),
            141 => 
            array (
                'id' => 642,
                'province_id' => '31',
                'name' => 'Aroroy',
            ),
            142 => 
            array (
                'id' => 643,
                'province_id' => '31',
                'name' => 'Baleno',
            ),
            143 => 
            array (
                'id' => 644,
                'province_id' => '31',
                'name' => 'Balud',
            ),
            144 => 
            array (
                'id' => 645,
                'province_id' => '31',
                'name' => 'Batuan',
            ),
            145 => 
            array (
                'id' => 646,
                'province_id' => '31',
                'name' => 'Cataingan',
            ),
            146 => 
            array (
                'id' => 647,
                'province_id' => '31',
                'name' => 'Cawayan',
            ),
            147 => 
            array (
                'id' => 648,
                'province_id' => '31',
                'name' => 'Claveria',
            ),
            148 => 
            array (
                'id' => 649,
                'province_id' => '31',
                'name' => 'Dimasalang',
            ),
            149 => 
            array (
                'id' => 650,
                'province_id' => '31',
                'name' => 'Esperanza',
            ),
            150 => 
            array (
                'id' => 651,
                'province_id' => '31',
                'name' => 'Mandaon',
            ),
            151 => 
            array (
                'id' => 652,
                'province_id' => '31',
                'name' => ' Masbate',
            ),
            152 => 
            array (
                'id' => 653,
                'province_id' => '31',
                'name' => 'Milagros',
            ),
            153 => 
            array (
                'id' => 654,
                'province_id' => '31',
                'name' => 'Mobo',
            ),
            154 => 
            array (
                'id' => 655,
                'province_id' => '31',
                'name' => 'Monreal',
            ),
            155 => 
            array (
                'id' => 656,
                'province_id' => '31',
                'name' => 'Palanas',
            ),
            156 => 
            array (
                'id' => 657,
                'province_id' => '31',
            'name' => 'Pio V. Corpuz (Limbuhan)',
            ),
            157 => 
            array (
                'id' => 658,
                'province_id' => '31',
                'name' => 'Placer',
            ),
            158 => 
            array (
                'id' => 659,
                'province_id' => '31',
                'name' => 'San Fernando',
            ),
            159 => 
            array (
                'id' => 660,
                'province_id' => '31',
                'name' => 'San Jacinto',
            ),
            160 => 
            array (
                'id' => 661,
                'province_id' => '31',
                'name' => 'San Pascual',
            ),
            161 => 
            array (
                'id' => 662,
                'province_id' => '31',
                'name' => 'Uson',
            ),
            162 => 
            array (
                'id' => 663,
                'province_id' => '32',
                'name' => 'Barcelona',
            ),
            163 => 
            array (
                'id' => 664,
                'province_id' => '32',
                'name' => 'Bulan',
            ),
            164 => 
            array (
                'id' => 665,
                'province_id' => '32',
                'name' => 'Bulusan',
            ),
            165 => 
            array (
                'id' => 666,
                'province_id' => '32',
                'name' => 'Casiguran',
            ),
            166 => 
            array (
                'id' => 667,
                'province_id' => '32',
                'name' => 'Castilla',
            ),
            167 => 
            array (
                'id' => 668,
                'province_id' => '32',
                'name' => 'Donsol',
            ),
            168 => 
            array (
                'id' => 669,
                'province_id' => '32',
                'name' => 'Gubat',
            ),
            169 => 
            array (
                'id' => 670,
                'province_id' => '32',
                'name' => 'Irosin',
            ),
            170 => 
            array (
                'id' => 671,
                'province_id' => '32',
                'name' => 'Juban',
            ),
            171 => 
            array (
                'id' => 672,
                'province_id' => '32',
                'name' => 'Magallanes',
            ),
            172 => 
            array (
                'id' => 673,
                'province_id' => '32',
                'name' => 'Matnog',
            ),
            173 => 
            array (
                'id' => 674,
                'province_id' => '32',
                'name' => 'Pilar',
            ),
            174 => 
            array (
                'id' => 675,
                'province_id' => '32',
                'name' => 'Prieto Diaz',
            ),
            175 => 
            array (
                'id' => 676,
                'province_id' => '32',
                'name' => 'Santa Magdalena',
            ),
            176 => 
            array (
                'id' => 677,
                'province_id' => '32',
                'name' => ' Sorsogon',
            ),
            177 => 
            array (
                'id' => 678,
                'province_id' => '33',
                'name' => 'Altavas',
            ),
            178 => 
            array (
                'id' => 679,
                'province_id' => '33',
                'name' => 'Balete',
            ),
            179 => 
            array (
                'id' => 680,
                'province_id' => '33',
                'name' => 'Banga',
            ),
            180 => 
            array (
                'id' => 681,
                'province_id' => '33',
                'name' => 'Batan',
            ),
            181 => 
            array (
                'id' => 682,
                'province_id' => '33',
                'name' => 'Buruanga',
            ),
            182 => 
            array (
                'id' => 683,
                'province_id' => '33',
                'name' => 'Ibajay',
            ),
            183 => 
            array (
                'id' => 684,
                'province_id' => '33',
                'name' => 'Kalibo',
            ),
            184 => 
            array (
                'id' => 685,
                'province_id' => '33',
                'name' => 'Lezo',
            ),
            185 => 
            array (
                'id' => 686,
                'province_id' => '33',
                'name' => 'Libacao',
            ),
            186 => 
            array (
                'id' => 687,
                'province_id' => '33',
                'name' => 'Madalag',
            ),
            187 => 
            array (
                'id' => 688,
                'province_id' => '33',
                'name' => 'Makato',
            ),
            188 => 
            array (
                'id' => 689,
                'province_id' => '33',
                'name' => 'Malay',
            ),
            189 => 
            array (
                'id' => 690,
                'province_id' => '33',
                'name' => 'Malinao',
            ),
            190 => 
            array (
                'id' => 691,
                'province_id' => '33',
                'name' => 'Nabas',
            ),
            191 => 
            array (
                'id' => 692,
                'province_id' => '33',
                'name' => 'New Washington',
            ),
            192 => 
            array (
                'id' => 693,
                'province_id' => '33',
                'name' => 'Numancia',
            ),
            193 => 
            array (
                'id' => 694,
                'province_id' => '33',
                'name' => 'Tangalan',
            ),
            194 => 
            array (
                'id' => 695,
                'province_id' => '34',
                'name' => 'Anini-Y',
            ),
            195 => 
            array (
                'id' => 696,
                'province_id' => '34',
                'name' => 'Barbaza',
            ),
            196 => 
            array (
                'id' => 697,
                'province_id' => '34',
                'name' => 'Belison',
            ),
            197 => 
            array (
                'id' => 698,
                'province_id' => '34',
                'name' => 'Bugasong',
            ),
            198 => 
            array (
                'id' => 699,
                'province_id' => '34',
                'name' => 'Caluya',
            ),
            199 => 
            array (
                'id' => 700,
                'province_id' => '34',
                'name' => 'Culasi',
            ),
            200 => 
            array (
                'id' => 701,
                'province_id' => '34',
            'name' => 'Tobias Fornier (Dao)',
            ),
            201 => 
            array (
                'id' => 702,
                'province_id' => '34',
                'name' => 'Hamtic',
            ),
            202 => 
            array (
                'id' => 703,
                'province_id' => '34',
                'name' => 'Laua-An',
            ),
            203 => 
            array (
                'id' => 704,
                'province_id' => '34',
                'name' => 'Libertad',
            ),
            204 => 
            array (
                'id' => 705,
                'province_id' => '34',
                'name' => 'Pandan',
            ),
            205 => 
            array (
                'id' => 706,
                'province_id' => '34',
                'name' => 'Patnongon',
            ),
            206 => 
            array (
                'id' => 707,
                'province_id' => '34',
                'name' => 'San Jose',
            ),
            207 => 
            array (
                'id' => 708,
                'province_id' => '34',
                'name' => 'San Remigio',
            ),
            208 => 
            array (
                'id' => 709,
                'province_id' => '34',
                'name' => 'Sebaste',
            ),
            209 => 
            array (
                'id' => 710,
                'province_id' => '34',
                'name' => 'Sibalom',
            ),
            210 => 
            array (
                'id' => 711,
                'province_id' => '34',
                'name' => 'Tibiao',
            ),
            211 => 
            array (
                'id' => 712,
                'province_id' => '34',
                'name' => 'Valderrama',
            ),
            212 => 
            array (
                'id' => 713,
                'province_id' => '35',
                'name' => 'Cuartero',
            ),
            213 => 
            array (
                'id' => 714,
                'province_id' => '35',
                'name' => 'Dao',
            ),
            214 => 
            array (
                'id' => 715,
                'province_id' => '35',
                'name' => 'Dumalag',
            ),
            215 => 
            array (
                'id' => 716,
                'province_id' => '35',
                'name' => 'Dumarao',
            ),
            216 => 
            array (
                'id' => 717,
                'province_id' => '35',
                'name' => 'Ivisan',
            ),
            217 => 
            array (
                'id' => 718,
                'province_id' => '35',
                'name' => 'Jamindan',
            ),
            218 => 
            array (
                'id' => 719,
                'province_id' => '35',
                'name' => 'Ma-Ayon',
            ),
            219 => 
            array (
                'id' => 720,
                'province_id' => '35',
                'name' => 'Mambusao',
            ),
            220 => 
            array (
                'id' => 721,
                'province_id' => '35',
                'name' => 'Panay',
            ),
            221 => 
            array (
                'id' => 722,
                'province_id' => '35',
                'name' => 'Panitan',
            ),
            222 => 
            array (
                'id' => 723,
                'province_id' => '35',
                'name' => 'Pilar',
            ),
            223 => 
            array (
                'id' => 724,
                'province_id' => '35',
                'name' => 'Pontevedra',
            ),
            224 => 
            array (
                'id' => 725,
                'province_id' => '35',
                'name' => 'President Roxas',
            ),
            225 => 
            array (
                'id' => 726,
                'province_id' => '35',
                'name' => ' Roxas',
            ),
            226 => 
            array (
                'id' => 727,
                'province_id' => '35',
                'name' => 'Sapi-An',
            ),
            227 => 
            array (
                'id' => 728,
                'province_id' => '35',
                'name' => 'Sigma',
            ),
            228 => 
            array (
                'id' => 729,
                'province_id' => '35',
                'name' => 'Tapaz',
            ),
            229 => 
            array (
                'id' => 730,
                'province_id' => '36',
                'name' => 'Ajuy',
            ),
            230 => 
            array (
                'id' => 731,
                'province_id' => '36',
                'name' => 'Alimodian',
            ),
            231 => 
            array (
                'id' => 732,
                'province_id' => '36',
                'name' => 'Anilao',
            ),
            232 => 
            array (
                'id' => 733,
                'province_id' => '36',
                'name' => 'Badiangan',
            ),
            233 => 
            array (
                'id' => 734,
                'province_id' => '36',
                'name' => 'Balasan',
            ),
            234 => 
            array (
                'id' => 735,
                'province_id' => '36',
                'name' => 'Banate',
            ),
            235 => 
            array (
                'id' => 736,
                'province_id' => '36',
                'name' => 'Barotac Nuevo',
            ),
            236 => 
            array (
                'id' => 737,
                'province_id' => '36',
                'name' => 'Barotac Viejo',
            ),
            237 => 
            array (
                'id' => 738,
                'province_id' => '36',
                'name' => 'Batad',
            ),
            238 => 
            array (
                'id' => 739,
                'province_id' => '36',
                'name' => 'Bingawan',
            ),
            239 => 
            array (
                'id' => 740,
                'province_id' => '36',
                'name' => 'Cabatuan',
            ),
            240 => 
            array (
                'id' => 741,
                'province_id' => '36',
                'name' => 'Calinog',
            ),
            241 => 
            array (
                'id' => 742,
                'province_id' => '36',
                'name' => 'Carles',
            ),
            242 => 
            array (
                'id' => 743,
                'province_id' => '36',
                'name' => 'Concepcion',
            ),
            243 => 
            array (
                'id' => 744,
                'province_id' => '36',
                'name' => 'Dingle',
            ),
            244 => 
            array (
                'id' => 745,
                'province_id' => '36',
                'name' => 'Dueñas',
            ),
            245 => 
            array (
                'id' => 746,
                'province_id' => '36',
                'name' => 'Dumangas',
            ),
            246 => 
            array (
                'id' => 747,
                'province_id' => '36',
                'name' => 'Estancia',
            ),
            247 => 
            array (
                'id' => 748,
                'province_id' => '36',
                'name' => 'Guimbal',
            ),
            248 => 
            array (
                'id' => 749,
                'province_id' => '36',
                'name' => 'Igbaras',
            ),
            249 => 
            array (
                'id' => 750,
                'province_id' => '36',
                'name' => ' Iloilo',
            ),
            250 => 
            array (
                'id' => 751,
                'province_id' => '36',
                'name' => 'Janiuay',
            ),
            251 => 
            array (
                'id' => 752,
                'province_id' => '36',
                'name' => 'Lambunao',
            ),
            252 => 
            array (
                'id' => 753,
                'province_id' => '36',
                'name' => 'Leganes',
            ),
            253 => 
            array (
                'id' => 754,
                'province_id' => '36',
                'name' => 'Lemery',
            ),
            254 => 
            array (
                'id' => 755,
                'province_id' => '36',
                'name' => 'Leon',
            ),
            255 => 
            array (
                'id' => 756,
                'province_id' => '36',
                'name' => 'Maasin',
            ),
            256 => 
            array (
                'id' => 757,
                'province_id' => '36',
                'name' => 'Miagao',
            ),
            257 => 
            array (
                'id' => 758,
                'province_id' => '36',
                'name' => 'Mina',
            ),
            258 => 
            array (
                'id' => 759,
                'province_id' => '36',
                'name' => 'New Lucena',
            ),
            259 => 
            array (
                'id' => 760,
                'province_id' => '36',
                'name' => 'Oton',
            ),
            260 => 
            array (
                'id' => 761,
                'province_id' => '36',
                'name' => ' Passi',
            ),
            261 => 
            array (
                'id' => 762,
                'province_id' => '36',
                'name' => 'Pavia',
            ),
            262 => 
            array (
                'id' => 763,
                'province_id' => '36',
                'name' => 'Pototan',
            ),
            263 => 
            array (
                'id' => 764,
                'province_id' => '36',
                'name' => 'San Dionisio',
            ),
            264 => 
            array (
                'id' => 765,
                'province_id' => '36',
                'name' => 'San Enrique',
            ),
            265 => 
            array (
                'id' => 766,
                'province_id' => '36',
                'name' => 'San Joaquin',
            ),
            266 => 
            array (
                'id' => 767,
                'province_id' => '36',
                'name' => 'San Miguel',
            ),
            267 => 
            array (
                'id' => 768,
                'province_id' => '36',
                'name' => 'San Rafael',
            ),
            268 => 
            array (
                'id' => 769,
                'province_id' => '36',
                'name' => 'Santa Barbara',
            ),
            269 => 
            array (
                'id' => 770,
                'province_id' => '36',
                'name' => 'Sara',
            ),
            270 => 
            array (
                'id' => 771,
                'province_id' => '36',
                'name' => 'Tigbauan',
            ),
            271 => 
            array (
                'id' => 772,
                'province_id' => '36',
                'name' => 'Tubungan',
            ),
            272 => 
            array (
                'id' => 773,
                'province_id' => '36',
                'name' => 'Zarraga',
            ),
            273 => 
            array (
                'id' => 774,
                'province_id' => '37',
                'name' => ' Bacolod',
            ),
            274 => 
            array (
                'id' => 775,
                'province_id' => '37',
                'name' => ' Bago',
            ),
            275 => 
            array (
                'id' => 776,
                'province_id' => '37',
                'name' => 'Binalbagan',
            ),
            276 => 
            array (
                'id' => 777,
                'province_id' => '37',
                'name' => ' Cadiz',
            ),
            277 => 
            array (
                'id' => 778,
                'province_id' => '37',
                'name' => 'Calatrava',
            ),
            278 => 
            array (
                'id' => 779,
                'province_id' => '37',
                'name' => 'Candoni',
            ),
            279 => 
            array (
                'id' => 780,
                'province_id' => '37',
                'name' => 'Cauayan',
            ),
            280 => 
            array (
                'id' => 781,
                'province_id' => '37',
            'name' => 'Enrique B. Magalona (Saravia)',
            ),
            281 => 
            array (
                'id' => 782,
                'province_id' => '37',
                'name' => ' Escalante',
            ),
            282 => 
            array (
                'id' => 783,
                'province_id' => '37',
                'name' => ' Himamaylan',
            ),
            283 => 
            array (
                'id' => 784,
                'province_id' => '37',
                'name' => 'Hinigaran',
            ),
            284 => 
            array (
                'id' => 785,
                'province_id' => '37',
            'name' => 'Hinoba-An (Asia)',
            ),
            285 => 
            array (
                'id' => 786,
                'province_id' => '37',
                'name' => 'Ilog',
            ),
            286 => 
            array (
                'id' => 787,
                'province_id' => '37',
                'name' => 'Isabela',
            ),
            287 => 
            array (
                'id' => 788,
                'province_id' => '37',
                'name' => ' Kabankalan',
            ),
            288 => 
            array (
                'id' => 789,
                'province_id' => '37',
                'name' => ' La Carlota',
            ),
            289 => 
            array (
                'id' => 790,
                'province_id' => '37',
                'name' => 'La Castellana',
            ),
            290 => 
            array (
                'id' => 791,
                'province_id' => '37',
                'name' => 'Manapla',
            ),
            291 => 
            array (
                'id' => 792,
                'province_id' => '37',
            'name' => 'Moises Padilla (Magallon)',
            ),
            292 => 
            array (
                'id' => 793,
                'province_id' => '37',
                'name' => 'Murcia',
            ),
            293 => 
            array (
                'id' => 794,
                'province_id' => '37',
                'name' => 'Pontevedra',
            ),
            294 => 
            array (
                'id' => 795,
                'province_id' => '37',
                'name' => 'Pulupandan',
            ),
            295 => 
            array (
                'id' => 796,
                'province_id' => '37',
                'name' => ' Sagay',
            ),
            296 => 
            array (
                'id' => 797,
                'province_id' => '37',
                'name' => ' San Carlos',
            ),
            297 => 
            array (
                'id' => 798,
                'province_id' => '37',
                'name' => 'San Enrique',
            ),
            298 => 
            array (
                'id' => 799,
                'province_id' => '37',
                'name' => ' Silay',
            ),
            299 => 
            array (
                'id' => 800,
                'province_id' => '37',
                'name' => ' Sipalay',
            ),
            300 => 
            array (
                'id' => 801,
                'province_id' => '37',
                'name' => ' Talisay',
            ),
            301 => 
            array (
                'id' => 802,
                'province_id' => '37',
                'name' => 'Toboso',
            ),
            302 => 
            array (
                'id' => 803,
                'province_id' => '37',
                'name' => 'Valladolid',
            ),
            303 => 
            array (
                'id' => 804,
                'province_id' => '37',
                'name' => ' Victorias',
            ),
            304 => 
            array (
                'id' => 805,
                'province_id' => '37',
                'name' => 'Salvador Benedicto',
            ),
            305 => 
            array (
                'id' => 806,
                'province_id' => '38',
                'name' => 'Buenavista',
            ),
            306 => 
            array (
                'id' => 807,
                'province_id' => '38',
                'name' => 'Jordan',
            ),
            307 => 
            array (
                'id' => 808,
                'province_id' => '38',
                'name' => 'Nueva Valencia',
            ),
            308 => 
            array (
                'id' => 809,
                'province_id' => '38',
                'name' => 'San Lorenzo',
            ),
            309 => 
            array (
                'id' => 810,
                'province_id' => '38',
                'name' => 'Sibunag',
            ),
            310 => 
            array (
                'id' => 811,
                'province_id' => '39',
                'name' => 'Alburquerque',
            ),
            311 => 
            array (
                'id' => 812,
                'province_id' => '39',
                'name' => 'Alicia',
            ),
            312 => 
            array (
                'id' => 813,
                'province_id' => '39',
                'name' => 'Anda',
            ),
            313 => 
            array (
                'id' => 814,
                'province_id' => '39',
                'name' => 'Antequera',
            ),
            314 => 
            array (
                'id' => 815,
                'province_id' => '39',
                'name' => 'Baclayon',
            ),
            315 => 
            array (
                'id' => 816,
                'province_id' => '39',
                'name' => 'Balilihan',
            ),
            316 => 
            array (
                'id' => 817,
                'province_id' => '39',
                'name' => 'Batuan',
            ),
            317 => 
            array (
                'id' => 818,
                'province_id' => '39',
                'name' => 'Bilar',
            ),
            318 => 
            array (
                'id' => 819,
                'province_id' => '39',
                'name' => 'Buenavista',
            ),
            319 => 
            array (
                'id' => 820,
                'province_id' => '39',
                'name' => 'Calape',
            ),
            320 => 
            array (
                'id' => 821,
                'province_id' => '39',
                'name' => 'Candijay',
            ),
            321 => 
            array (
                'id' => 822,
                'province_id' => '39',
                'name' => 'Carmen',
            ),
            322 => 
            array (
                'id' => 823,
                'province_id' => '39',
                'name' => 'Catigbian',
            ),
            323 => 
            array (
                'id' => 824,
                'province_id' => '39',
                'name' => 'Clarin',
            ),
            324 => 
            array (
                'id' => 825,
                'province_id' => '39',
                'name' => 'Corella',
            ),
            325 => 
            array (
                'id' => 826,
                'province_id' => '39',
                'name' => 'Cortes',
            ),
            326 => 
            array (
                'id' => 827,
                'province_id' => '39',
                'name' => 'Dagohoy',
            ),
            327 => 
            array (
                'id' => 828,
                'province_id' => '39',
                'name' => 'Danao',
            ),
            328 => 
            array (
                'id' => 829,
                'province_id' => '39',
                'name' => 'Dauis',
            ),
            329 => 
            array (
                'id' => 830,
                'province_id' => '39',
                'name' => 'Dimiao',
            ),
            330 => 
            array (
                'id' => 831,
                'province_id' => '39',
                'name' => 'Duero',
            ),
            331 => 
            array (
                'id' => 832,
                'province_id' => '39',
                'name' => 'Garcia Hernandez',
            ),
            332 => 
            array (
                'id' => 833,
                'province_id' => '39',
                'name' => 'Guindulman',
            ),
            333 => 
            array (
                'id' => 834,
                'province_id' => '39',
                'name' => 'Inabanga',
            ),
            334 => 
            array (
                'id' => 835,
                'province_id' => '39',
                'name' => 'Jagna',
            ),
            335 => 
            array (
                'id' => 836,
                'province_id' => '39',
                'name' => 'Getafe',
            ),
            336 => 
            array (
                'id' => 837,
                'province_id' => '39',
                'name' => 'Lila',
            ),
            337 => 
            array (
                'id' => 838,
                'province_id' => '39',
                'name' => 'Loay',
            ),
            338 => 
            array (
                'id' => 839,
                'province_id' => '39',
                'name' => 'Loboc',
            ),
            339 => 
            array (
                'id' => 840,
                'province_id' => '39',
                'name' => 'Loon',
            ),
            340 => 
            array (
                'id' => 841,
                'province_id' => '39',
                'name' => 'Mabini',
            ),
            341 => 
            array (
                'id' => 842,
                'province_id' => '39',
                'name' => 'Maribojoc',
            ),
            342 => 
            array (
                'id' => 843,
                'province_id' => '39',
                'name' => 'Panglao',
            ),
            343 => 
            array (
                'id' => 844,
                'province_id' => '39',
                'name' => 'Pilar',
            ),
            344 => 
            array (
                'id' => 845,
                'province_id' => '39',
            'name' => 'Pres. Carlos P. Garcia (Pitogo)',
            ),
            345 => 
            array (
                'id' => 846,
                'province_id' => '39',
            'name' => 'Sagbayan (Borja)',
            ),
            346 => 
            array (
                'id' => 847,
                'province_id' => '39',
                'name' => 'San Isidro',
            ),
            347 => 
            array (
                'id' => 848,
                'province_id' => '39',
                'name' => 'San Miguel',
            ),
            348 => 
            array (
                'id' => 849,
                'province_id' => '39',
                'name' => 'Sevilla',
            ),
            349 => 
            array (
                'id' => 850,
                'province_id' => '39',
                'name' => 'Sierra Bullones',
            ),
            350 => 
            array (
                'id' => 851,
                'province_id' => '39',
                'name' => 'Sikatuna',
            ),
            351 => 
            array (
                'id' => 852,
                'province_id' => '39',
                'name' => ' Tagbilaran',
            ),
            352 => 
            array (
                'id' => 853,
                'province_id' => '39',
                'name' => 'Talibon',
            ),
            353 => 
            array (
                'id' => 854,
                'province_id' => '39',
                'name' => 'Trinidad',
            ),
            354 => 
            array (
                'id' => 855,
                'province_id' => '39',
                'name' => 'Tubigon',
            ),
            355 => 
            array (
                'id' => 856,
                'province_id' => '39',
                'name' => 'Ubay',
            ),
            356 => 
            array (
                'id' => 857,
                'province_id' => '39',
                'name' => 'Valencia',
            ),
            357 => 
            array (
                'id' => 858,
                'province_id' => '39',
                'name' => 'Bien Unido',
            ),
            358 => 
            array (
                'id' => 859,
                'province_id' => '40',
                'name' => 'Alcantara',
            ),
            359 => 
            array (
                'id' => 860,
                'province_id' => '40',
                'name' => 'Alcoy',
            ),
            360 => 
            array (
                'id' => 861,
                'province_id' => '40',
                'name' => 'Alegria',
            ),
            361 => 
            array (
                'id' => 862,
                'province_id' => '40',
                'name' => 'Aloguinsan',
            ),
            362 => 
            array (
                'id' => 863,
                'province_id' => '40',
                'name' => 'Argao',
            ),
            363 => 
            array (
                'id' => 864,
                'province_id' => '40',
                'name' => 'Asturias',
            ),
            364 => 
            array (
                'id' => 865,
                'province_id' => '40',
                'name' => 'Badian',
            ),
            365 => 
            array (
                'id' => 866,
                'province_id' => '40',
                'name' => 'Balamban',
            ),
            366 => 
            array (
                'id' => 867,
                'province_id' => '40',
                'name' => 'Bantayan',
            ),
            367 => 
            array (
                'id' => 868,
                'province_id' => '40',
                'name' => 'Barili',
            ),
            368 => 
            array (
                'id' => 869,
                'province_id' => '40',
                'name' => ' Bogo',
            ),
            369 => 
            array (
                'id' => 870,
                'province_id' => '40',
                'name' => 'Boljoon',
            ),
            370 => 
            array (
                'id' => 871,
                'province_id' => '40',
                'name' => 'Borbon',
            ),
            371 => 
            array (
                'id' => 872,
                'province_id' => '40',
                'name' => ' Carcar',
            ),
            372 => 
            array (
                'id' => 873,
                'province_id' => '40',
                'name' => 'Carmen',
            ),
            373 => 
            array (
                'id' => 874,
                'province_id' => '40',
                'name' => 'Catmon',
            ),
            374 => 
            array (
                'id' => 875,
                'province_id' => '40',
                'name' => ' Cebu',
            ),
            375 => 
            array (
                'id' => 876,
                'province_id' => '40',
                'name' => 'Compostela',
            ),
            376 => 
            array (
                'id' => 877,
                'province_id' => '40',
                'name' => 'Consolacion',
            ),
            377 => 
            array (
                'id' => 878,
                'province_id' => '40',
                'name' => 'Cordova',
            ),
            378 => 
            array (
                'id' => 879,
                'province_id' => '40',
                'name' => 'Daanbantayan',
            ),
            379 => 
            array (
                'id' => 880,
                'province_id' => '40',
                'name' => 'Dalaguete',
            ),
            380 => 
            array (
                'id' => 881,
                'province_id' => '40',
                'name' => 'Danao City',
            ),
            381 => 
            array (
                'id' => 882,
                'province_id' => '40',
                'name' => 'Dumanjug',
            ),
            382 => 
            array (
                'id' => 883,
                'province_id' => '40',
                'name' => 'Ginatilan',
            ),
            383 => 
            array (
                'id' => 884,
                'province_id' => '40',
            'name' => ' Lapu-Lapu (Opon)',
            ),
            384 => 
            array (
                'id' => 885,
                'province_id' => '40',
                'name' => 'Liloan',
            ),
            385 => 
            array (
                'id' => 886,
                'province_id' => '40',
                'name' => 'Madridejos',
            ),
            386 => 
            array (
                'id' => 887,
                'province_id' => '40',
                'name' => 'Malabuyoc',
            ),
            387 => 
            array (
                'id' => 888,
                'province_id' => '40',
                'name' => ' Mandaue',
            ),
            388 => 
            array (
                'id' => 889,
                'province_id' => '40',
                'name' => 'Medellin',
            ),
            389 => 
            array (
                'id' => 890,
                'province_id' => '40',
                'name' => 'Minglanilla',
            ),
            390 => 
            array (
                'id' => 891,
                'province_id' => '40',
                'name' => 'Moalboal',
            ),
            391 => 
            array (
                'id' => 892,
                'province_id' => '40',
                'name' => ' Naga',
            ),
            392 => 
            array (
                'id' => 893,
                'province_id' => '40',
                'name' => 'Oslob',
            ),
            393 => 
            array (
                'id' => 894,
                'province_id' => '40',
                'name' => 'Pilar',
            ),
            394 => 
            array (
                'id' => 895,
                'province_id' => '40',
                'name' => 'Pinamungahan',
            ),
            395 => 
            array (
                'id' => 896,
                'province_id' => '40',
                'name' => 'Poro',
            ),
            396 => 
            array (
                'id' => 897,
                'province_id' => '40',
                'name' => 'Ronda',
            ),
            397 => 
            array (
                'id' => 898,
                'province_id' => '40',
                'name' => 'Samboan',
            ),
            398 => 
            array (
                'id' => 899,
                'province_id' => '40',
                'name' => 'San Fernando',
            ),
            399 => 
            array (
                'id' => 900,
                'province_id' => '40',
                'name' => 'San Francisco',
            ),
            400 => 
            array (
                'id' => 901,
                'province_id' => '40',
                'name' => 'San Remigio',
            ),
            401 => 
            array (
                'id' => 902,
                'province_id' => '40',
                'name' => 'Santa Fe',
            ),
            402 => 
            array (
                'id' => 903,
                'province_id' => '40',
                'name' => 'Santander',
            ),
            403 => 
            array (
                'id' => 904,
                'province_id' => '40',
                'name' => 'Sibonga',
            ),
            404 => 
            array (
                'id' => 905,
                'province_id' => '40',
                'name' => 'Sogod',
            ),
            405 => 
            array (
                'id' => 906,
                'province_id' => '40',
                'name' => 'Tabogon',
            ),
            406 => 
            array (
                'id' => 907,
                'province_id' => '40',
                'name' => 'Tabuelan',
            ),
            407 => 
            array (
                'id' => 908,
                'province_id' => '40',
                'name' => ' Talisay',
            ),
            408 => 
            array (
                'id' => 909,
                'province_id' => '40',
                'name' => ' Toledo',
            ),
            409 => 
            array (
                'id' => 910,
                'province_id' => '40',
                'name' => 'Tuburan',
            ),
            410 => 
            array (
                'id' => 911,
                'province_id' => '40',
                'name' => 'Tudela',
            ),
            411 => 
            array (
                'id' => 912,
                'province_id' => '41',
            'name' => 'Amlan (Ayuquitan)',
            ),
            412 => 
            array (
                'id' => 913,
                'province_id' => '41',
                'name' => 'Ayungon',
            ),
            413 => 
            array (
                'id' => 914,
                'province_id' => '41',
                'name' => 'Bacong',
            ),
            414 => 
            array (
                'id' => 915,
                'province_id' => '41',
                'name' => ' Bais',
            ),
            415 => 
            array (
                'id' => 916,
                'province_id' => '41',
                'name' => 'Basay',
            ),
            416 => 
            array (
                'id' => 917,
                'province_id' => '41',
            'name' => ' Bayawan (Tulong)',
            ),
            417 => 
            array (
                'id' => 918,
                'province_id' => '41',
            'name' => 'Bindoy (Payabon)',
            ),
            418 => 
            array (
                'id' => 919,
                'province_id' => '41',
                'name' => ' Canlaon',
            ),
            419 => 
            array (
                'id' => 920,
                'province_id' => '41',
                'name' => 'Dauin',
            ),
            420 => 
            array (
                'id' => 921,
                'province_id' => '41',
                'name' => ' Dumaguete',
            ),
            421 => 
            array (
                'id' => 922,
                'province_id' => '41',
                'name' => ' Guihulngan',
            ),
            422 => 
            array (
                'id' => 923,
                'province_id' => '41',
                'name' => 'Jimalalud',
            ),
            423 => 
            array (
                'id' => 924,
                'province_id' => '41',
                'name' => 'La Libertad',
            ),
            424 => 
            array (
                'id' => 925,
                'province_id' => '41',
                'name' => 'Mabinay',
            ),
            425 => 
            array (
                'id' => 926,
                'province_id' => '41',
                'name' => 'Manjuyod',
            ),
            426 => 
            array (
                'id' => 927,
                'province_id' => '41',
                'name' => 'Pamplona',
            ),
            427 => 
            array (
                'id' => 928,
                'province_id' => '41',
                'name' => 'San Jose',
            ),
            428 => 
            array (
                'id' => 929,
                'province_id' => '41',
                'name' => 'Santa Catalina',
            ),
            429 => 
            array (
                'id' => 930,
                'province_id' => '41',
                'name' => 'Siaton',
            ),
            430 => 
            array (
                'id' => 931,
                'province_id' => '41',
                'name' => 'Sibulan',
            ),
            431 => 
            array (
                'id' => 932,
                'province_id' => '41',
                'name' => ' Tanjay',
            ),
            432 => 
            array (
                'id' => 933,
                'province_id' => '41',
                'name' => 'Tayasan',
            ),
            433 => 
            array (
                'id' => 934,
                'province_id' => '41',
            'name' => 'Valencia (Luzurriaga)',
            ),
            434 => 
            array (
                'id' => 935,
                'province_id' => '41',
                'name' => 'Vallehermoso',
            ),
            435 => 
            array (
                'id' => 936,
                'province_id' => '41',
                'name' => 'Zamboanguita',
            ),
            436 => 
            array (
                'id' => 937,
                'province_id' => '42',
                'name' => 'Enrique Villanueva',
            ),
            437 => 
            array (
                'id' => 938,
                'province_id' => '42',
                'name' => 'Larena',
            ),
            438 => 
            array (
                'id' => 939,
                'province_id' => '42',
                'name' => 'Lazi',
            ),
            439 => 
            array (
                'id' => 940,
                'province_id' => '42',
                'name' => 'Maria',
            ),
            440 => 
            array (
                'id' => 941,
                'province_id' => '42',
                'name' => 'San Juan',
            ),
            441 => 
            array (
                'id' => 942,
                'province_id' => '42',
                'name' => 'Siquijor',
            ),
            442 => 
            array (
                'id' => 943,
                'province_id' => '43',
                'name' => 'Arteche',
            ),
            443 => 
            array (
                'id' => 944,
                'province_id' => '43',
                'name' => 'Balangiga',
            ),
            444 => 
            array (
                'id' => 945,
                'province_id' => '43',
                'name' => 'Balangkayan',
            ),
            445 => 
            array (
                'id' => 946,
                'province_id' => '43',
                'name' => ' Borongan',
            ),
            446 => 
            array (
                'id' => 947,
                'province_id' => '43',
                'name' => 'Can-Avid',
            ),
            447 => 
            array (
                'id' => 948,
                'province_id' => '43',
                'name' => 'Dolores',
            ),
            448 => 
            array (
                'id' => 949,
                'province_id' => '43',
                'name' => 'General Macarthur',
            ),
            449 => 
            array (
                'id' => 950,
                'province_id' => '43',
                'name' => 'Giporlos',
            ),
            450 => 
            array (
                'id' => 951,
                'province_id' => '43',
                'name' => 'Guiuan',
            ),
            451 => 
            array (
                'id' => 952,
                'province_id' => '43',
                'name' => 'Hernani',
            ),
            452 => 
            array (
                'id' => 953,
                'province_id' => '43',
                'name' => 'Jipapad',
            ),
            453 => 
            array (
                'id' => 954,
                'province_id' => '43',
                'name' => 'Lawaan',
            ),
            454 => 
            array (
                'id' => 955,
                'province_id' => '43',
                'name' => 'Llorente',
            ),
            455 => 
            array (
                'id' => 956,
                'province_id' => '43',
                'name' => 'Maslog',
            ),
            456 => 
            array (
                'id' => 957,
                'province_id' => '43',
                'name' => 'Maydolong',
            ),
            457 => 
            array (
                'id' => 958,
                'province_id' => '43',
                'name' => 'Mercedes',
            ),
            458 => 
            array (
                'id' => 959,
                'province_id' => '43',
                'name' => 'Oras',
            ),
            459 => 
            array (
                'id' => 960,
                'province_id' => '43',
                'name' => 'Quinapondan',
            ),
            460 => 
            array (
                'id' => 961,
                'province_id' => '43',
                'name' => 'Salcedo',
            ),
            461 => 
            array (
                'id' => 962,
                'province_id' => '43',
                'name' => 'San Julian',
            ),
            462 => 
            array (
                'id' => 963,
                'province_id' => '43',
                'name' => 'San Policarpo',
            ),
            463 => 
            array (
                'id' => 964,
                'province_id' => '43',
                'name' => 'Sulat',
            ),
            464 => 
            array (
                'id' => 965,
                'province_id' => '43',
                'name' => 'Taft',
            ),
            465 => 
            array (
                'id' => 966,
                'province_id' => '44',
                'name' => 'Abuyog',
            ),
            466 => 
            array (
                'id' => 967,
                'province_id' => '44',
                'name' => 'Alangalang',
            ),
            467 => 
            array (
                'id' => 968,
                'province_id' => '44',
                'name' => 'Albuera',
            ),
            468 => 
            array (
                'id' => 969,
                'province_id' => '44',
                'name' => 'Babatngon',
            ),
            469 => 
            array (
                'id' => 970,
                'province_id' => '44',
                'name' => 'Barugo',
            ),
            470 => 
            array (
                'id' => 971,
                'province_id' => '44',
                'name' => 'Bato',
            ),
            471 => 
            array (
                'id' => 972,
                'province_id' => '44',
                'name' => ' Baybay',
            ),
            472 => 
            array (
                'id' => 973,
                'province_id' => '44',
                'name' => 'Burauen',
            ),
            473 => 
            array (
                'id' => 974,
                'province_id' => '44',
                'name' => 'Calubian',
            ),
            474 => 
            array (
                'id' => 975,
                'province_id' => '44',
                'name' => 'Capoocan',
            ),
            475 => 
            array (
                'id' => 976,
                'province_id' => '44',
                'name' => 'Carigara',
            ),
            476 => 
            array (
                'id' => 977,
                'province_id' => '44',
                'name' => 'Dagami',
            ),
            477 => 
            array (
                'id' => 978,
                'province_id' => '44',
                'name' => 'Dulag',
            ),
            478 => 
            array (
                'id' => 979,
                'province_id' => '44',
                'name' => 'Hilongos',
            ),
            479 => 
            array (
                'id' => 980,
                'province_id' => '44',
                'name' => 'Hindang',
            ),
            480 => 
            array (
                'id' => 981,
                'province_id' => '44',
                'name' => 'Inopacan',
            ),
            481 => 
            array (
                'id' => 982,
                'province_id' => '44',
                'name' => 'Isabel',
            ),
            482 => 
            array (
                'id' => 983,
                'province_id' => '44',
                'name' => 'Jaro',
            ),
            483 => 
            array (
                'id' => 984,
                'province_id' => '44',
            'name' => 'Javier (Bugho)',
            ),
            484 => 
            array (
                'id' => 985,
                'province_id' => '44',
                'name' => 'Julita',
            ),
            485 => 
            array (
                'id' => 986,
                'province_id' => '44',
                'name' => 'Kananga',
            ),
            486 => 
            array (
                'id' => 987,
                'province_id' => '44',
                'name' => 'La Paz',
            ),
            487 => 
            array (
                'id' => 988,
                'province_id' => '44',
                'name' => 'Leyte',
            ),
            488 => 
            array (
                'id' => 989,
                'province_id' => '44',
                'name' => 'Macarthur',
            ),
            489 => 
            array (
                'id' => 990,
                'province_id' => '44',
                'name' => 'Mahaplag',
            ),
            490 => 
            array (
                'id' => 991,
                'province_id' => '44',
                'name' => 'Matag-Ob',
            ),
            491 => 
            array (
                'id' => 992,
                'province_id' => '44',
                'name' => 'Matalom',
            ),
            492 => 
            array (
                'id' => 993,
                'province_id' => '44',
                'name' => 'Mayorga',
            ),
            493 => 
            array (
                'id' => 994,
                'province_id' => '44',
                'name' => 'Merida',
            ),
            494 => 
            array (
                'id' => 995,
                'province_id' => '44',
                'name' => 'Ormoc City',
            ),
            495 => 
            array (
                'id' => 996,
                'province_id' => '44',
                'name' => 'Palo',
            ),
            496 => 
            array (
                'id' => 997,
                'province_id' => '44',
                'name' => 'Palompon',
            ),
            497 => 
            array (
                'id' => 998,
                'province_id' => '44',
                'name' => 'Pastrana',
            ),
            498 => 
            array (
                'id' => 999,
                'province_id' => '44',
                'name' => 'San Isidro',
            ),
            499 => 
            array (
                'id' => 1000,
                'province_id' => '44',
                'name' => 'San Miguel',
            ),
        ));
        \DB::table('province_cities')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'province_id' => '44',
                'name' => 'Santa Fe',
            ),
            1 => 
            array (
                'id' => 1002,
                'province_id' => '44',
                'name' => 'Tabango',
            ),
            2 => 
            array (
                'id' => 1003,
                'province_id' => '44',
                'name' => 'Tabontabon',
            ),
            3 => 
            array (
                'id' => 1004,
                'province_id' => '44',
                'name' => ' Tacloban',
            ),
            4 => 
            array (
                'id' => 1005,
                'province_id' => '44',
                'name' => 'Tanauan',
            ),
            5 => 
            array (
                'id' => 1006,
                'province_id' => '44',
                'name' => 'Tolosa',
            ),
            6 => 
            array (
                'id' => 1007,
                'province_id' => '44',
                'name' => 'Tunga',
            ),
            7 => 
            array (
                'id' => 1008,
                'province_id' => '44',
                'name' => 'Villaba',
            ),
            8 => 
            array (
                'id' => 1009,
                'province_id' => '45',
                'name' => 'Allen',
            ),
            9 => 
            array (
                'id' => 1010,
                'province_id' => '45',
                'name' => 'Biri',
            ),
            10 => 
            array (
                'id' => 1011,
                'province_id' => '45',
                'name' => 'Bobon',
            ),
            11 => 
            array (
                'id' => 1012,
                'province_id' => '45',
                'name' => 'Capul',
            ),
            12 => 
            array (
                'id' => 1013,
                'province_id' => '45',
                'name' => 'Catarman',
            ),
            13 => 
            array (
                'id' => 1014,
                'province_id' => '45',
                'name' => 'Catubig',
            ),
            14 => 
            array (
                'id' => 1015,
                'province_id' => '45',
                'name' => 'Gamay',
            ),
            15 => 
            array (
                'id' => 1016,
                'province_id' => '45',
                'name' => 'Laoang',
            ),
            16 => 
            array (
                'id' => 1017,
                'province_id' => '45',
                'name' => 'Lapinig',
            ),
            17 => 
            array (
                'id' => 1018,
                'province_id' => '45',
                'name' => 'Las Navas',
            ),
            18 => 
            array (
                'id' => 1019,
                'province_id' => '45',
                'name' => 'Lavezares',
            ),
            19 => 
            array (
                'id' => 1020,
                'province_id' => '45',
                'name' => 'Mapanas',
            ),
            20 => 
            array (
                'id' => 1021,
                'province_id' => '45',
                'name' => 'Mondragon',
            ),
            21 => 
            array (
                'id' => 1022,
                'province_id' => '45',
                'name' => 'Palapag',
            ),
            22 => 
            array (
                'id' => 1023,
                'province_id' => '45',
                'name' => 'Pambujan',
            ),
            23 => 
            array (
                'id' => 1024,
                'province_id' => '45',
                'name' => 'Rosario',
            ),
            24 => 
            array (
                'id' => 1025,
                'province_id' => '45',
                'name' => 'San Antonio',
            ),
            25 => 
            array (
                'id' => 1026,
                'province_id' => '45',
                'name' => 'San Isidro',
            ),
            26 => 
            array (
                'id' => 1027,
                'province_id' => '45',
                'name' => 'San Jose',
            ),
            27 => 
            array (
                'id' => 1028,
                'province_id' => '45',
                'name' => 'San Roque',
            ),
            28 => 
            array (
                'id' => 1029,
                'province_id' => '45',
                'name' => 'San Vicente',
            ),
            29 => 
            array (
                'id' => 1030,
                'province_id' => '45',
                'name' => 'Silvino Lobos',
            ),
            30 => 
            array (
                'id' => 1031,
                'province_id' => '45',
                'name' => 'Victoria',
            ),
            31 => 
            array (
                'id' => 1032,
                'province_id' => '45',
                'name' => 'Lope De Vega',
            ),
            32 => 
            array (
                'id' => 1033,
                'province_id' => '46',
                'name' => 'Almagro',
            ),
            33 => 
            array (
                'id' => 1034,
                'province_id' => '46',
                'name' => 'Basey',
            ),
            34 => 
            array (
                'id' => 1035,
                'province_id' => '46',
                'name' => ' Calbayog',
            ),
            35 => 
            array (
                'id' => 1036,
                'province_id' => '46',
                'name' => 'Calbiga',
            ),
            36 => 
            array (
                'id' => 1037,
                'province_id' => '46',
                'name' => ' Catbalogan',
            ),
            37 => 
            array (
                'id' => 1038,
                'province_id' => '46',
                'name' => 'Daram',
            ),
            38 => 
            array (
                'id' => 1039,
                'province_id' => '46',
                'name' => 'Gandara',
            ),
            39 => 
            array (
                'id' => 1040,
                'province_id' => '46',
                'name' => 'Hinabangan',
            ),
            40 => 
            array (
                'id' => 1041,
                'province_id' => '46',
                'name' => 'Jiabong',
            ),
            41 => 
            array (
                'id' => 1042,
                'province_id' => '46',
                'name' => 'Marabut',
            ),
            42 => 
            array (
                'id' => 1043,
                'province_id' => '46',
                'name' => 'Matuguinao',
            ),
            43 => 
            array (
                'id' => 1044,
                'province_id' => '46',
                'name' => 'Motiong',
            ),
            44 => 
            array (
                'id' => 1045,
                'province_id' => '46',
                'name' => 'Pinabacdao',
            ),
            45 => 
            array (
                'id' => 1046,
                'province_id' => '46',
                'name' => 'San Jose De Buan',
            ),
            46 => 
            array (
                'id' => 1047,
                'province_id' => '46',
                'name' => 'San Sebastian',
            ),
            47 => 
            array (
                'id' => 1048,
                'province_id' => '46',
                'name' => 'Santa Margarita',
            ),
            48 => 
            array (
                'id' => 1049,
                'province_id' => '46',
                'name' => 'Santa Rita',
            ),
            49 => 
            array (
                'id' => 1050,
                'province_id' => '46',
                'name' => 'Santo Niño',
            ),
            50 => 
            array (
                'id' => 1051,
                'province_id' => '46',
                'name' => 'Talalora',
            ),
            51 => 
            array (
                'id' => 1052,
                'province_id' => '46',
                'name' => 'Tarangnan',
            ),
            52 => 
            array (
                'id' => 1053,
                'province_id' => '46',
                'name' => 'Villareal',
            ),
            53 => 
            array (
                'id' => 1054,
                'province_id' => '46',
            'name' => 'Paranas (Wright)',
            ),
            54 => 
            array (
                'id' => 1055,
                'province_id' => '46',
                'name' => 'Zumarraga',
            ),
            55 => 
            array (
                'id' => 1056,
                'province_id' => '46',
                'name' => 'Tagapul-An',
            ),
            56 => 
            array (
                'id' => 1057,
                'province_id' => '46',
                'name' => 'San Jorge',
            ),
            57 => 
            array (
                'id' => 1058,
                'province_id' => '46',
                'name' => 'Pagsanghan',
            ),
            58 => 
            array (
                'id' => 1059,
                'province_id' => '47',
                'name' => 'Anahawan',
            ),
            59 => 
            array (
                'id' => 1060,
                'province_id' => '47',
                'name' => 'Bontoc',
            ),
            60 => 
            array (
                'id' => 1061,
                'province_id' => '47',
                'name' => 'Hinunangan',
            ),
            61 => 
            array (
                'id' => 1062,
                'province_id' => '47',
                'name' => 'Hinundayan',
            ),
            62 => 
            array (
                'id' => 1063,
                'province_id' => '47',
                'name' => 'Libagon',
            ),
            63 => 
            array (
                'id' => 1064,
                'province_id' => '47',
                'name' => 'Liloan',
            ),
            64 => 
            array (
                'id' => 1065,
                'province_id' => '47',
                'name' => ' Maasin',
            ),
            65 => 
            array (
                'id' => 1066,
                'province_id' => '47',
                'name' => 'Macrohon',
            ),
            66 => 
            array (
                'id' => 1067,
                'province_id' => '47',
                'name' => 'Malitbog',
            ),
            67 => 
            array (
                'id' => 1068,
                'province_id' => '47',
                'name' => 'Padre Burgos',
            ),
            68 => 
            array (
                'id' => 1069,
                'province_id' => '47',
                'name' => 'Pintuyan',
            ),
            69 => 
            array (
                'id' => 1070,
                'province_id' => '47',
                'name' => 'Saint Bernard',
            ),
            70 => 
            array (
                'id' => 1071,
                'province_id' => '47',
                'name' => 'San Francisco',
            ),
            71 => 
            array (
                'id' => 1072,
                'province_id' => '47',
            'name' => 'San Juan (Cabalian)',
            ),
            72 => 
            array (
                'id' => 1073,
                'province_id' => '47',
                'name' => 'San Ricardo',
            ),
            73 => 
            array (
                'id' => 1074,
                'province_id' => '47',
                'name' => 'Silago',
            ),
            74 => 
            array (
                'id' => 1075,
                'province_id' => '47',
                'name' => 'Sogod',
            ),
            75 => 
            array (
                'id' => 1076,
                'province_id' => '47',
                'name' => 'Tomas Oppus',
            ),
            76 => 
            array (
                'id' => 1077,
                'province_id' => '47',
                'name' => 'Limasawa',
            ),
            77 => 
            array (
                'id' => 1078,
                'province_id' => '48',
                'name' => 'Almeria',
            ),
            78 => 
            array (
                'id' => 1079,
                'province_id' => '48',
                'name' => 'Biliran',
            ),
            79 => 
            array (
                'id' => 1080,
                'province_id' => '48',
                'name' => 'Cabucgayan',
            ),
            80 => 
            array (
                'id' => 1081,
                'province_id' => '48',
                'name' => 'Caibiran',
            ),
            81 => 
            array (
                'id' => 1082,
                'province_id' => '48',
                'name' => 'Culaba',
            ),
            82 => 
            array (
                'id' => 1083,
                'province_id' => '48',
                'name' => 'Kawayan',
            ),
            83 => 
            array (
                'id' => 1084,
                'province_id' => '48',
                'name' => 'Maripipi',
            ),
            84 => 
            array (
                'id' => 1085,
                'province_id' => '48',
                'name' => 'Naval',
            ),
            85 => 
            array (
                'id' => 1086,
                'province_id' => '49',
                'name' => ' Dapitan',
            ),
            86 => 
            array (
                'id' => 1087,
                'province_id' => '49',
                'name' => ' Dipolog',
            ),
            87 => 
            array (
                'id' => 1088,
                'province_id' => '49',
                'name' => 'Katipunan',
            ),
            88 => 
            array (
                'id' => 1089,
                'province_id' => '49',
                'name' => 'La Libertad',
            ),
            89 => 
            array (
                'id' => 1090,
                'province_id' => '49',
                'name' => 'Labason',
            ),
            90 => 
            array (
                'id' => 1091,
                'province_id' => '49',
                'name' => 'Liloy',
            ),
            91 => 
            array (
                'id' => 1092,
                'province_id' => '49',
                'name' => 'Manukan',
            ),
            92 => 
            array (
                'id' => 1093,
                'province_id' => '49',
                'name' => 'Mutia',
            ),
            93 => 
            array (
                'id' => 1094,
                'province_id' => '49',
            'name' => 'Piñan (New Piñan)',
            ),
            94 => 
            array (
                'id' => 1095,
                'province_id' => '49',
                'name' => 'Polanco',
            ),
            95 => 
            array (
                'id' => 1096,
                'province_id' => '49',
                'name' => 'Pres. Manuel A. Roxas',
            ),
            96 => 
            array (
                'id' => 1097,
                'province_id' => '49',
                'name' => 'Rizal',
            ),
            97 => 
            array (
                'id' => 1098,
                'province_id' => '49',
                'name' => 'Salug',
            ),
            98 => 
            array (
                'id' => 1099,
                'province_id' => '49',
                'name' => 'Sergio Osmeña Sr.',
            ),
            99 => 
            array (
                'id' => 1100,
                'province_id' => '49',
                'name' => 'Siayan',
            ),
            100 => 
            array (
                'id' => 1101,
                'province_id' => '49',
                'name' => 'Sibuco',
            ),
            101 => 
            array (
                'id' => 1102,
                'province_id' => '49',
                'name' => 'Sibutad',
            ),
            102 => 
            array (
                'id' => 1103,
                'province_id' => '49',
                'name' => 'Sindangan',
            ),
            103 => 
            array (
                'id' => 1104,
                'province_id' => '49',
                'name' => 'Siocon',
            ),
            104 => 
            array (
                'id' => 1105,
                'province_id' => '49',
                'name' => 'Sirawai',
            ),
            105 => 
            array (
                'id' => 1106,
                'province_id' => '49',
                'name' => 'Tampilisan',
            ),
            106 => 
            array (
                'id' => 1107,
                'province_id' => '49',
            'name' => 'Jose Dalman (Ponot)',
            ),
            107 => 
            array (
                'id' => 1108,
                'province_id' => '49',
                'name' => 'Gutalac',
            ),
            108 => 
            array (
                'id' => 1109,
                'province_id' => '49',
                'name' => 'Baliguian',
            ),
            109 => 
            array (
                'id' => 1110,
                'province_id' => '49',
                'name' => 'Godod',
            ),
            110 => 
            array (
                'id' => 1111,
                'province_id' => '49',
            'name' => 'Bacungan (Leon T. Postigo)',
            ),
            111 => 
            array (
                'id' => 1112,
                'province_id' => '49',
                'name' => 'Kalawit',
            ),
            112 => 
            array (
                'id' => 1113,
                'province_id' => '50',
                'name' => 'Aurora',
            ),
            113 => 
            array (
                'id' => 1114,
                'province_id' => '50',
                'name' => 'Bayog',
            ),
            114 => 
            array (
                'id' => 1115,
                'province_id' => '50',
                'name' => 'Dimataling',
            ),
            115 => 
            array (
                'id' => 1116,
                'province_id' => '50',
                'name' => 'Dinas',
            ),
            116 => 
            array (
                'id' => 1117,
                'province_id' => '50',
                'name' => 'Dumalinao',
            ),
            117 => 
            array (
                'id' => 1118,
                'province_id' => '50',
                'name' => 'Dumingag',
            ),
            118 => 
            array (
                'id' => 1119,
                'province_id' => '50',
                'name' => 'Kumalarang',
            ),
            119 => 
            array (
                'id' => 1120,
                'province_id' => '50',
                'name' => 'Labangan',
            ),
            120 => 
            array (
                'id' => 1121,
                'province_id' => '50',
                'name' => 'Lapuyan',
            ),
            121 => 
            array (
                'id' => 1122,
                'province_id' => '50',
                'name' => 'Mahayag',
            ),
            122 => 
            array (
                'id' => 1123,
                'province_id' => '50',
                'name' => 'Margosatubig',
            ),
            123 => 
            array (
                'id' => 1124,
                'province_id' => '50',
                'name' => 'Midsalip',
            ),
            124 => 
            array (
                'id' => 1125,
                'province_id' => '50',
                'name' => 'Molave',
            ),
            125 => 
            array (
                'id' => 1126,
                'province_id' => '50',
                'name' => ' Pagadian',
            ),
            126 => 
            array (
                'id' => 1127,
                'province_id' => '50',
            'name' => 'Ramon Magsaysay (Liargo)',
            ),
            127 => 
            array (
                'id' => 1128,
                'province_id' => '50',
                'name' => 'San Miguel',
            ),
            128 => 
            array (
                'id' => 1129,
                'province_id' => '50',
                'name' => 'San Pablo',
            ),
            129 => 
            array (
                'id' => 1130,
                'province_id' => '50',
                'name' => 'Tabina',
            ),
            130 => 
            array (
                'id' => 1131,
                'province_id' => '50',
                'name' => 'Tambulig',
            ),
            131 => 
            array (
                'id' => 1132,
                'province_id' => '50',
                'name' => 'Tukuran',
            ),
            132 => 
            array (
                'id' => 1133,
                'province_id' => '50',
                'name' => ' Zamboanga',
            ),
            133 => 
            array (
                'id' => 1134,
                'province_id' => '50',
                'name' => 'Lakewood',
            ),
            134 => 
            array (
                'id' => 1135,
                'province_id' => '50',
                'name' => 'Josefina',
            ),
            135 => 
            array (
                'id' => 1136,
                'province_id' => '50',
                'name' => 'Pitogo',
            ),
            136 => 
            array (
                'id' => 1137,
                'province_id' => '50',
            'name' => 'Sominot (Don Mariano Marcos)',
            ),
            137 => 
            array (
                'id' => 1138,
                'province_id' => '50',
                'name' => 'Vincenzo A. Sagun',
            ),
            138 => 
            array (
                'id' => 1139,
                'province_id' => '50',
                'name' => 'Guipos',
            ),
            139 => 
            array (
                'id' => 1140,
                'province_id' => '50',
                'name' => 'Tigbao',
            ),
            140 => 
            array (
                'id' => 1141,
                'province_id' => '51',
                'name' => 'Alicia',
            ),
            141 => 
            array (
                'id' => 1142,
                'province_id' => '51',
                'name' => 'Buug',
            ),
            142 => 
            array (
                'id' => 1143,
                'province_id' => '51',
                'name' => 'Diplahan',
            ),
            143 => 
            array (
                'id' => 1144,
                'province_id' => '51',
                'name' => 'Imelda',
            ),
            144 => 
            array (
                'id' => 1145,
                'province_id' => '51',
                'name' => 'Ipil',
            ),
            145 => 
            array (
                'id' => 1146,
                'province_id' => '51',
                'name' => 'Kabasalan',
            ),
            146 => 
            array (
                'id' => 1147,
                'province_id' => '51',
                'name' => 'Mabuhay',
            ),
            147 => 
            array (
                'id' => 1148,
                'province_id' => '51',
                'name' => 'Malangas',
            ),
            148 => 
            array (
                'id' => 1149,
                'province_id' => '51',
                'name' => 'Naga',
            ),
            149 => 
            array (
                'id' => 1150,
                'province_id' => '51',
                'name' => 'Olutanga',
            ),
            150 => 
            array (
                'id' => 1151,
                'province_id' => '51',
                'name' => 'Payao',
            ),
            151 => 
            array (
                'id' => 1152,
                'province_id' => '51',
                'name' => 'Roseller Lim',
            ),
            152 => 
            array (
                'id' => 1153,
                'province_id' => '51',
                'name' => 'Siay',
            ),
            153 => 
            array (
                'id' => 1154,
                'province_id' => '51',
                'name' => 'Talusan',
            ),
            154 => 
            array (
                'id' => 1155,
                'province_id' => '51',
                'name' => 'Titay',
            ),
            155 => 
            array (
                'id' => 1156,
                'province_id' => '51',
                'name' => 'Tungawan',
            ),
            156 => 
            array (
                'id' => 1157,
                'province_id' => '52',
                'name' => ' Isabela',
            ),
            157 => 
            array (
                'id' => 1158,
                'province_id' => '53',
                'name' => 'Baungon',
            ),
            158 => 
            array (
                'id' => 1159,
                'province_id' => '53',
                'name' => 'Damulog',
            ),
            159 => 
            array (
                'id' => 1160,
                'province_id' => '53',
                'name' => 'Dangcagan',
            ),
            160 => 
            array (
                'id' => 1161,
                'province_id' => '53',
                'name' => 'Don Carlos',
            ),
            161 => 
            array (
                'id' => 1162,
                'province_id' => '53',
                'name' => 'Impasug-Ong',
            ),
            162 => 
            array (
                'id' => 1163,
                'province_id' => '53',
                'name' => 'Kadingilan',
            ),
            163 => 
            array (
                'id' => 1164,
                'province_id' => '53',
                'name' => 'Kalilangan',
            ),
            164 => 
            array (
                'id' => 1165,
                'province_id' => '53',
                'name' => 'Kibawe',
            ),
            165 => 
            array (
                'id' => 1166,
                'province_id' => '53',
                'name' => 'Kitaotao',
            ),
            166 => 
            array (
                'id' => 1167,
                'province_id' => '53',
                'name' => 'Lantapan',
            ),
            167 => 
            array (
                'id' => 1168,
                'province_id' => '53',
                'name' => 'Libona',
            ),
            168 => 
            array (
                'id' => 1169,
                'province_id' => '53',
                'name' => ' Malaybalay',
            ),
            169 => 
            array (
                'id' => 1170,
                'province_id' => '53',
                'name' => 'Malitbog',
            ),
            170 => 
            array (
                'id' => 1171,
                'province_id' => '53',
                'name' => 'Manolo Fortich',
            ),
            171 => 
            array (
                'id' => 1172,
                'province_id' => '53',
                'name' => 'Maramag',
            ),
            172 => 
            array (
                'id' => 1173,
                'province_id' => '53',
                'name' => 'Pangantucan',
            ),
            173 => 
            array (
                'id' => 1174,
                'province_id' => '53',
                'name' => 'Quezon',
            ),
            174 => 
            array (
                'id' => 1175,
                'province_id' => '53',
                'name' => 'San Fernando',
            ),
            175 => 
            array (
                'id' => 1176,
                'province_id' => '53',
                'name' => 'Sumilao',
            ),
            176 => 
            array (
                'id' => 1177,
                'province_id' => '53',
                'name' => 'Talakag',
            ),
            177 => 
            array (
                'id' => 1178,
                'province_id' => '53',
                'name' => ' Valencia',
            ),
            178 => 
            array (
                'id' => 1179,
                'province_id' => '53',
                'name' => 'Cabanglasan',
            ),
            179 => 
            array (
                'id' => 1180,
                'province_id' => '54',
                'name' => 'Catarman',
            ),
            180 => 
            array (
                'id' => 1181,
                'province_id' => '54',
                'name' => 'Guinsiliban',
            ),
            181 => 
            array (
                'id' => 1182,
                'province_id' => '54',
                'name' => 'Mahinog',
            ),
            182 => 
            array (
                'id' => 1183,
                'province_id' => '54',
                'name' => 'Mambajao',
            ),
            183 => 
            array (
                'id' => 1184,
                'province_id' => '54',
                'name' => 'Sagay',
            ),
            184 => 
            array (
                'id' => 1185,
                'province_id' => '55',
                'name' => 'Bacolod',
            ),
            185 => 
            array (
                'id' => 1186,
                'province_id' => '55',
                'name' => 'Baloi',
            ),
            186 => 
            array (
                'id' => 1187,
                'province_id' => '55',
                'name' => 'Baroy',
            ),
            187 => 
            array (
                'id' => 1188,
                'province_id' => '55',
                'name' => ' Iligan',
            ),
            188 => 
            array (
                'id' => 1189,
                'province_id' => '55',
                'name' => 'Kapatagan',
            ),
            189 => 
            array (
                'id' => 1190,
                'province_id' => '55',
            'name' => 'Sultan Naga Dimaporo (Karomatan)',
            ),
            190 => 
            array (
                'id' => 1191,
                'province_id' => '55',
                'name' => 'Kauswagan',
            ),
            191 => 
            array (
                'id' => 1192,
                'province_id' => '55',
                'name' => 'Kolambugan',
            ),
            192 => 
            array (
                'id' => 1193,
                'province_id' => '55',
                'name' => 'Lala',
            ),
            193 => 
            array (
                'id' => 1194,
                'province_id' => '55',
                'name' => 'Linamon',
            ),
            194 => 
            array (
                'id' => 1195,
                'province_id' => '55',
                'name' => 'Magsaysay',
            ),
            195 => 
            array (
                'id' => 1196,
                'province_id' => '55',
                'name' => 'Maigo',
            ),
            196 => 
            array (
                'id' => 1197,
                'province_id' => '55',
                'name' => 'Matungao',
            ),
            197 => 
            array (
                'id' => 1198,
                'province_id' => '55',
                'name' => 'Munai',
            ),
            198 => 
            array (
                'id' => 1199,
                'province_id' => '55',
                'name' => 'Nunungan',
            ),
            199 => 
            array (
                'id' => 1200,
                'province_id' => '55',
                'name' => 'Pantao Ragat',
            ),
            200 => 
            array (
                'id' => 1201,
                'province_id' => '55',
                'name' => 'Poona Piagapo',
            ),
            201 => 
            array (
                'id' => 1202,
                'province_id' => '55',
                'name' => 'Salvador',
            ),
            202 => 
            array (
                'id' => 1203,
                'province_id' => '55',
                'name' => 'Sapad',
            ),
            203 => 
            array (
                'id' => 1204,
                'province_id' => '55',
                'name' => 'Tagoloan',
            ),
            204 => 
            array (
                'id' => 1205,
                'province_id' => '55',
                'name' => 'Tangcal',
            ),
            205 => 
            array (
                'id' => 1206,
                'province_id' => '55',
                'name' => 'Tubod',
            ),
            206 => 
            array (
                'id' => 1207,
                'province_id' => '55',
                'name' => 'Pantar',
            ),
            207 => 
            array (
                'id' => 1208,
                'province_id' => '56',
                'name' => 'Aloran',
            ),
            208 => 
            array (
                'id' => 1209,
                'province_id' => '56',
                'name' => 'Baliangao',
            ),
            209 => 
            array (
                'id' => 1210,
                'province_id' => '56',
                'name' => 'Bonifacio',
            ),
            210 => 
            array (
                'id' => 1211,
                'province_id' => '56',
                'name' => 'Calamba',
            ),
            211 => 
            array (
                'id' => 1212,
                'province_id' => '56',
                'name' => 'Clarin',
            ),
            212 => 
            array (
                'id' => 1213,
                'province_id' => '56',
                'name' => 'Concepcion',
            ),
            213 => 
            array (
                'id' => 1214,
                'province_id' => '56',
                'name' => 'Jimenez',
            ),
            214 => 
            array (
                'id' => 1215,
                'province_id' => '56',
                'name' => 'Lopez Jaena',
            ),
            215 => 
            array (
                'id' => 1216,
                'province_id' => '56',
                'name' => ' Oroquieta',
            ),
            216 => 
            array (
                'id' => 1217,
                'province_id' => '56',
                'name' => ' Ozamiz',
            ),
            217 => 
            array (
                'id' => 1218,
                'province_id' => '56',
                'name' => 'Panaon',
            ),
            218 => 
            array (
                'id' => 1219,
                'province_id' => '56',
                'name' => 'Plaridel',
            ),
            219 => 
            array (
                'id' => 1220,
                'province_id' => '56',
                'name' => 'Sapang Dalaga',
            ),
            220 => 
            array (
                'id' => 1221,
                'province_id' => '56',
                'name' => 'Sinacaban',
            ),
            221 => 
            array (
                'id' => 1222,
                'province_id' => '56',
                'name' => ' Tangub',
            ),
            222 => 
            array (
                'id' => 1223,
                'province_id' => '56',
                'name' => 'Tudela',
            ),
            223 => 
            array (
                'id' => 1224,
                'province_id' => '56',
            'name' => 'Don Victoriano Chiongbian  (Don Mariano Marcos)',
            ),
            224 => 
            array (
                'id' => 1225,
                'province_id' => '57',
                'name' => 'Alubijid',
            ),
            225 => 
            array (
                'id' => 1226,
                'province_id' => '57',
                'name' => 'Balingasag',
            ),
            226 => 
            array (
                'id' => 1227,
                'province_id' => '57',
                'name' => 'Balingoan',
            ),
            227 => 
            array (
                'id' => 1228,
                'province_id' => '57',
                'name' => 'Binuangan',
            ),
            228 => 
            array (
                'id' => 1229,
                'province_id' => '57',
                'name' => ' Cagayan De Oro',
            ),
            229 => 
            array (
                'id' => 1230,
                'province_id' => '57',
                'name' => 'Claveria',
            ),
            230 => 
            array (
                'id' => 1231,
                'province_id' => '57',
                'name' => ' El Salvador',
            ),
            231 => 
            array (
                'id' => 1232,
                'province_id' => '57',
                'name' => ' Gingoog',
            ),
            232 => 
            array (
                'id' => 1233,
                'province_id' => '57',
                'name' => 'Gitagum',
            ),
            233 => 
            array (
                'id' => 1234,
                'province_id' => '57',
                'name' => 'Initao',
            ),
            234 => 
            array (
                'id' => 1235,
                'province_id' => '57',
                'name' => 'Jasaan',
            ),
            235 => 
            array (
                'id' => 1236,
                'province_id' => '57',
                'name' => 'Kinoguitan',
            ),
            236 => 
            array (
                'id' => 1237,
                'province_id' => '57',
                'name' => 'Lagonglong',
            ),
            237 => 
            array (
                'id' => 1238,
                'province_id' => '57',
                'name' => 'Laguindingan',
            ),
            238 => 
            array (
                'id' => 1239,
                'province_id' => '57',
                'name' => 'Libertad',
            ),
            239 => 
            array (
                'id' => 1240,
                'province_id' => '57',
                'name' => 'Lugait',
            ),
            240 => 
            array (
                'id' => 1241,
                'province_id' => '57',
            'name' => 'Magsaysay (Linugos)',
            ),
            241 => 
            array (
                'id' => 1242,
                'province_id' => '57',
                'name' => 'Manticao',
            ),
            242 => 
            array (
                'id' => 1243,
                'province_id' => '57',
                'name' => 'Medina',
            ),
            243 => 
            array (
                'id' => 1244,
                'province_id' => '57',
                'name' => 'Naawan',
            ),
            244 => 
            array (
                'id' => 1245,
                'province_id' => '57',
                'name' => 'Opol',
            ),
            245 => 
            array (
                'id' => 1246,
                'province_id' => '57',
                'name' => 'Salay',
            ),
            246 => 
            array (
                'id' => 1247,
                'province_id' => '57',
                'name' => 'Sugbongcogon',
            ),
            247 => 
            array (
                'id' => 1248,
                'province_id' => '57',
                'name' => 'Tagoloan',
            ),
            248 => 
            array (
                'id' => 1249,
                'province_id' => '57',
                'name' => 'Talisayan',
            ),
            249 => 
            array (
                'id' => 1250,
                'province_id' => '57',
                'name' => 'Villanueva',
            ),
            250 => 
            array (
                'id' => 1251,
                'province_id' => '58',
            'name' => 'Asuncion (Saug)',
            ),
            251 => 
            array (
                'id' => 1252,
                'province_id' => '58',
                'name' => 'Carmen',
            ),
            252 => 
            array (
                'id' => 1253,
                'province_id' => '58',
                'name' => 'Kapalong',
            ),
            253 => 
            array (
                'id' => 1254,
                'province_id' => '58',
                'name' => 'New Corella',
            ),
            254 => 
            array (
                'id' => 1255,
                'province_id' => '58',
                'name' => ' Panabo',
            ),
            255 => 
            array (
                'id' => 1256,
                'province_id' => '58',
                'name' => 'Island Garden  Samal',
            ),
            256 => 
            array (
                'id' => 1257,
                'province_id' => '58',
                'name' => 'Santo Tomas',
            ),
            257 => 
            array (
                'id' => 1258,
                'province_id' => '58',
                'name' => ' Tagum',
            ),
            258 => 
            array (
                'id' => 1259,
                'province_id' => '58',
                'name' => 'Talaingod',
            ),
            259 => 
            array (
                'id' => 1260,
                'province_id' => '58',
                'name' => 'Braulio E. Dujali',
            ),
            260 => 
            array (
                'id' => 1261,
                'province_id' => '58',
                'name' => 'San Isidro',
            ),
            261 => 
            array (
                'id' => 1262,
                'province_id' => '59',
                'name' => 'Bansalan',
            ),
            262 => 
            array (
                'id' => 1263,
                'province_id' => '59',
                'name' => ' Davao',
            ),
            263 => 
            array (
                'id' => 1264,
                'province_id' => '59',
                'name' => ' Digos',
            ),
            264 => 
            array (
                'id' => 1265,
                'province_id' => '59',
                'name' => 'Hagonoy',
            ),
            265 => 
            array (
                'id' => 1266,
                'province_id' => '59',
                'name' => 'Kiblawan',
            ),
            266 => 
            array (
                'id' => 1267,
                'province_id' => '59',
                'name' => 'Magsaysay',
            ),
            267 => 
            array (
                'id' => 1268,
                'province_id' => '59',
                'name' => 'Malalag',
            ),
            268 => 
            array (
                'id' => 1269,
                'province_id' => '59',
                'name' => 'Matanao',
            ),
            269 => 
            array (
                'id' => 1270,
                'province_id' => '59',
                'name' => 'Padada',
            ),
            270 => 
            array (
                'id' => 1271,
                'province_id' => '59',
                'name' => 'Santa Cruz',
            ),
            271 => 
            array (
                'id' => 1272,
                'province_id' => '59',
                'name' => 'Sulop',
            ),
            272 => 
            array (
                'id' => 1273,
                'province_id' => '60',
                'name' => 'Baganga',
            ),
            273 => 
            array (
                'id' => 1274,
                'province_id' => '60',
                'name' => 'Banaybanay',
            ),
            274 => 
            array (
                'id' => 1275,
                'province_id' => '60',
                'name' => 'Boston',
            ),
            275 => 
            array (
                'id' => 1276,
                'province_id' => '60',
                'name' => 'Caraga',
            ),
            276 => 
            array (
                'id' => 1277,
                'province_id' => '60',
                'name' => 'Cateel',
            ),
            277 => 
            array (
                'id' => 1278,
                'province_id' => '60',
                'name' => 'Governor Generoso',
            ),
            278 => 
            array (
                'id' => 1279,
                'province_id' => '60',
                'name' => 'Lupon',
            ),
            279 => 
            array (
                'id' => 1280,
                'province_id' => '60',
                'name' => 'Manay',
            ),
            280 => 
            array (
                'id' => 1281,
                'province_id' => '60',
                'name' => ' Mati',
            ),
            281 => 
            array (
                'id' => 1282,
                'province_id' => '60',
                'name' => 'San Isidro',
            ),
            282 => 
            array (
                'id' => 1283,
                'province_id' => '60',
                'name' => 'Tarragona',
            ),
            283 => 
            array (
                'id' => 1284,
                'province_id' => '61',
                'name' => 'Compostela',
            ),
            284 => 
            array (
                'id' => 1285,
                'province_id' => '61',
            'name' => 'Laak (San Vicente)',
            ),
            285 => 
            array (
                'id' => 1286,
                'province_id' => '61',
            'name' => 'Mabini (Doña Alicia)',
            ),
            286 => 
            array (
                'id' => 1287,
                'province_id' => '61',
                'name' => 'Maco',
            ),
            287 => 
            array (
                'id' => 1288,
                'province_id' => '61',
            'name' => 'Maragusan (San Mariano)',
            ),
            288 => 
            array (
                'id' => 1289,
                'province_id' => '61',
                'name' => 'Mawab',
            ),
            289 => 
            array (
                'id' => 1290,
                'province_id' => '61',
                'name' => 'Monkayo',
            ),
            290 => 
            array (
                'id' => 1291,
                'province_id' => '61',
                'name' => 'Montevista',
            ),
            291 => 
            array (
                'id' => 1292,
                'province_id' => '61',
                'name' => 'Nabunturan',
            ),
            292 => 
            array (
                'id' => 1293,
                'province_id' => '61',
                'name' => 'New Bataan',
            ),
            293 => 
            array (
                'id' => 1294,
                'province_id' => '61',
                'name' => 'Pantukan',
            ),
            294 => 
            array (
                'id' => 1295,
                'province_id' => '62',
                'name' => 'Don Marcelino',
            ),
            295 => 
            array (
                'id' => 1296,
                'province_id' => '62',
            'name' => 'Jose Abad Santos (Trinidad)',
            ),
            296 => 
            array (
                'id' => 1297,
                'province_id' => '62',
                'name' => 'Malita',
            ),
            297 => 
            array (
                'id' => 1298,
                'province_id' => '62',
                'name' => 'Santa Maria',
            ),
            298 => 
            array (
                'id' => 1299,
                'province_id' => '62',
                'name' => 'Sarangani',
            ),
            299 => 
            array (
                'id' => 1300,
                'province_id' => '63',
                'name' => 'Alamada',
            ),
            300 => 
            array (
                'id' => 1301,
                'province_id' => '63',
                'name' => 'Carmen',
            ),
            301 => 
            array (
                'id' => 1302,
                'province_id' => '63',
                'name' => 'Kabacan',
            ),
            302 => 
            array (
                'id' => 1303,
                'province_id' => '63',
                'name' => ' Kidapawan',
            ),
            303 => 
            array (
                'id' => 1304,
                'province_id' => '63',
                'name' => 'Libungan',
            ),
            304 => 
            array (
                'id' => 1305,
                'province_id' => '63',
                'name' => 'Magpet',
            ),
            305 => 
            array (
                'id' => 1306,
                'province_id' => '63',
                'name' => 'Makilala',
            ),
            306 => 
            array (
                'id' => 1307,
                'province_id' => '63',
                'name' => 'Matalam',
            ),
            307 => 
            array (
                'id' => 1308,
                'province_id' => '63',
                'name' => 'Midsayap',
            ),
            308 => 
            array (
                'id' => 1309,
                'province_id' => '63',
                'name' => 'M\'Lang',
            ),
            309 => 
            array (
                'id' => 1310,
                'province_id' => '63',
                'name' => 'Pigkawayan',
            ),
            310 => 
            array (
                'id' => 1311,
                'province_id' => '63',
                'name' => 'Pikit',
            ),
            311 => 
            array (
                'id' => 1312,
                'province_id' => '63',
                'name' => 'President Roxas',
            ),
            312 => 
            array (
                'id' => 1313,
                'province_id' => '63',
                'name' => 'Tulunan',
            ),
            313 => 
            array (
                'id' => 1314,
                'province_id' => '63',
                'name' => 'Antipas',
            ),
            314 => 
            array (
                'id' => 1315,
                'province_id' => '63',
                'name' => 'Banisilan',
            ),
            315 => 
            array (
                'id' => 1316,
                'province_id' => '63',
                'name' => 'Aleosan',
            ),
            316 => 
            array (
                'id' => 1317,
                'province_id' => '63',
                'name' => 'Arakan',
            ),
            317 => 
            array (
                'id' => 1318,
                'province_id' => '100',
                'name' => ' Cotabato City',
            ),
            318 => 
            array (
                'id' => 1319,
                'province_id' => '64',
                'name' => 'Banga',
            ),
            319 => 
            array (
                'id' => 1320,
                'province_id' => '64',
            'name' => ' General Santos (Dadiangas)',
            ),
            320 => 
            array (
                'id' => 1321,
                'province_id' => '64',
                'name' => ' Koronadal',
            ),
            321 => 
            array (
                'id' => 1322,
                'province_id' => '64',
                'name' => 'Norala',
            ),
            322 => 
            array (
                'id' => 1323,
                'province_id' => '64',
                'name' => 'Polomolok',
            ),
            323 => 
            array (
                'id' => 1324,
                'province_id' => '64',
                'name' => 'Surallah',
            ),
            324 => 
            array (
                'id' => 1325,
                'province_id' => '64',
                'name' => 'Tampakan',
            ),
            325 => 
            array (
                'id' => 1326,
                'province_id' => '64',
                'name' => 'Tantangan',
            ),
            326 => 
            array (
                'id' => 1327,
                'province_id' => '64',
                'name' => 'T\'Boli',
            ),
            327 => 
            array (
                'id' => 1328,
                'province_id' => '64',
                'name' => 'Tupi',
            ),
            328 => 
            array (
                'id' => 1329,
                'province_id' => '64',
                'name' => 'Santo Niño',
            ),
            329 => 
            array (
                'id' => 1330,
                'province_id' => '64',
                'name' => 'Lake Sebu',
            ),
            330 => 
            array (
                'id' => 1331,
                'province_id' => '65',
                'name' => 'Bagumbayan',
            ),
            331 => 
            array (
                'id' => 1332,
                'province_id' => '65',
                'name' => 'Columbio',
            ),
            332 => 
            array (
                'id' => 1333,
                'province_id' => '65',
                'name' => 'Esperanza',
            ),
            333 => 
            array (
                'id' => 1334,
                'province_id' => '65',
                'name' => 'Isulan',
            ),
            334 => 
            array (
                'id' => 1335,
                'province_id' => '65',
                'name' => 'Kalamansig',
            ),
            335 => 
            array (
                'id' => 1336,
                'province_id' => '65',
                'name' => 'Lebak',
            ),
            336 => 
            array (
                'id' => 1337,
                'province_id' => '65',
                'name' => 'Lutayan',
            ),
            337 => 
            array (
                'id' => 1338,
                'province_id' => '65',
            'name' => 'Lambayong (Mariano Marcos)',
            ),
            338 => 
            array (
                'id' => 1339,
                'province_id' => '65',
                'name' => 'Palimbang',
            ),
            339 => 
            array (
                'id' => 1340,
                'province_id' => '65',
                'name' => 'President Quirino',
            ),
            340 => 
            array (
                'id' => 1341,
                'province_id' => '65',
                'name' => ' Tacurong',
            ),
            341 => 
            array (
                'id' => 1342,
                'province_id' => '65',
                'name' => 'Sen. Ninoy Aquino',
            ),
            342 => 
            array (
                'id' => 1343,
                'province_id' => '66',
                'name' => 'Alabel',
            ),
            343 => 
            array (
                'id' => 1344,
                'province_id' => '66',
                'name' => 'Glan',
            ),
            344 => 
            array (
                'id' => 1345,
                'province_id' => '66',
                'name' => 'Kiamba',
            ),
            345 => 
            array (
                'id' => 1346,
                'province_id' => '66',
                'name' => 'Maasim',
            ),
            346 => 
            array (
                'id' => 1347,
                'province_id' => '66',
                'name' => 'Maitum',
            ),
            347 => 
            array (
                'id' => 1348,
                'province_id' => '66',
                'name' => 'Malapatan',
            ),
            348 => 
            array (
                'id' => 1349,
                'province_id' => '66',
                'name' => 'Malungon',
            ),
            349 => 
            array (
                'id' => 1350,
                'province_id' => '88',
                'name' => 'Tondo I / II',
            ),
            350 => 
            array (
                'id' => 1351,
                'province_id' => '88',
                'name' => 'Binondo',
            ),
            351 => 
            array (
                'id' => 1352,
                'province_id' => '88',
                'name' => 'Quiapo',
            ),
            352 => 
            array (
                'id' => 1353,
                'province_id' => '88',
                'name' => 'San Nicolas',
            ),
            353 => 
            array (
                'id' => 1354,
                'province_id' => '88',
                'name' => 'Santa Cruz',
            ),
            354 => 
            array (
                'id' => 1355,
                'province_id' => '88',
                'name' => 'Sampaloc',
            ),
            355 => 
            array (
                'id' => 1356,
                'province_id' => '88',
                'name' => 'San Miguel',
            ),
            356 => 
            array (
                'id' => 1357,
                'province_id' => '88',
                'name' => 'Ermita',
            ),
            357 => 
            array (
                'id' => 1358,
                'province_id' => '88',
                'name' => 'Intramuros',
            ),
            358 => 
            array (
                'id' => 1359,
                'province_id' => '88',
                'name' => 'Malate',
            ),
            359 => 
            array (
                'id' => 1360,
                'province_id' => '88',
                'name' => 'Paco',
            ),
            360 => 
            array (
                'id' => 1361,
                'province_id' => '88',
                'name' => 'Pandacan',
            ),
            361 => 
            array (
                'id' => 1362,
                'province_id' => '88',
                'name' => 'Port Area',
            ),
            362 => 
            array (
                'id' => 1363,
                'province_id' => '88',
                'name' => 'Santa Ana',
            ),
            363 => 
            array (
                'id' => 1364,
                'province_id' => '87',
                'name' => ' Mandaluyong City',
            ),
            364 => 
            array (
                'id' => 1365,
                'province_id' => '89',
                'name' => ' Marikina City',
            ),
            365 => 
            array (
                'id' => 1366,
                'province_id' => '94',
                'name' => ' Pasig City',
            ),
            366 => 
            array (
                'id' => 1367,
                'province_id' => '96',
                'name' => 'Quezon City',
            ),
            367 => 
            array (
                'id' => 1368,
                'province_id' => '97',
                'name' => ' San Juan City',
            ),
            368 => 
            array (
                'id' => 1369,
                'province_id' => '83',
                'name' => ' Caloocan City',
            ),
            369 => 
            array (
                'id' => 1370,
                'province_id' => '86',
                'name' => ' Malabon City',
            ),
            370 => 
            array (
                'id' => 1371,
                'province_id' => '91',
                'name' => ' Navotas City',
            ),
            371 => 
            array (
                'id' => 1372,
                'province_id' => '99',
                'name' => ' Valenzuela City',
            ),
            372 => 
            array (
                'id' => 1373,
                'province_id' => '84',
                'name' => ' Las Piñas City',
            ),
            373 => 
            array (
                'id' => 1374,
                'province_id' => '85',
                'name' => ' Makati City',
            ),
            374 => 
            array (
                'id' => 1375,
                'province_id' => '90',
                'name' => ' Muntinlupa City',
            ),
            375 => 
            array (
                'id' => 1376,
                'province_id' => '92',
                'name' => ' Parañaque City',
            ),
            376 => 
            array (
                'id' => 1377,
                'province_id' => '93',
                'name' => 'Pasay City',
            ),
            377 => 
            array (
                'id' => 1378,
                'province_id' => '95',
                'name' => 'Pateros',
            ),
            378 => 
            array (
                'id' => 1379,
                'province_id' => '98',
                'name' => ' Taguig City',
            ),
            379 => 
            array (
                'id' => 1380,
                'province_id' => '67',
                'name' => 'Bangued',
            ),
            380 => 
            array (
                'id' => 1381,
                'province_id' => '67',
                'name' => 'Boliney',
            ),
            381 => 
            array (
                'id' => 1382,
                'province_id' => '67',
                'name' => 'Bucay',
            ),
            382 => 
            array (
                'id' => 1383,
                'province_id' => '67',
                'name' => 'Bucloc',
            ),
            383 => 
            array (
                'id' => 1384,
                'province_id' => '67',
                'name' => 'Daguioman',
            ),
            384 => 
            array (
                'id' => 1385,
                'province_id' => '67',
                'name' => 'Danglas',
            ),
            385 => 
            array (
                'id' => 1386,
                'province_id' => '67',
                'name' => 'Dolores',
            ),
            386 => 
            array (
                'id' => 1387,
                'province_id' => '67',
                'name' => 'La Paz',
            ),
            387 => 
            array (
                'id' => 1388,
                'province_id' => '67',
                'name' => 'Lacub',
            ),
            388 => 
            array (
                'id' => 1389,
                'province_id' => '67',
                'name' => 'Lagangilang',
            ),
            389 => 
            array (
                'id' => 1390,
                'province_id' => '67',
                'name' => 'Lagayan',
            ),
            390 => 
            array (
                'id' => 1391,
                'province_id' => '67',
                'name' => 'Langiden',
            ),
            391 => 
            array (
                'id' => 1392,
                'province_id' => '67',
            'name' => 'Licuan-Baay (Licuan)',
            ),
            392 => 
            array (
                'id' => 1393,
                'province_id' => '67',
                'name' => 'Luba',
            ),
            393 => 
            array (
                'id' => 1394,
                'province_id' => '67',
                'name' => 'Malibcong',
            ),
            394 => 
            array (
                'id' => 1395,
                'province_id' => '67',
                'name' => 'Manabo',
            ),
            395 => 
            array (
                'id' => 1396,
                'province_id' => '67',
                'name' => 'Peñarrubia',
            ),
            396 => 
            array (
                'id' => 1397,
                'province_id' => '67',
                'name' => 'Pidigan',
            ),
            397 => 
            array (
                'id' => 1398,
                'province_id' => '67',
                'name' => 'Pilar',
            ),
            398 => 
            array (
                'id' => 1399,
                'province_id' => '67',
                'name' => 'Sallapadan',
            ),
            399 => 
            array (
                'id' => 1400,
                'province_id' => '67',
                'name' => 'San Isidro',
            ),
            400 => 
            array (
                'id' => 1401,
                'province_id' => '67',
                'name' => 'San Juan',
            ),
            401 => 
            array (
                'id' => 1402,
                'province_id' => '67',
                'name' => 'San Quintin',
            ),
            402 => 
            array (
                'id' => 1403,
                'province_id' => '67',
                'name' => 'Tayum',
            ),
            403 => 
            array (
                'id' => 1404,
                'province_id' => '67',
                'name' => 'Tineg',
            ),
            404 => 
            array (
                'id' => 1405,
                'province_id' => '67',
                'name' => 'Tubo',
            ),
            405 => 
            array (
                'id' => 1406,
                'province_id' => '67',
                'name' => 'Villaviciosa',
            ),
            406 => 
            array (
                'id' => 1407,
                'province_id' => '68',
                'name' => 'Atok',
            ),
            407 => 
            array (
                'id' => 1408,
                'province_id' => '68',
                'name' => ' Baguio',
            ),
            408 => 
            array (
                'id' => 1409,
                'province_id' => '68',
                'name' => 'Bakun',
            ),
            409 => 
            array (
                'id' => 1410,
                'province_id' => '68',
                'name' => 'Bokod',
            ),
            410 => 
            array (
                'id' => 1411,
                'province_id' => '68',
                'name' => 'Buguias',
            ),
            411 => 
            array (
                'id' => 1412,
                'province_id' => '68',
                'name' => 'Itogon',
            ),
            412 => 
            array (
                'id' => 1413,
                'province_id' => '68',
                'name' => 'Kabayan',
            ),
            413 => 
            array (
                'id' => 1414,
                'province_id' => '68',
                'name' => 'Kapangan',
            ),
            414 => 
            array (
                'id' => 1415,
                'province_id' => '68',
                'name' => 'Kibungan',
            ),
            415 => 
            array (
                'id' => 1416,
                'province_id' => '68',
                'name' => 'La Trinidad',
            ),
            416 => 
            array (
                'id' => 1417,
                'province_id' => '68',
                'name' => 'Mankayan',
            ),
            417 => 
            array (
                'id' => 1418,
                'province_id' => '68',
                'name' => 'Sablan',
            ),
            418 => 
            array (
                'id' => 1419,
                'province_id' => '68',
                'name' => 'Tuba',
            ),
            419 => 
            array (
                'id' => 1420,
                'province_id' => '68',
                'name' => 'Tublay',
            ),
            420 => 
            array (
                'id' => 1421,
                'province_id' => '69',
                'name' => 'Banaue',
            ),
            421 => 
            array (
                'id' => 1422,
                'province_id' => '69',
                'name' => 'Hungduan',
            ),
            422 => 
            array (
                'id' => 1423,
                'province_id' => '69',
                'name' => 'Kiangan',
            ),
            423 => 
            array (
                'id' => 1424,
                'province_id' => '69',
                'name' => 'Lagawe',
            ),
            424 => 
            array (
                'id' => 1425,
                'province_id' => '69',
                'name' => 'Lamut',
            ),
            425 => 
            array (
                'id' => 1426,
                'province_id' => '69',
                'name' => 'Mayoyao',
            ),
            426 => 
            array (
                'id' => 1427,
                'province_id' => '69',
            'name' => 'Alfonso Lista (Potia)',
            ),
            427 => 
            array (
                'id' => 1428,
                'province_id' => '69',
                'name' => 'Aguinaldo',
            ),
            428 => 
            array (
                'id' => 1429,
                'province_id' => '69',
                'name' => 'Hingyon',
            ),
            429 => 
            array (
                'id' => 1430,
                'province_id' => '69',
                'name' => 'Tinoc',
            ),
            430 => 
            array (
                'id' => 1431,
                'province_id' => '69',
                'name' => 'Asipulo',
            ),
            431 => 
            array (
                'id' => 1432,
                'province_id' => '70',
                'name' => 'Balbalan',
            ),
            432 => 
            array (
                'id' => 1433,
                'province_id' => '70',
                'name' => 'Lubuagan',
            ),
            433 => 
            array (
                'id' => 1434,
                'province_id' => '70',
                'name' => 'Pasil',
            ),
            434 => 
            array (
                'id' => 1435,
                'province_id' => '70',
                'name' => 'Pinukpuk',
            ),
            435 => 
            array (
                'id' => 1436,
                'province_id' => '70',
            'name' => 'Rizal (Liwan)',
            ),
            436 => 
            array (
                'id' => 1437,
                'province_id' => '70',
                'name' => ' Tabuk',
            ),
            437 => 
            array (
                'id' => 1438,
                'province_id' => '70',
                'name' => 'Tanudan',
            ),
            438 => 
            array (
                'id' => 1439,
                'province_id' => '70',
                'name' => 'Tinglayan',
            ),
            439 => 
            array (
                'id' => 1440,
                'province_id' => '71',
                'name' => 'Barlig',
            ),
            440 => 
            array (
                'id' => 1441,
                'province_id' => '71',
                'name' => 'Bauko',
            ),
            441 => 
            array (
                'id' => 1442,
                'province_id' => '71',
                'name' => 'Besao',
            ),
            442 => 
            array (
                'id' => 1443,
                'province_id' => '71',
                'name' => 'Bontoc',
            ),
            443 => 
            array (
                'id' => 1444,
                'province_id' => '71',
                'name' => 'Natonin',
            ),
            444 => 
            array (
                'id' => 1445,
                'province_id' => '71',
                'name' => 'Paracelis',
            ),
            445 => 
            array (
                'id' => 1446,
                'province_id' => '71',
                'name' => 'Sabangan',
            ),
            446 => 
            array (
                'id' => 1447,
                'province_id' => '71',
                'name' => 'Sadanga',
            ),
            447 => 
            array (
                'id' => 1448,
                'province_id' => '71',
                'name' => 'Sagada',
            ),
            448 => 
            array (
                'id' => 1449,
                'province_id' => '71',
                'name' => 'Tadian',
            ),
            449 => 
            array (
                'id' => 1450,
                'province_id' => '72',
            'name' => 'Calanasan (Bayag)',
            ),
            450 => 
            array (
                'id' => 1451,
                'province_id' => '72',
                'name' => 'Conner',
            ),
            451 => 
            array (
                'id' => 1452,
                'province_id' => '72',
                'name' => 'Flora',
            ),
            452 => 
            array (
                'id' => 1453,
                'province_id' => '72',
                'name' => 'Kabugao',
            ),
            453 => 
            array (
                'id' => 1454,
                'province_id' => '72',
                'name' => 'Luna',
            ),
            454 => 
            array (
                'id' => 1455,
                'province_id' => '72',
                'name' => 'Pudtol',
            ),
            455 => 
            array (
                'id' => 1456,
                'province_id' => '72',
                'name' => 'Santa Marcela',
            ),
            456 => 
            array (
                'id' => 1457,
                'province_id' => '73',
                'name' => ' Lamitan',
            ),
            457 => 
            array (
                'id' => 1458,
                'province_id' => '73',
                'name' => 'Lantawan',
            ),
            458 => 
            array (
                'id' => 1459,
                'province_id' => '73',
                'name' => 'Maluso',
            ),
            459 => 
            array (
                'id' => 1460,
                'province_id' => '73',
                'name' => 'Sumisip',
            ),
            460 => 
            array (
                'id' => 1461,
                'province_id' => '73',
                'name' => 'Tipo-Tipo',
            ),
            461 => 
            array (
                'id' => 1462,
                'province_id' => '73',
                'name' => 'Tuburan',
            ),
            462 => 
            array (
                'id' => 1463,
                'province_id' => '73',
                'name' => 'Akbar',
            ),
            463 => 
            array (
                'id' => 1464,
                'province_id' => '73',
                'name' => 'Al-Barka',
            ),
            464 => 
            array (
                'id' => 1465,
                'province_id' => '73',
                'name' => 'Hadji Mohammad Ajul',
            ),
            465 => 
            array (
                'id' => 1466,
                'province_id' => '73',
                'name' => 'Ungkaya Pukan',
            ),
            466 => 
            array (
                'id' => 1467,
                'province_id' => '73',
                'name' => 'Hadji Muhtamad',
            ),
            467 => 
            array (
                'id' => 1468,
                'province_id' => '73',
                'name' => 'Tabuan-Lasa',
            ),
            468 => 
            array (
                'id' => 1469,
                'province_id' => '74',
            'name' => 'Bacolod-Kalawi (Bacolod Grande)',
            ),
            469 => 
            array (
                'id' => 1470,
                'province_id' => '74',
                'name' => 'Balabagan',
            ),
            470 => 
            array (
                'id' => 1471,
                'province_id' => '74',
            'name' => 'Balindong (Watu)',
            ),
            471 => 
            array (
                'id' => 1472,
                'province_id' => '74',
                'name' => 'Bayang',
            ),
            472 => 
            array (
                'id' => 1473,
                'province_id' => '74',
                'name' => 'Binidayan',
            ),
            473 => 
            array (
                'id' => 1474,
                'province_id' => '74',
                'name' => 'Bubong',
            ),
            474 => 
            array (
                'id' => 1475,
                'province_id' => '74',
                'name' => 'Butig',
            ),
            475 => 
            array (
                'id' => 1476,
                'province_id' => '74',
                'name' => 'Ganassi',
            ),
            476 => 
            array (
                'id' => 1477,
                'province_id' => '74',
                'name' => 'Kapai',
            ),
            477 => 
            array (
                'id' => 1478,
                'province_id' => '74',
            'name' => 'Lumba-Bayabao (Maguing)',
            ),
            478 => 
            array (
                'id' => 1479,
                'province_id' => '74',
                'name' => 'Lumbatan',
            ),
            479 => 
            array (
                'id' => 1480,
                'province_id' => '74',
                'name' => 'Madalum',
            ),
            480 => 
            array (
                'id' => 1481,
                'province_id' => '74',
                'name' => 'Madamba',
            ),
            481 => 
            array (
                'id' => 1482,
                'province_id' => '74',
                'name' => 'Malabang',
            ),
            482 => 
            array (
                'id' => 1483,
                'province_id' => '74',
                'name' => 'Marantao',
            ),
            483 => 
            array (
                'id' => 1484,
                'province_id' => '74',
                'name' => ' Marawi',
            ),
            484 => 
            array (
                'id' => 1485,
                'province_id' => '74',
                'name' => 'Masiu',
            ),
            485 => 
            array (
                'id' => 1486,
                'province_id' => '74',
                'name' => 'Mulondo',
            ),
            486 => 
            array (
                'id' => 1487,
                'province_id' => '74',
            'name' => 'Pagayawan (Tatarikan)',
            ),
            487 => 
            array (
                'id' => 1488,
                'province_id' => '74',
                'name' => 'Piagapo',
            ),
            488 => 
            array (
                'id' => 1489,
                'province_id' => '74',
            'name' => 'Poona Bayabao (Gata)',
            ),
            489 => 
            array (
                'id' => 1490,
                'province_id' => '74',
                'name' => 'Pualas',
            ),
            490 => 
            array (
                'id' => 1491,
                'province_id' => '74',
                'name' => 'Ditsaan-Ramain',
            ),
            491 => 
            array (
                'id' => 1492,
                'province_id' => '74',
                'name' => 'Saguiaran',
            ),
            492 => 
            array (
                'id' => 1493,
                'province_id' => '74',
                'name' => 'Tamparan',
            ),
            493 => 
            array (
                'id' => 1494,
                'province_id' => '74',
                'name' => 'Taraka',
            ),
            494 => 
            array (
                'id' => 1495,
                'province_id' => '74',
                'name' => 'Tubaran',
            ),
            495 => 
            array (
                'id' => 1496,
                'province_id' => '74',
                'name' => 'Tugaya',
            ),
            496 => 
            array (
                'id' => 1497,
                'province_id' => '74',
                'name' => 'Wao',
            ),
            497 => 
            array (
                'id' => 1498,
                'province_id' => '74',
                'name' => 'Marogong',
            ),
            498 => 
            array (
                'id' => 1499,
                'province_id' => '74',
                'name' => 'Calanogas',
            ),
            499 => 
            array (
                'id' => 1500,
                'province_id' => '74',
                'name' => 'Buadiposo-Buntong',
            ),
        ));
        \DB::table('province_cities')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'province_id' => '74',
                'name' => 'Maguing',
            ),
            1 => 
            array (
                'id' => 1502,
                'province_id' => '74',
            'name' => 'Picong (Sultan Gumander)',
            ),
            2 => 
            array (
                'id' => 1503,
                'province_id' => '74',
                'name' => 'Lumbayanague',
            ),
            3 => 
            array (
                'id' => 1504,
                'province_id' => '74',
            'name' => 'Amai Manabilang (Bumbaran)',
            ),
            4 => 
            array (
                'id' => 1505,
                'province_id' => '74',
                'name' => 'Tagoloan Ii',
            ),
            5 => 
            array (
                'id' => 1506,
                'province_id' => '74',
                'name' => 'Kapatagan',
            ),
            6 => 
            array (
                'id' => 1507,
                'province_id' => '74',
                'name' => 'Sultan Dumalondong',
            ),
            7 => 
            array (
                'id' => 1508,
                'province_id' => '74',
                'name' => 'Lumbaca-Unayan',
            ),
            8 => 
            array (
                'id' => 1509,
                'province_id' => '75',
                'name' => 'Ampatuan',
            ),
            9 => 
            array (
                'id' => 1510,
                'province_id' => '75',
                'name' => 'Buldon',
            ),
            10 => 
            array (
                'id' => 1511,
                'province_id' => '75',
                'name' => 'Buluan',
            ),
            11 => 
            array (
                'id' => 1512,
                'province_id' => '75',
                'name' => 'Datu Paglas',
            ),
            12 => 
            array (
                'id' => 1513,
                'province_id' => '75',
                'name' => 'Datu Piang',
            ),
            13 => 
            array (
                'id' => 1514,
                'province_id' => '75',
            'name' => 'Datu Odin Sinsuat (Dinaig)',
            ),
            14 => 
            array (
                'id' => 1515,
                'province_id' => '75',
            'name' => 'Shariff Aguak (Maganoy)',
            ),
            15 => 
            array (
                'id' => 1516,
                'province_id' => '75',
                'name' => 'Matanog',
            ),
            16 => 
            array (
                'id' => 1517,
                'province_id' => '75',
                'name' => 'Pagalungan',
            ),
            17 => 
            array (
                'id' => 1518,
                'province_id' => '75',
                'name' => 'Parang',
            ),
            18 => 
            array (
                'id' => 1519,
                'province_id' => '75',
            'name' => 'Sultan Kudarat (Nuling)',
            ),
            19 => 
            array (
                'id' => 1520,
                'province_id' => '75',
            'name' => 'Sultan Sa Barongis (Lambayong)',
            ),
            20 => 
            array (
                'id' => 1521,
                'province_id' => '75',
            'name' => 'Kabuntalan (Tumbao)',
            ),
            21 => 
            array (
                'id' => 1522,
                'province_id' => '75',
                'name' => 'Upi',
            ),
            22 => 
            array (
                'id' => 1523,
                'province_id' => '75',
                'name' => 'Talayan',
            ),
            23 => 
            array (
                'id' => 1524,
                'province_id' => '75',
                'name' => 'South Upi',
            ),
            24 => 
            array (
                'id' => 1525,
                'province_id' => '75',
                'name' => 'Barira',
            ),
            25 => 
            array (
                'id' => 1526,
                'province_id' => '75',
                'name' => 'Gen. S.K. Pendatun',
            ),
            26 => 
            array (
                'id' => 1527,
                'province_id' => '75',
                'name' => 'Mamasapano',
            ),
            27 => 
            array (
                'id' => 1528,
                'province_id' => '75',
                'name' => 'Talitay',
            ),
            28 => 
            array (
                'id' => 1529,
                'province_id' => '75',
                'name' => 'Pagagawan',
            ),
            29 => 
            array (
                'id' => 1530,
                'province_id' => '75',
                'name' => 'Paglat',
            ),
            30 => 
            array (
                'id' => 1531,
                'province_id' => '75',
                'name' => 'Sultan Mastura',
            ),
            31 => 
            array (
                'id' => 1532,
                'province_id' => '75',
                'name' => 'Guindulungan',
            ),
            32 => 
            array (
                'id' => 1533,
                'province_id' => '75',
                'name' => 'Datu Saudi-Ampatuan',
            ),
            33 => 
            array (
                'id' => 1534,
                'province_id' => '75',
                'name' => 'Datu Unsay',
            ),
            34 => 
            array (
                'id' => 1535,
                'province_id' => '75',
                'name' => 'Datu Abdullah Sangki',
            ),
            35 => 
            array (
                'id' => 1536,
                'province_id' => '75',
                'name' => 'Rajah Buayan',
            ),
            36 => 
            array (
                'id' => 1537,
                'province_id' => '75',
                'name' => 'Datu Blah T. Sinsuat',
            ),
            37 => 
            array (
                'id' => 1538,
                'province_id' => '75',
                'name' => 'Datu Anggal Midtimbang',
            ),
            38 => 
            array (
                'id' => 1539,
                'province_id' => '75',
                'name' => 'Mangudadatu',
            ),
            39 => 
            array (
                'id' => 1540,
                'province_id' => '75',
                'name' => 'Pandag',
            ),
            40 => 
            array (
                'id' => 1541,
                'province_id' => '75',
                'name' => 'Northern Kabuntalan',
            ),
            41 => 
            array (
                'id' => 1542,
                'province_id' => '75',
                'name' => 'Datu Hoffer Ampatuan',
            ),
            42 => 
            array (
                'id' => 1543,
                'province_id' => '75',
                'name' => 'Datu Salibo',
            ),
            43 => 
            array (
                'id' => 1544,
                'province_id' => '75',
                'name' => 'Shariff Saydona Mustapha',
            ),
            44 => 
            array (
                'id' => 1545,
                'province_id' => '76',
                'name' => 'Indanan',
            ),
            45 => 
            array (
                'id' => 1546,
                'province_id' => '76',
                'name' => 'Jolo',
            ),
            46 => 
            array (
                'id' => 1547,
                'province_id' => '76',
                'name' => 'Kalingalan Caluang',
            ),
            47 => 
            array (
                'id' => 1548,
                'province_id' => '76',
                'name' => 'Luuk',
            ),
            48 => 
            array (
                'id' => 1549,
                'province_id' => '76',
                'name' => 'Maimbung',
            ),
            49 => 
            array (
                'id' => 1550,
                'province_id' => '76',
            'name' => 'Hadji Panglima Tahil (Marunggas)',
            ),
            50 => 
            array (
                'id' => 1551,
                'province_id' => '76',
                'name' => 'Old Panamao',
            ),
            51 => 
            array (
                'id' => 1552,
                'province_id' => '76',
                'name' => 'Pangutaran',
            ),
            52 => 
            array (
                'id' => 1553,
                'province_id' => '76',
                'name' => 'Parang',
            ),
            53 => 
            array (
                'id' => 1554,
                'province_id' => '76',
                'name' => 'Pata',
            ),
            54 => 
            array (
                'id' => 1555,
                'province_id' => '76',
                'name' => 'Patikul',
            ),
            55 => 
            array (
                'id' => 1556,
                'province_id' => '76',
                'name' => 'Siasi',
            ),
            56 => 
            array (
                'id' => 1557,
                'province_id' => '76',
                'name' => 'Talipao',
            ),
            57 => 
            array (
                'id' => 1558,
                'province_id' => '76',
                'name' => 'Tapul',
            ),
            58 => 
            array (
                'id' => 1559,
                'province_id' => '76',
                'name' => 'Tongkil',
            ),
            59 => 
            array (
                'id' => 1560,
                'province_id' => '76',
            'name' => 'Panglima Estino (New Panamao)',
            ),
            60 => 
            array (
                'id' => 1561,
                'province_id' => '76',
                'name' => 'Lugus',
            ),
            61 => 
            array (
                'id' => 1562,
                'province_id' => '76',
                'name' => 'Pandami',
            ),
            62 => 
            array (
                'id' => 1563,
                'province_id' => '76',
                'name' => 'Omar',
            ),
            63 => 
            array (
                'id' => 1564,
                'province_id' => '77',
            'name' => 'Panglima Sugala (Balimbing)',
            ),
            64 => 
            array (
                'id' => 1565,
                'province_id' => '77',
                'name' => 'Bongao',
            ),
            65 => 
            array (
                'id' => 1566,
                'province_id' => '77',
            'name' => 'Mapun (Cagayan De Tawi-Tawi)',
            ),
            66 => 
            array (
                'id' => 1567,
                'province_id' => '77',
                'name' => 'Simunul',
            ),
            67 => 
            array (
                'id' => 1568,
                'province_id' => '77',
                'name' => 'Sitangkai',
            ),
            68 => 
            array (
                'id' => 1569,
                'province_id' => '77',
                'name' => 'South Ubian',
            ),
            69 => 
            array (
                'id' => 1570,
                'province_id' => '77',
                'name' => 'Tandubas',
            ),
            70 => 
            array (
                'id' => 1571,
                'province_id' => '77',
                'name' => 'Turtle Islands',
            ),
            71 => 
            array (
                'id' => 1572,
                'province_id' => '77',
                'name' => 'Languyan',
            ),
            72 => 
            array (
                'id' => 1573,
                'province_id' => '77',
                'name' => 'Sapa-Sapa',
            ),
            73 => 
            array (
                'id' => 1574,
                'province_id' => '77',
                'name' => 'Sibutu',
            ),
            74 => 
            array (
                'id' => 1575,
                'province_id' => '78',
                'name' => 'Buenavista',
            ),
            75 => 
            array (
                'id' => 1576,
                'province_id' => '78',
                'name' => ' Butuan',
            ),
            76 => 
            array (
                'id' => 1577,
                'province_id' => '78',
                'name' => ' Cabadbaran',
            ),
            77 => 
            array (
                'id' => 1578,
                'province_id' => '78',
                'name' => 'Carmen',
            ),
            78 => 
            array (
                'id' => 1579,
                'province_id' => '78',
                'name' => 'Jabonga',
            ),
            79 => 
            array (
                'id' => 1580,
                'province_id' => '78',
                'name' => 'Kitcharao',
            ),
            80 => 
            array (
                'id' => 1581,
                'province_id' => '78',
                'name' => 'Las Nieves',
            ),
            81 => 
            array (
                'id' => 1582,
                'province_id' => '78',
                'name' => 'Magallanes',
            ),
            82 => 
            array (
                'id' => 1583,
                'province_id' => '78',
                'name' => 'Nasipit',
            ),
            83 => 
            array (
                'id' => 1584,
                'province_id' => '78',
                'name' => 'Santiago',
            ),
            84 => 
            array (
                'id' => 1585,
                'province_id' => '78',
                'name' => 'Tubay',
            ),
            85 => 
            array (
                'id' => 1586,
                'province_id' => '78',
                'name' => 'Remedios T. Romualdez',
            ),
            86 => 
            array (
                'id' => 1587,
                'province_id' => '79',
                'name' => ' Bayugan',
            ),
            87 => 
            array (
                'id' => 1588,
                'province_id' => '79',
                'name' => 'Bunawan',
            ),
            88 => 
            array (
                'id' => 1589,
                'province_id' => '79',
                'name' => 'Esperanza',
            ),
            89 => 
            array (
                'id' => 1590,
                'province_id' => '79',
                'name' => 'La Paz',
            ),
            90 => 
            array (
                'id' => 1591,
                'province_id' => '79',
                'name' => 'Loreto',
            ),
            91 => 
            array (
                'id' => 1592,
                'province_id' => '79',
                'name' => 'Prosperidad',
            ),
            92 => 
            array (
                'id' => 1593,
                'province_id' => '79',
                'name' => 'Rosario',
            ),
            93 => 
            array (
                'id' => 1594,
                'province_id' => '79',
                'name' => 'San Francisco',
            ),
            94 => 
            array (
                'id' => 1595,
                'province_id' => '79',
                'name' => 'San Luis',
            ),
            95 => 
            array (
                'id' => 1596,
                'province_id' => '79',
                'name' => 'Santa Josefa',
            ),
            96 => 
            array (
                'id' => 1597,
                'province_id' => '79',
                'name' => 'Talacogon',
            ),
            97 => 
            array (
                'id' => 1598,
                'province_id' => '79',
                'name' => 'Trento',
            ),
            98 => 
            array (
                'id' => 1599,
                'province_id' => '79',
                'name' => 'Veruela',
            ),
            99 => 
            array (
                'id' => 1600,
                'province_id' => '79',
                'name' => 'Sibagat',
            ),
            100 => 
            array (
                'id' => 1601,
                'province_id' => '80',
                'name' => 'Alegria',
            ),
            101 => 
            array (
                'id' => 1602,
                'province_id' => '80',
                'name' => 'Bacuag',
            ),
            102 => 
            array (
                'id' => 1603,
                'province_id' => '80',
                'name' => 'Burgos',
            ),
            103 => 
            array (
                'id' => 1604,
                'province_id' => '80',
                'name' => 'Claver',
            ),
            104 => 
            array (
                'id' => 1605,
                'province_id' => '80',
                'name' => 'Dapa',
            ),
            105 => 
            array (
                'id' => 1606,
                'province_id' => '80',
                'name' => 'Del Carmen',
            ),
            106 => 
            array (
                'id' => 1607,
                'province_id' => '80',
                'name' => 'General Luna',
            ),
            107 => 
            array (
                'id' => 1608,
                'province_id' => '80',
                'name' => 'Gigaquit',
            ),
            108 => 
            array (
                'id' => 1609,
                'province_id' => '80',
                'name' => 'Mainit',
            ),
            109 => 
            array (
                'id' => 1610,
                'province_id' => '80',
                'name' => 'Malimono',
            ),
            110 => 
            array (
                'id' => 1611,
                'province_id' => '80',
                'name' => 'Pilar',
            ),
            111 => 
            array (
                'id' => 1612,
                'province_id' => '80',
                'name' => 'Placer',
            ),
            112 => 
            array (
                'id' => 1613,
                'province_id' => '80',
                'name' => 'San Benito',
            ),
            113 => 
            array (
                'id' => 1614,
                'province_id' => '80',
            'name' => 'San Francisco (Anao-Aon)',
            ),
            114 => 
            array (
                'id' => 1615,
                'province_id' => '80',
                'name' => 'San Isidro',
            ),
            115 => 
            array (
                'id' => 1616,
                'province_id' => '80',
            'name' => 'Santa Monica (Sapao)',
            ),
            116 => 
            array (
                'id' => 1617,
                'province_id' => '80',
                'name' => 'Sison',
            ),
            117 => 
            array (
                'id' => 1618,
                'province_id' => '80',
                'name' => 'Socorro',
            ),
            118 => 
            array (
                'id' => 1619,
                'province_id' => '80',
                'name' => ' Surigao',
            ),
            119 => 
            array (
                'id' => 1620,
                'province_id' => '80',
                'name' => 'Tagana-An',
            ),
            120 => 
            array (
                'id' => 1621,
                'province_id' => '80',
                'name' => 'Tubod',
            ),
            121 => 
            array (
                'id' => 1622,
                'province_id' => '81',
                'name' => 'Barobo',
            ),
            122 => 
            array (
                'id' => 1623,
                'province_id' => '81',
                'name' => 'Bayabas',
            ),
            123 => 
            array (
                'id' => 1624,
                'province_id' => '81',
                'name' => ' Bislig',
            ),
            124 => 
            array (
                'id' => 1625,
                'province_id' => '81',
                'name' => 'Cagwait',
            ),
            125 => 
            array (
                'id' => 1626,
                'province_id' => '81',
                'name' => 'Cantilan',
            ),
            126 => 
            array (
                'id' => 1627,
                'province_id' => '81',
                'name' => 'Carmen',
            ),
            127 => 
            array (
                'id' => 1628,
                'province_id' => '81',
                'name' => 'Carrascal',
            ),
            128 => 
            array (
                'id' => 1629,
                'province_id' => '81',
                'name' => 'Cortes',
            ),
            129 => 
            array (
                'id' => 1630,
                'province_id' => '81',
                'name' => 'Hinatuan',
            ),
            130 => 
            array (
                'id' => 1631,
                'province_id' => '81',
                'name' => 'Lanuza',
            ),
            131 => 
            array (
                'id' => 1632,
                'province_id' => '81',
                'name' => 'Lianga',
            ),
            132 => 
            array (
                'id' => 1633,
                'province_id' => '81',
                'name' => 'Lingig',
            ),
            133 => 
            array (
                'id' => 1634,
                'province_id' => '81',
                'name' => 'Madrid',
            ),
            134 => 
            array (
                'id' => 1635,
                'province_id' => '81',
                'name' => 'Marihatag',
            ),
            135 => 
            array (
                'id' => 1636,
                'province_id' => '81',
                'name' => 'San Agustin',
            ),
            136 => 
            array (
                'id' => 1637,
                'province_id' => '81',
                'name' => 'San Miguel',
            ),
            137 => 
            array (
                'id' => 1638,
                'province_id' => '81',
                'name' => 'Tagbina',
            ),
            138 => 
            array (
                'id' => 1639,
                'province_id' => '81',
                'name' => 'Tago',
            ),
            139 => 
            array (
                'id' => 1640,
                'province_id' => '81',
                'name' => ' Tandag',
            ),
            140 => 
            array (
                'id' => 1641,
                'province_id' => '82',
            'name' => 'Basilisa (Rizal)',
            ),
            141 => 
            array (
                'id' => 1642,
                'province_id' => '82',
                'name' => 'Cagdianao',
            ),
            142 => 
            array (
                'id' => 1643,
                'province_id' => '82',
                'name' => 'Dinagat',
            ),
            143 => 
            array (
                'id' => 1644,
                'province_id' => '82',
            'name' => 'Libjo (Albor)',
            ),
            144 => 
            array (
                'id' => 1645,
                'province_id' => '82',
                'name' => 'Loreto',
            ),
            145 => 
            array (
                'id' => 1646,
                'province_id' => '82',
                'name' => 'San Jose',
            ),
            146 => 
            array (
                'id' => 1647,
                'province_id' => '82',
                'name' => 'Tubajon',
            ),
        ));
        
        
    }
}