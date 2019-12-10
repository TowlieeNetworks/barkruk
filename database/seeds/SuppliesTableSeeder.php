<?php

use Illuminate\Database\Seeder;
use \Faker\Generator as Faker;
class SuppliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
    $table->string('name');
    $table->double('unit_price');
    $table->string('description');
    $table->integer('amount');
     * @return void
     */
    public function run(Faker $faker)
    {
        \DB::table('supplies')->insert(
            [
                [
                    'name'      => 'koffiemachine 1',
                    'amount'  => rand(1, 10),
                    'description'    => $faker->text(100),
                    'unit_price' => 2600.75
                ],
                [
                    'name'      => 'koffiemachine 2',
                    'amount'  => rand(1, 10),
                    'description'    => $faker->text(100),
                    'unit_price' => 2800.50
                ],
                [
                    'name'      => 'koffieboon type 1',
                    'amount'  => rand(1, 10),
                    'description'    => $faker->text(100),
                    'unit_price' => 40.55
                ],

                [
                    'name'      => 'koffieboon type 2',
                    'amount'  => rand(1, 10),
                    'description'    => $faker->text(100),
                    'punit_price' => 43.55
                ],

                [
                    'name'      => 'waterfilter',
                    'amount'  => rand(1, 10),
                    'description'    => $faker->text(100),
                    'unit_price' => 28.55
                ],

                [
                    'name'      => 'slang 23mm',
                    'amount'  => rand(1, 10),
                    'description'    => $faker->text(100),
                    'unit_price' => 3.45
                ],

                [
                    'name'      => 'slang 45mm',
                    'amount'  => rand(1, 10),
                    'description'    => $faker->text(100),
                    'unit_price' => 4.65
                ],

                [
                    'name'      => 'elektrische pomp',
                    'amount'  => rand(1, 10),
                    'description'    => $faker->text(100),
                    'unit_price' => 89.55
                ],



            ]

        );
    }
}
