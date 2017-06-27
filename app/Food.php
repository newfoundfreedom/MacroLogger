<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    // Table Name
    protected $table = 'foods';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\Meal');
    }
}