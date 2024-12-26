<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Color::create([
            'color_code' => '00',
            'color_name' => 'Not Specified',
            'hex_code' => '#000000',
        ]);

        Color::create([
            'color_code' => '01',
            'color_name' => 'Greige',
            'hex_code' => '#DCDCDC',
        ]);

        Color::create([
            'color_code' => '03',
            'color_name' => 'Indigo Blue',
            'hex_code' => '#4B0082',
        ]);

        Color::create([
            'color_code' => '04',
            'color_name' => 'Soft Brown',
            'hex_code' => '#A52A2A',
        ]);
    }
}
