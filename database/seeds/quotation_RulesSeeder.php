<?php

use Illuminate\Database\Seeder;
use App\Quotation_Rules;
use Faker\Generator as Faker;


class quotation_RulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=1; $i < 501; $i++){

            $quotation = [
                'quotation_id' => $i,
                'supply_id' => random_int(1,8),
                'description' => $faker->text,
                'delivery_date' => $faker->date(now())


            ];
            Quotation_Rules::create($quotation);
        }
    }
}
