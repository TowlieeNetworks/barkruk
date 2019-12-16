<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\LeaseRules;

class lease_RulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=1; $i < 151; $i++){

            $quotation = [
                'lease_id' => $i,
                'supply_id' => random_int(1,8),
                'price' => $faker->randomFloat(2, 200, 18000)
            ];
            LeaseRules::create($quotation);
        }
    }
}
