<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Delivery;
use App\Models\DeliveryProduct;
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
    public function store(Request $request){
        // dd($request->input('deliveredBy'));
        // print($request);bnbn
        // return   $request ;
        $deliveries = DeliveryResource::collection($this->deliveryRepo->store($request));
        $delivery = new Delivery();
        $delivery->deliveredBy = $request->input('deliveredBy'); 
        $delivery->recievedBy = $request->input('recievedBy');
        $delivery->changeFund = $request->input('changeFund');
        $delivery->note = $request->input('note');
      



$delivery->save( );

$products = json_decode($request->input('products'));
// dd($products);
foreach ($products as $p) {
    $deliveryproduct = new DeliveryProduct();
    $deliveryproduct->delivery_id = $delivery->id;
    // dd($p);
    $deliveryproduct->product_id = $p->product_id;
    $deliveryproduct->quantity = $p->quantity;
    $deliveryproduct->save();
    }


// $delivery->
// $deliveryproduct->delivery_
// // $product->id  ;


    //    $delivery->products()->save($deliveryproduct );

    //    $delivery->products()->createMany($request->input('products'));
    //     // dd($delivery->id);

// dd($deliveries);
        // // $deliveries = DeliveryResource::collection(Delivery::paginate(10));
        // return  'fdfdfdf' ;
    }

}
