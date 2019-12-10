<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase_rules extends Model
{
    protected $fillable = ['id', 'purchase_id', 'supply_id', 'amount',  'total_price', 'delivery_date', 'created_at', 'updated_at'];

    public function purchase() {
        return $this->hasOne('\App\purchase', 'purchase_id');
    }

    public function supply() {
        return $this->hasOne('\App\supply', 'supply_id');
    }

}
