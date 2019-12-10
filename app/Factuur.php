<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factuur extends Model
{
    public $table = "Factuurs";

    protected $fillable = ['supply_id', 'user_id', 'amount', 'created_at', 'updated_at'];
}
