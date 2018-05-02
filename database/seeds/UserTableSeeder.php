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
        DB::table('users')->insert([
            'name' => 'Edson Chivambo',
            'email' => 'echivambo@psi.org.mz',
            'password' => bcrypt('002523'),
            'grupo' => '2'
        ]);


        DB::table('users')->insert([
            'name' => 'Emidio Nhacudima',
            'email' => 'enhacudima@psi.org.mz',
            'password' => bcrypt('Psi12345'),
            'grupo' => '2'
        ]);


    }
}
