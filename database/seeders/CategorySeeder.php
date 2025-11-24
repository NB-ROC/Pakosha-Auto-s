<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Motoronderdelen',
            'Remmen & Remsystemen',
            'Verlichting',
            'Accessoires',
            'Uitlaatsystemen',
            'Filters',
            'Banden & Velgen',
            'Elektronica',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
