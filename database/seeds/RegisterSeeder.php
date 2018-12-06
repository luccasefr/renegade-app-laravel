<?php

use Illuminate\Database\Seeder;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registers')->insert([
            'name'=>'Fiori',
            'email'=>'fiori@gmail.com',
            'cpf'=>'22023024032',
            'phone'=>'03189765432',
            
        ]);
        DB::table('registers')->insert([
            'name'=>'Talita',
            'email'=>'talita@gmail.com',
            'cpf'=>'36056598954',
            'phone'=>'03189565432',
            
        ]);
        DB::table('registers')->insert([
            'name'=>'Jorge',
            'email'=>'jorge@gmail.com',
            'cpf'=>'36056598953',
            'phone'=>'03189565432',
            
        ]);
    }
}
