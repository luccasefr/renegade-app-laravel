<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'teste',
            'email' => 'teste@gmail.com.br',
            'password' => bcrypt('123456'),
        ]);
    }
}
