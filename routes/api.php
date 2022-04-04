<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Api\ApiProductController;
use App\Http\Controllers\Api\ApiDeliveryController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});

// Route::prefix('products')->middleware('auth:api')->group(function () {
Route::prefix('products')
// ->middleware('auth:api')
    ->group(function () {
    Route::get('/', [ApiProductController::class, 'products']);
    Route::get('/test', [ApiProductController::class, 'test']);
    });

Route::prefix('delivery')->group(function() {
    Route::get('/', [ApiDeliveryController::class, 'deliveries']);
    Route::post('/add', [ApiDeliveryController::class, 'store']);
    // Route::get('/', function() {
    //     return view('secrets');
    // });
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});
