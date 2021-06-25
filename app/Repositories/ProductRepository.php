<?php
namespace App\Repositories;
use App\Models\Product;


class ProductRepository implements ProductRepositoryInterface{
  protected $product;

  public function __construct(Product $model){
    $this->product = $model;
  }

  public function all(){
    return $this->product->all();
  }
}
