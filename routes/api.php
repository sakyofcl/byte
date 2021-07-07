<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\adminOrderController;
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

Route::get('/product-category', [ProductController::class, 'listCategory']);
Route::get('/show-products', [ProductController::class, 'showProductsData']);

// edit category api route admin
Route::get('/get-category', [CategoryController::class, 'editCategory']);

//add product page get subcategory
Route::get('/get-sub-category', [CategoryController::class, 'getSubCategory']);

//search product search
Route::get('/search', [ProductController::class, 'search']);

//update product
Route::get('/edit/product/', [ProductController::class, 'editProduct']);

Route::get('/mail/invoice', [OrderController::class, 'sendInvoice']);

//check order
Route::get('/check/order', [OrderController::class, 'orderDetails']);

//order status
Route::get('/order/status', [adminOrderController::class, 'updateOrderStatus']);

//order payment status
Route::get('/order/payment/status', [adminOrderController::class, 'updateOrderPaymentStatus']);
