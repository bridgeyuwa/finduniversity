<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class CollegeSeederTable extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create('App\College');

        for ($i = 1; $i <= 9; $i++) 
        {

            DB::table('colleges')->insert([
                'id' => $i,
                'name' => $faker->firstNameMale,
            ]);
        }
    }

}
