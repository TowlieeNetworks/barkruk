<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
           [
               'email' => 'admin@barroc.nl',
               'name'  => 'Admin Medewerker',
               'password' => Hash::make('barroc123'),
               'role_id'    => 1
           ],
            [
                'email'  => 'sales@barroc.nl',
                'name'   => 'Sales Medewerker',
                'password' => Hash::make('barroc123'),
                'role_id'  => 2
            ],
            [
                'email' => 'finance@barroc.nl',
                'name'  =>  'Finance Medewerker',
                'password' => Hash::make('barroc123'),
                'role_id'    => 3
            ],
            [
                'email' => 'Maintenance@barroc.nl',
                'name'  =>  'Maintenance Medewerker',
                'password' => Hash::make('barroc123'),
                'role_id'    => 4
            ],
            [
                'email' => 'HeadMaintenance@barroc.nl',
                'name'  =>  'HeadMaintence Medewerker',
                'password' => Hash::make('barroc123'),
                'role_id'    => 5
            ],
           [
               'email' => 'inkoop@barroc.nl',
               'name'  =>  'Inkoop Medewerker',
               'password' => Hash::make('barroc123'),
               'role_id'    => 6
           ],

            [
                'email'  => 'Mennovermeulen1@gmail.com',
                'name'   => 'Menno Vermeulen',
                'password' => Hash::make('Menno123'),
                'role_id'  => 7
            ],
            [
                'email'  => 'RuurdSluipschutter@gmail.com',
                'name'   => 'Ruurd Sluipschutter',
                'password' => Hash::make('Ruurd123'),
                'role_id'  => 7
            ],
            [
                'email'  => 'Stijn_vandongen@outlook.com',
                'name'   => 'Stijn van Dongen',
                'password' => Hash::make('Stijn123'),
                'role_id'  => 7
            ],
            [
                'email'  => 'carloelshout@gmail.com',
                'name'   => 'Carlo van de Elshout',
                'password' => Hash::make('Carola123'),
                'role_id'  => 7
            ]


        ]);
    }
}
