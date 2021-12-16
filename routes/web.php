<?php

use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/products', [ProductController::class, 'index']);

// Route::prefix('products')->group(function () {
//     Route::get('/', [ProductController::class, 'index']);
//     Route::get('/test', [ProductController::class, 'test']);
// });


// Route::resource('products', [ProductController::class]);




Route::name('dashboard.')->prefix('dashboard')->group(function (){
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('products', ProductController::class);
});

// 'deliverdBy', 'recievedBy','changeFund','note','product_id',
// Route::get('deliveries/dummy', function () {

//         $delivery=Delivery::findorFail(1);
//             // dd($user);

//             foreach($delivery->products as $product){
//             // dd($role);
//             echo $product->name . "<br>";
//             // dd($role);
//         }
//     });



// Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::post('/post-category-form', [CategoryController::class, 'store']);
// Route::get('/create-category', [CategoryController::class, 'create']);
// Route::get('/all-categories', [CategoryController::class, 'index']);
// Route::get('edit-category/{id}',[CategoryController::class, 'edit']);
// Route::post('update-category/{id}', [CategoryController::class, 'update']);
// Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);
// Route::get('get-product-form', [ProductController::class,'create']);
// Route::post('post-product-form', [ProductController::class,'store']);
// Route::get('all-products', [ProductController::class,'index']);
// Route::get('edit-product/{id}', [ProductController::class,'edit']);
// Route::post('post-product-edit-form/{id}', [ProductController::class,'update']);
// Route::get('delete-product/{id}', [ProductController::class,'destroy']);
// Route::get('get-slider-form', [SliderController::class,'create']);
// Route::post('post-slider-form', [SliderController::class,'store']);
// Route::get('all-sliders', [SliderController::class,'index']);
// Route::get('edit-slider/{id}', [SliderController::class,'edit']);
// Route::post('post-slider-edit-form/{id}', [SliderController::class,'update']);
// Route::get('delete-slider/{id}', [SliderController::class,'destroy']);



