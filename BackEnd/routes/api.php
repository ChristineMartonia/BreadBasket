<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/', [UserController::class, 'index']);



Route::middleware('cors')->get('/products', function (Request $request) {
    return $request->product();
    Route::get('products','index');
});
Route::controller(ProductController::class)->group(function () {
    Route::get('products','index');
    Route::post('products','store');
    Route::get('products/{id}','show');
    Route::delete('products/{id}','destroy');
    Route::put('products/{id}','update');


});

Route::get('', ['middleware' => 'cors', function() {
    return 'You did it!';
}]);
