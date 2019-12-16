<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation_Rules extends Model
{
    public $table = "quotation_rules";

    protected $fillable = ['quotation_id', 'supply_id', 'description' , 'created_at', 'updated_at'] ;

    public function quotation() {
        return $this->belongsTo('\App\quotation', 'quotation_id');
    }

    public function Supply() {
        return $this->belongsTo('\App\Supplies', 'supply_id');
    }
}
