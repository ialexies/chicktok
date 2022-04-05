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
     

        try {
            //code...

            $delivery = new Delivery();
            $delivery->deliveredBy = $request->input('deliveredBy'); 
            $delivery->recievedBy = $request->input('recievedBy');
            $delivery->changeFund = $request->input('changeFund');
            $delivery->note = $request->input('note');
            $delivery->save( );
    
            $products = json_decode(json_encode($request->input('products')));
    


            foreach ($products as $p) {
                $deliveryproduct = new DeliveryProduct();
                $deliveryproduct->delivery_id = $delivery->id;
            
                $deliveryproduct->product_id = $p->id;
                $deliveryproduct->quantity = $p->quantity;
                $deliveryproduct->save();
                }
        } catch (\Throwable $th) {
            //throw $th;
            return $th;
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
