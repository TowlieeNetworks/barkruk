<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quotation extends Model
{

    public $table = "quotations";

    protected $fillable = ['sales_id', 'customer_id'];

    public function users() {
        return $this->belongsTo('\App\User', 'customer_id');
    }

    public function salesPerson() {
        return $this->belongsTo('\App\User', 'sales_id');
    }
}
