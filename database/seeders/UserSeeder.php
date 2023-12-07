<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
                [
                    'name' => 'Admin',
                    'email' => 'admin@outlook.com',
                    'is_admin' => true,
                    'password' => '$2y$12$HYSp5/VlmWtbnAkebW5FvuMTa1hjCpFx3tgvUu.2Ur2rCNihRYP42'
                ],
                [
                    'name' => 'Jhon Snow',
                    'email' => 'jhon@outlook.com',
                    'is_admin' => false,
                    'password' => '$2y$12$HYSp5/VlmWtbnAkebW5FvuMTa1hjCpFx3tgvUu.2Ur2rCNihRYP42'
                ],[
                    'name' => 'Lebron James',
                    'email' => 'james@outlook.com',
                    'is_admin' => false,
                    'password' => '$2y$12$HYSp5/VlmWtbnAkebW5FvuMTa1hjCpFx3tgvUu.2Ur2rCNihRYP42'
                ]
        ]);
    }
}
