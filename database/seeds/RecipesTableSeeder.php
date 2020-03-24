<?php

use Illuminate\Database\Seeder;
use App\Helpers\Uuid;


class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('recipes')->truncate();

      $faker = \Faker\Factory::create();
      $faker = Faker\Factory::create('de_CH');

      foreach (range(1,100) as $index) {

        DB::table('recipes')->insert([
          'id' => (string) UUID::v4(),
          'name' => $faker->unique()->word.' '.$faker->word,
          'notes' => $faker->paragraphs(1, true),
          'origin' => $faker->url,
          //'brew_method' => $faker->brewMethod,
          'batch_size' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 200),
          'efficiency_percentage' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 100),
          'original_gravity' => $faker->numberBetween($min = 1, $max = 50),
          'ibu' => $faker->numberBetween($min = 1, $max = 100),
          'color' => $faker->numberBetween($min = 1, $max = 100),
          'alcohol_by_volume_percentage' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 20),
          'boil_time' => $faker->numberBetween($min = 1, $max = 150),
          'carbonation' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 20),
          'created_at' => $faker->dateTimeBetween($startDate = "-200 days", $endDate = "now")->format('Y-m-d')
        ]);
      }
    }
}
