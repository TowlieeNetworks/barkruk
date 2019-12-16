<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\work_order;

class WorkOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 150; $i++){

            $work_orders = [
                'user_id' => random_int(7,161),
                'lease_id' => random_int(1,150),
                'description' => $faker->text(),
                'date_time' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ];
            work_order::create($work_orders);
        }
    }
}
