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
                'body' => 'Your application may run out of memory if you attempt to load tens of thousands of Eloquent records via the all or get methods. Instead of using these methods, the chunk method may be used to process large numbers of models more efficiently.The chunk method will retrieve a subset of Eloquent models, passing them to a closure for processing. Since only the current chunk of Eloquent models is retrieved at a time, the chunk method will provide significantly reduced memory usage when working with a large number of models:',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
        DB::table('posts')->insert([
            [
                'title' => 'Judul Artikel 2',
                'author_id' => '2',
                'category_id' => '2',
                'slug' => 'judul-artikel-2',
                'body' => 'To drop a foreign key, you may use the dropForeign method, passing the name of the foreign key constraint to be deleted as an argument. Foreign key constraints use the same naming convention as indexes. In other words, the foreign key constraint name is based on the name of the table and the columns in the constraint, followed by a "_foreign" suffix:',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
