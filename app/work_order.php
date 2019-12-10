<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class work_order extends Model
{
    public $table = "work_orders";

    protected $fillable = ['user_id', 'lease_id', 'description', 'date_time', 'created_at', 'updated_at'];
}
