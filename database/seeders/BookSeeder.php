<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
                [
                    'title' => 'Outlive: The Science and Art of Longevity',
                    'author' => 'Peter Attia MD, Bill Gifford',
                    'details' => '“Outlive completely transformed my approach to growing old. Peter Attia is among the most brilliant people I’ve ever met, and he’s succeeded in packing a life’s worth of insights into this book. It promises to be one of the most important books you’ll ever read.”—Steven D. Levitt, New York Times bestselling author of Freakonomics

                    “In Outlive, Peter Attia explores the science of not just prolonging life, but also prolonging aliveness. Attia makes the crucial connection between overall health and relational health.”—Esther Perel, New York Times bestselling author, psychotherapist, and podcast host of Where Should We Begin?
                    
                    “Finally, there is a modern, thorough, clear, and actionable manual for how to maximize our immediate and long-term health. Firmly grounded in data and real-life conditions, Outlive makes obvious which actions we all need to take, and just as important, what all we need to pay attention to in order to live a long, vital life. As the most accurate and comprehensive health guide published to date, Outlive is not just informative, it is important.”—Andrew Huberman, PhD, professor, Department of Neurobiology at Stanford University School of Medicine, creator of the Huberman Lab podcast
                    
                    “Dr. Peter Attia is my doctor and also my friend. He is a specialist in longevity and someone I trust with my life. What separates him from others is his pursuit of quality of life from all angles—physical, emotional, mental, relational, and spiritual health. This incredible book is a call to action and a reminder to always participate, and never be passive. It will arm you with the tools you need to live a long, meaningful, and fulfilling life.”—Hugh Jackman
                    
                    “In Outlive, Peter Attia has delivered the definitive look at the complex subject of longevity. Comprehensive and rigorous, Outlive is full of surprising insights into the diseases of aging that will likely kill most of us, and the tactics and techniques that can help us live longer and in better health. Attia’s writing surprises and delights us, while provoking a new way to think about longevity.”—Siddhartha Mukherjee, author of the Pulitzer Prize winner The Emperor of All Maladies and the New York Times bestseller The Song of the Cell',
                    'publication_date' => '2023-03-28',
                    'cover' => 'public/test.jpg',
                    'category_id' => 26
                ],
                [
                    'title' => 'American Prometheus: The Inspiration for the Major Motion Picture OPPENHEIMER',
                    'author' => ' Kai Bird, Martin J. Sherwin',
                    'details' => '#1 NEW YORK TIMES BESTSELLER • PULITZER PRIZE WINNER • The definitive biography of J. Robert Oppenheimer, one of the iconic figures of the twentieth century, a brilliant physicist who led the effort to build the atomic bomb for his country in a time of war, and who later found himself confronting the moral consequences of scientific progress.',
                    'publication_date' => '2006-05-01',
                    'cover' => 'public/XLZw5z2bzsupEy7nBJbDxdT0HzpOiGkqjOAjx6sd.jpg',
                    'category_id' => 26
                ]
        ]);
    }
}
