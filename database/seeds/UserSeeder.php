<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i <= 3;$i++)
        {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'gmail.com',
                'pseudo' => Str::random(10),
                'password' => Hash::make('password'),
            ]);
        }

    }
}
