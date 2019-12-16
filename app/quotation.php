<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quotation extends Model
{

    public $table = "quotations";

    protected $fillable = ['sales_id', 'customer_id', 'Goedgekeurd'];

    public function users() {
        return $this->belongsTo('\App\User', 'customer_id', 'id');
}

    public function salesPerson() {
        return $this->belongsTo('\App\User', 'sales_id', 'id');
    }
}
