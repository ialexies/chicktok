<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    public function products(){
// dd($this);
     
        return $this->belongsToMany('App\Models\Product')->withPivot('quantity','created_at');
        // return $this->hasMany('App\Models\Product')->withPivot('quantity','created_at');
    }

    protected $fillable = [
        'deliverdBy', 'recievedBy','changeFund','note','product_id',
    ];
}
