<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Web Design',
                'slug' => 'web-design',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
        DB::table('categories')->insert([
            [
                'name' => 'Web Developer',
                'slug' => 'web-developer',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
