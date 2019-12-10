<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public $table = "roles";

    protected $fillable = ['role_name', 'created_at', 'updated_at'];


}