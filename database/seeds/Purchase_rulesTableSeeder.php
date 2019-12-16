<?php

use Illuminate\Database\Seeder;

class Purchase_rulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('purchase_rules')->insert([
           [
               'purchase_id'    => 1,
               'supply_id'      => 1,
               'amount'         => 3,
               'total_price'    => 10.3,
               'delivery_date'  => now(),
               'created_at'  => now(),
               'updated_at'  => now()
           ],
           [
               'purchase_id'    => 1,
               'supply_id'      => 3,
               'amount'         => 3,
               'total_price'     => 10.3,
               'delivery_date'  => now(),
               'created_at'  => now(),
               'updated_at'  => now()
           ],
           [
               'purchase_id'    => 2,
               'supply_id'      => 4,
               'amount'         => 3,
               'total_price'     => 10.3,
               'delivery_date'  => now(),
               'created_at'  => now(),
               'updated_at'  => now()
           ],
           [
               'purchase_id'    => 3,
               'supply_id'      => 1,
               'amount'         => 3,
               'total_price'     => 10.3,
               'delivery_date'  => now(),
               'created_at'  => now(),
               'updated_at'  => now()
           ],
           [
               'purchase_id'    => 3,
               'supply_id'      => 5,
               'amount'         => 3,
               'total_price'     => 10.3,
               'delivery_date'  => now(),
               'created_at'  => now(),
               'updated_at'  => now()
           ],
           [
               'purchase_id'    => 4,
               'supply_id'      => 3,
               'amount'         => 3,
               'total_price'     => 10.3,
               'delivery_date'  => now(),
               'created_at'  => now(),
               'updated_at'  => now()
           ],
           [
               'purchase_id'    => 4,
               'supply_id'      => 6,
               'amount'         => 3,
               'total_price'     => 10.3,
               'delivery_date'  => now(),
               'created_at'  => now(),
               'updated_at'  => now()
           ],
        ]);
    }
}
