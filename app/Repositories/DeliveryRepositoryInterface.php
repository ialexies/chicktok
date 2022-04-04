<?php

namespace App\Repositories;
use Illuminate\Http\Request;
interface DeliveryRepositoryInterface{
  public function all();
  public function store(Request $request);
}
