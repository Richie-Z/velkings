<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table= ('bus');
    protected $fillable = ['plate_number','brand','seat','price_per_day'];
}
