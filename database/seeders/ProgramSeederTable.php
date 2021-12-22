<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class ProgramSeederTable extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create('App\Program');

        for ($i = 1; $i <= 100; $i++) 
        {

            DB::table('programs')->insert([
                'id' => $i,
                'college_id' => $faker->numberBetween(1, 9),
                'honor_id' => $faker->numberBetween(1,7),
                'name' => $faker->name(),
                'description' =>$faker->text()
                    
            ]);
        }
    }

}
