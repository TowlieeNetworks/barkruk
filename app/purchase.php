<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    protected $fillable = ['id', 'user_id', 'date_time', 'created_at','updated_at'];

    public function users() {
        return $this->belongsTo('\App\User', 'user_id');
    }
}
