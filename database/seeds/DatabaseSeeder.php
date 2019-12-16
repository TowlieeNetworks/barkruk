<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SuppliesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PurchasesTableSeeder::class);
        $this->call(Purchase_rulesTableSeeder::class);
        $this->call(Company_DetailsSeeder::class);
        $this->call(quotationSeeder::class);
        $this->call(quotation_RulesSeeder::class);
        $this->call(leasesTypesSeeder::class);
        $this->call(leasesSeeder::class);
        $this->call(lease_RulesSeeder::class);
        $this->call(WorkOrderSeeder::class);
        $this->call(WorkOrderRulesSeeder::class);

    }
}
