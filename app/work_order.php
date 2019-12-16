<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class work_order extends Model
{
    public $table = "work_orders";

    protected $fillable = ['user_id', 'lease_id', 'description', 'date_time', 'created_at', 'updated_at'];

    public function user() {
        return $this->hasOne('\App\User', 'user_id');
    }
    public function leases() {
        return $this->hasOne('\App\leases', 'lease_id');
    }
}
