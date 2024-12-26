<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'category_id' => 1,
            'type_name' => 'T-Shirt',
            'description' => 'T-Shirt',
        ]);

        Type::create([
            'category_id' => 1,
            'type_name' => 'Blouse',
            'description' => 'Blouse',
        ]);
    }
}
