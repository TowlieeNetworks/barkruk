<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplies extends Model
{
    public $table = "supplies";

    protected $fillable = ['name', 'unit_price', 'decription', 'amount', 'created_at', 'updated_at'];
}
