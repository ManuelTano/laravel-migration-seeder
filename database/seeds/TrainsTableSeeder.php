<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_train = new Train();
            $new_train->azienda = $faker->word();
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->numberBetween(1, 24);
            $new_train->orario_di_arrivo = $faker->numberBetween(1, 24);
            $new_train->codice_treno = $faker->numberBetween(1, 200);
            $new_train->numero_carrozze = $faker->numberBetween(1, 20);
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();
            $new_train->save();
        }
    }
}
