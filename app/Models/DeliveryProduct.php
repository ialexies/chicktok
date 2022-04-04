<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryProduct extends Model
{
    use HasFactory;

	// public function deliveryProducts(){
	// 	return $this->belongsToMany('App\Models\Delivery');
    // }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'delivery_product';
}
