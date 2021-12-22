<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class InstitutionSeederTable extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create('App\Institution');
        
        for ($i = 1; $i <= 500; $i++) 
        {
        
        DB::table('institutions')->insert([
            'id' => $i,
            'name' => $faker->lastName,
            'state_id' => $faker->numberBetween(1, 37),
            'lga_id' => $faker->numberBetween(1, 700),
            'term_id' => $faker->numberBetween(2, 4),
            'category_id' => $faker->numberBetween(1,4),
            'address' => $faker->address,
            'schooltype_id' => $faker->numberBetween(1, 3),
        ]);
        
        }
    }

}
