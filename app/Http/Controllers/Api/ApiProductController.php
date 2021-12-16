<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\Product as ProductResource;
use App\Repositories\ProductRepositoryInterface;

class ApiProductController extends Controller
{
    protected  $productRepo;

    public function __construct(ProductRepositoryInterface $model){
        $this->productRepo = $model;
    }


    public function products(){
        // $products = ProductResource::collection(Product::all());
        // $products = ProductResource::collection(Product::paginate(10));
        $products = ProductResource::collection($this->productRepo->all());
        $products = ProductResource::collection(Product::paginate(10));
        return  $products ;
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
