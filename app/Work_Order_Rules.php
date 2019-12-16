<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work_Order_Rules extends Model
{
    protected $table = "work_order_rules";

    protected $fillable = ['work_order_id', 'used_product_id', 'description', 'price', 'price', 'created_at', 'updated_at'];


    public function work_orders() {
        return $this->belongsTo('\App\work_orders', 'work_order_id', 'id');
    }

    public function Products() {
        return $this->hasOne('\App\Supplies', 'used_product_id');
    }
}
