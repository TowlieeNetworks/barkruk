<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComanyDetails extends Model
{
    public $table = "companydetails";

    protected $fillable = ['user_id', 'company_name', 'street_name', 'number', 'postal_code', 'city', 'phone_number', 'BKR_registered'];

    // hasOne
    // hasMany
    // belongsTo
    // belongsToMany

    public function users() {
        return $this->belongsTo('\App\User', 'user_id');
    }
}
