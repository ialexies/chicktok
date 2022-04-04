<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Delivery extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // print('fdf');
        // return parent::toArray($request);
// dd('fdf');
// dd('fdf');
        return [
            'id'=>$this->id,
            'deliveredBy'=>$this->deliveredBy,
            'recievedBy'=>$this->recievedBy,

            'changeFund'=>$this->changeFund,

            'note'=>$this->note,

            'createdAt'=>$this->created_at,
            'products'=>$this->products,


        ];
    }
}
