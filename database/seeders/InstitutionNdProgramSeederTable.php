<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class InstitutionNdProgramSeederTable extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create('App\Program');
        for ($i = 1; $i <= 100; $i++) {
            for ($n = 1; $n <= 25; $n++) {

                DB::table('institution_programnd')->insert([
                    
                    'institution_id' => $i,
                    'programnd_id' => $faker->numberBetween(1, 75),
                    'description' => 1,
                    'duration' => 1,
                    'fee_high' => 1,
                    'fee_low' => 1
                ]);
            }
        }
    }

}
