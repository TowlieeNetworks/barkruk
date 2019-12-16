<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\quotation;

class quotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 500; $i++){

            $quotation = [
                'sales_id' => 2,
                'customer_id' => random_int(10,150),
                'Goedgekeurd' => 1,
                'date' => $faker->date(now())


            ];
            quotation::create($quotation);
        }
    }
}
