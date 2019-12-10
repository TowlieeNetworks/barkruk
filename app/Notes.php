<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    public $table = "notes";

    protected $fillable = ['sales_id', 'customer_id', 'content'];

    //id	sales_id	customer_id	content	created_at	updated_at

    // hasOne
    // hasMany
    // belongsTo
    // belongsToMany

    public function users() {
        return $this->belongsTo('\App\User', 'customer_id');
    }

    public function salesPerson() {
        return $this->belongsTo('\App\User', 'sales_id');
    }
}
