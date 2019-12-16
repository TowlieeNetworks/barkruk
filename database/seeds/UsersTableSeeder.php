<?php

use Illuminate\Database\Seeder;
use \Faker\Generator as Faker;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        \DB::table('users')->insert([
           [
               'email' => 'Ceo@barroc.nl',
               'name'  => 'Ceo',
               'password' => Hash::make('barroc123'),
               'role_id'    => 1,
               'Active' => 1

           ],
            [
                'email'  => 'Sales@barroc.nl',
                'name'   => 'Sales Medewerker',
                'password' => Hash::make('barroc123'),
                'role_id'  => 2,
                'Active' => 1
            ],
            [
                'email' => 'Finance@barroc.nl',
                'name'  =>  'Finance Medewerker',
                'password' => Hash::make('barroc123'),
                'role_id'    => 3,
                'Active' => 1
            ],
            [
                'email' => 'Maintenance@barroc.nl',
                'name'  =>  'Maintenance Medewerker',
                'password' => Hash::make('barroc123'),
                'role_id'    => 4,
                'Active' => 1
            ],
            [
                'email' => 'HeadMaintenance@barroc.nl',
                'name'  =>  'HeadMaintence Medewerker',
                'password' => Hash::make('barroc123'),
                'role_id'    => 5,
                'Active' => 1
            ],
           [
               'email' => 'Inkoop@barroc.nl',
               'name'  =>  'Inkoop Medewerker',
               'password' => Hash::make('barroc123'),
               'role_id'    => 6,
               'Active' => 1
           ],

            [
                'email'  => 'MennoVermeulen1@gmail.com',
                'name'   => 'Menno Vermeulen',
                'password' => Hash::make('Menno123'),
                'role_id'  => 7,
                'Active' => 1
            ],
            [
                'email'  => 'RuurdSluipschutter@gmail.com',
                'name'   => 'Ruurd Sluipschutter',
                'password' => Hash::make('Ruurd123'),
                'role_id'  => 7,
                'Active' => 1
            ],
            [
                'email'  => 'Stijn_vandongen@outlook.com',
                'name'   => 'Stijn van Dongen',
                'password' => Hash::make('Stijn123'),
                'role_id'  => 7,
                'Active' => 1
            ],
            [
                'email'  => 'CarloVanDenElshout@gmail.com',
                'name'   => 'Carlo van den Elshout',
                'password' => Hash::make('Carola123'),
                'role_id'  => 7,
                'Active' => 1
            ]


        ]);


        for($i=0; $i < 150; $i++){
            $users = [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('barroc123'),
                'role_id' => 7,
                'Active' => 1
            ];

            User::create($users);
        }
        for($r=0; $r < 40; $r++){
            $users = [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('barroc123'),
                'role_id' => 7,
                'Active' => 0
            ];

            User::create($users);
        }
    }
}
