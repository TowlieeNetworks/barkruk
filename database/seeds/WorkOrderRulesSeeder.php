<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Work_Order_Rules;

class WorkOrderRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=1; $i < 76; $i++){

            $Work_Order_Rules = [
                'work_order_id' => $i,
                'used_product_id' => random_int(1,8),
                'description' => $faker->text(),
                'price' => $faker->randomFloat(2, 200, 18000),
                'created_at' => now(),
                'updated_at' => now()
            ];
            Work_Order_Rules::create($Work_Order_Rules);
        }
    }
}
