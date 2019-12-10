<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Malfunctions extends Model
{
    public $table = "malfunctions";

    protected $fillable = ['broken_product', 'description', 'preferred_date'];
}


