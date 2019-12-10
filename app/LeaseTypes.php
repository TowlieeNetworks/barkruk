<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaseTypes extends Model
{
    public $table = "leaseTypes";

    protected $fillable = ['type_name', 'created_at', 'updated_at'];
}
