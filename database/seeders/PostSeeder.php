<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Judul Artikel 1',
                'author_id' => '1',
                'category_id' => '1',
                'slug' => 'judul-artikel-1',
                'body' => 'Your application may run out of memory if you attempt to load tens of thousands of Eloquent records via the all or get methods. Instead of using these methods, the chunk method may be used to process large numbers of models more efficiently.The chunk method will retrieve a subset of Eloquent models, passing them to a closure for processing. Since only the current chunk of Eloquent models is retrieved at a time, the chunk method will provide significantly reduced memory usage when working with a large number of models:'
            ]
        ]);
    }
}
