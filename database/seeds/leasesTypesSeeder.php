<?php

use Illuminate\Database\Seeder;

class leasesTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('leasetypes')->insert([
            [
                'type_name' => 'opvulling'
            ],
            [
                'type_name' => 'extra opvulling'
            ]
        ]);

    }
}
