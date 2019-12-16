<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\leases;

class leasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 150; $i++){

            $leases = [
                'leasetype_id' => random_int(1,2),
                'customer_id' => random_int(10,150),
                'finance_id' => 3
            ];
            leases::create($leases);
        }
    }
}
