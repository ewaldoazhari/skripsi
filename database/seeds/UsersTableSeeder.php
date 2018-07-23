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
            'name' => 'ewaldo',
            'email' => 'ewaldoazhari@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

         DB::table('users')->insert([
            'name' => 'adit',
            'email' => 'adit123@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

          DB::table('users')->insert([
            'name' => 'bogel',
            'email' => 'bogeladmin@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
