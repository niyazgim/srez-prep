<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pr_categories')->insert([
           [ 'name' => 'T-shirts' ],
           [ 'name' => 'Caps' ],
           [ 'name' => 'Jackets' ],
        ]);
    }
}
