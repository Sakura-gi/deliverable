<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('users')->insert(
            [
                [
                    'name' => 'user1',
                    'email' => 'email1@abc.com',
                    'password' => bcrypt('password1'),
                ],
                [
                    'name' => 'user2',
                    'email' => 'email2@abc.com',
                    'password' => bcrypt('password2'),
                ],
                [
                    'name' => 'user3',
                    'email' => 'email3@abc.com',
                    'password' => bcrypt('password3'),
                ],
            ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

    }
}






