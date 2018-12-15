<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fullname' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('notallow'),
            'fk_role' => 1
        ]);

        DB::table('users')->insert([
            'fullname' => 'Rosa',
            'username' => 'rosa',
            'email' => 'rosa@gmail.com',
            'password' => bcrypt('notallow'),
            'fk_role' => 2
        ]);

        DB::table('users')->insert([
            'fullname' => 'Maximiliano Oscar Zarate',
            'username' => 'maxxim',
            'email' => 'maxxim@gmail.com',
            'password' => bcrypt('notallow'),
            'fk_role' => 3
        ]);
    }
}
