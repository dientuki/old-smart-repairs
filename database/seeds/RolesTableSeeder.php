<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => 'God',
        ]);

        DB::table('roles')->insert([
            'role' => 'Seller',
        ]);

        DB::table('roles')->insert([
            'role' => 'Technical',
        ]);
    }
}
