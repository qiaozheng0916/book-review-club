<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
                [
                    'score' => '4',
                    'user_id' => 1,
                    'book_id' => 1,
                    'created_at' => now(),
                    'content' => '"Once you understand that apoB particles LDL,VLDL, Lp(a)—are causally linked to ASCVD--the game completely changes. The only way to stop the disease is to remove the cause, and the best time to do that is now". This is the best quote from the book, and the one most critical for us all. Heart disease is the number one killer in America. Dr Attia reckons it should be about tenth; which he is sure it would be if only doctors would do what he does: reduce all of the above to childhood levels. That\'s why he is a doctor to the stars. He knows how to do that really well. He rubs shoulders with the people that make cutting edge drugs for heart conditions. What is not to like? If nothing else, the chapter on "The Ticker" is worth having.',
                ],
                [
                    'score' => '4',
                    'user_id' => 2,
                    'book_id' => 1,
                    'created_at' => now(),
                    'content' => 'Dr Atta made me think carefully about nutrition, VO2 max, strength training and getting better sleep. I have lost 11 kilos and my cholesterol went from 260 to 219 in 6 months. Save your own life.',
                ],
                [
                    'score' => '4',
                    'user_id' => 3,
                    'book_id' => 1,
                    'created_at' => now(),
                    'content' => 'Great Book to read and learn more about your overall health!',
                ]
        ]);
    }
}
