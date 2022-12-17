<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use App\Models\People;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
       DB::table('people')->delete();

        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            People::create([
                'name' => $faker->firstName,
                'surname' => $faker->lastName,
                'email' =>$faker-> email,
                'phone' => $faker->phoneNumber,
                'address'=> $faker->numberBetween($min=1,$max=99),
                'city' => $faker->city,
                'street' => $faker->streetAddress,
                'state' => $faker->country,
                'post_code' =>$faker->postcode

            ]);
        }

    
    }
}
