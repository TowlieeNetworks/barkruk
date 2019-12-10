<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaseRules extends Model
{
    public $table = "lease_rules";

    protected $fillable = ['lease_id', 'supply_id', 'price', 'created_at', 'updated_at'];
}
