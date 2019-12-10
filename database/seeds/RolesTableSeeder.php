<?php

use Illuminate\Database\Seeder;
use \Faker\Generator as Faker;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        \DB::table('roles')->insert([
           [
               'role_name' => 'admin'
           ],
           [
               'role_name' => 'sales'
           ],
           [
               'role_name' => 'finance'
           ],
           [
               'role_name' => 'maintenance'
           ],
           [
               'role_name' => 'head_maintenance'
           ],
            [
                'role_name' => 'inkoop'
            ],
            [
                'role_name' => 'customer'
            ]
        ]);
    }
}
