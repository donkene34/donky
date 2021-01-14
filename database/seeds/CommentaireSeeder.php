<?php

use Faker\Factory;
use App\commentaire;
use Illuminate\Database\Seeder;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i <= 100 ; $i++) {
            commentaire::create([
                'commentaire' => $faker->sentence(15),
                'user_id'  => $faker->numberBetween(1,3),
                'video_id' => $faker->numberBetween(1,3)
            ]);
        }
    }
}
