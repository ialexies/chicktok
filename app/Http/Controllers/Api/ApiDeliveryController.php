<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Delivery;
use App\Http\Resources\Delivery as DeliveryResource;
use App\Repositories\DeliveryRepositoryInterface;

class ApiDeliveryController extends Controller
{
    protected  $deliveryRepo;

    public function __construct(DeliveryRepositoryInterface $model){
        $this->deliveryRepo = $model;
    }

    public function deliveries(){
        $deliveries = DeliveryResource::collection($this->deliveryRepo->all());
        // $deliveries = DeliveryResource::collection(Delivery::paginate(10));
        return  $deliveries ;
    }

}
