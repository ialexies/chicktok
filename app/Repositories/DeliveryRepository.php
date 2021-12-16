<?php
namespace App\Repositories;
use App\Models\Delivery;
// use App\Models\Delivery;


class DeliveryRepository implements DeliveryRepositoryInterface{
  protected $delivery;

  public function __construct(Delivery $model){
    $this->delivery = $model;
  }

  public function all(){

    // $mydelivery =  Delivery::where('id','=',1)->hello->get();
    // $myDelivery = Delivery::find(1)->products()->get();
    // dd($myDelivery);
    // dd($mydelivery);
    // dd($delivery->products());
    // dd($delivery);
    // dd($this->delivery->all());
    // dd($this->delivery->find(1));
    // dd($this->delivery->where('id','=',1));
    // return $this->delivery->where('id','=',1);
    return $this->delivery->get();
    // return $this->delivery->get();
  }
}
