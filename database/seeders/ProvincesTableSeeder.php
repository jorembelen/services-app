<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ilocos Norte',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ilocos Sur',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'La Union',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Pangasinan',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Batanes',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Cagayan',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Isabela',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Nueva Vizcaya',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Quirino',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Bataan',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Bulacan',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Nueva Ecija',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Pampanga',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Tarlac',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Zambales',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Aurora',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Batangas',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Cavite',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Laguna',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Quezon',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Rizal',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Marinduque',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Occidental Mindoro',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Oriental Mindoro',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Palawan',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Romblon',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Albay',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Camarines Norte',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Camarines Sur',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Catanduanes',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Masbate',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Sorsogon',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Aklan',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Antique',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Capiz',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Iloilo',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Negros Occidental',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Guimaras',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Bohol',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Cebu',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Negros Oriental',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Siquijor',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Eastern Samar',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Leyte',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Northern Samar',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Western Samar',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Southern Leyte',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Biliran',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Zamboanga Del Norte',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Zamboanga Del Sur',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Zamboanga Sibugay',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Isabela',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Bukidnon',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Camiguin',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Lanao Del Norte',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Misamis Occidental',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Misamis Oriental',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Davao Del Norte',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Davao Del Sur',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Davao Oriental',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Davao De Oro',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Davao Occidental',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'North Cotabato',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'South Cotabato',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Sultan Kudarat',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Sarangani',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Abra',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Benguet',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Ifugao',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Kalinga',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Mountain Province',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Apayao',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Basilan',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Lanao Del Sur',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Maguindanao',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Sulu',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Tawi-Tawi',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Agusan Del Norte',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Agusan Del Sur',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Surigao Del Norte',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Surigao Del Sur',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Dinagat Islands',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Metro Manila - Caloocan',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Metro Manila - Las Piñas',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Metro Manila - Makati',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Metro Manila - Malabon',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Metro Manila - Mandaluyong',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Metro Manila - Manila',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Metro Manila - Marikina',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Metro Manila - Muntinlupa',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Metro Manila - Navotas',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Metro Manila - Parañaque',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Metro Manila - Pasay',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Metro Manila - Pasig',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Metro Manila - Pateros',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Metro Manila - Quezon City',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Metro Manila - San Juan',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Metro Manila - Taguig',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Metro Manila - Valenzuela',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Cotabato',
            ),
        ));
        
        
    }
}