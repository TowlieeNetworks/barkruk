<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leases extends Model
{
    public $table = "leases";

    protected $fillable = ['leasetype_id', 'customer_id', 'finance_id', 'created_at', 'updated_at'];
}
