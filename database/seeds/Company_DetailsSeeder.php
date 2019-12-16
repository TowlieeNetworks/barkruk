<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\ComanyDetails;

class Company_DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=161; $i < 191; $i++){

            $CompanyDetails = [
                'user_id' => $i,
                'company_name' => $faker->company,
                'street_name' => $faker->streetName,
                'number' => $faker->numberBetween(0,300),
                'postal_code' => $faker->postcode,
                'city' => $faker->city,
                'phone_number' => $faker->phoneNumber,
                'BKR_registered' => 0

            ];
        ComanyDetails::create($CompanyDetails);
        }
        for($i=191; $i < 201; $i++){

            $CompanyDetails = [
                'user_id' => $i,
                'company_name' => $faker->company,
                'street_name' => $faker->streetName,
                'number' => $faker->numberBetween(0,300),
                'postal_code' => $faker->postcode,
                'city' => $faker->city,
                'phone_number' => $faker->phoneNumber,
                'BKR_registered' => 1

            ];
            ComanyDetails::create($CompanyDetails);
        }
    }
}
