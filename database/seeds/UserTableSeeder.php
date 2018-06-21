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
            'provincia_id' => '1',
            'distrito_id' => '101',
            'grupo' => '2'
        ]);


        DB::table('users')->insert([
            'name' => 'Emidio Nhacudima',
            'email' => 'enhacudima@psi.org.mz',
            'password' => bcrypt('Psi12345'),
            'provincia_id' => '1',
            'distrito_id' => '101',
            'grupo' => '2'
        ]);
/*
        // Let's truncate our existing records to start from scratch.
        Article::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
*/
    }
}
