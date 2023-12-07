<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['category' => 'Arts & Photography'],
            ['category' => 'Biographies & Memoirs'],
            ['category' => 'Business & Money'],
            ['category' => 'Calendars'],
            ['category' => 'Children\'s Books'],
            ['category' => 'Christian Books & Bibles'],
            ['category' => 'Comics & Graphic Novels'],
            ['category' => 'Computers & Technology'],
            ['category' => 'Cookbooks, Food & Wine'],
            ['category' => 'Crafts, Hobbies & Home'],
            ['category' => 'Education & Teaching'],
            ['category' => 'Engineering & Transportation'],
            ['category' => 'Health, Fitness & Dieting'],
            ['category' => 'History'],
            ['category' => 'Humor & Entertainment'],
            ['category' => 'Law'],
            ['category' => 'LGBTQ+ Books'],
            ['category' => 'Literature & Fiction'],
            ['category' => 'Medical Books'],
            ['category' => 'Mystery, Thriller & Suspense'],
            ['category' => 'Parenting & Relationships'],
            ['category' => 'Politics & Social Sciences'],
            ['category' => 'Reference'],
            ['category' => 'Religion & Spirituality'],
            ['category' => 'Romance'],
            ['category' => 'Science & Math'],
            ['category' => 'Science Fiction & Fantasy'],
            ['category' => 'Self-Help'],
            ['category' => 'Sports & Outdoors'],
            ['category' => 'Teen & Young Adult'],
            ['category' => 'Test Preparation'],
            ['category' => 'Travel']
        ]);
    }
}
