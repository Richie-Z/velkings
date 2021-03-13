<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   	protected $table= ('oders');
   	protected $fillable = ['contact_name','contact_number','start_rent_days','total_rent_days','bus_id','drivers_id'];
}
