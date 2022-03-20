<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});

Route::apiResource('employees', 'App\Http\Controllers\Api\EmployeeController');
Route::apiResource('customers', 'App\Http\Controllers\Api\CustomerController');
Route::apiResource('suppliers', 'App\Http\Controllers\Api\SupplierController');
Route::apiResource('catogories', 'App\Http\Controllers\Api\CategoryController');
Route::apiResource('products', 'App\Http\Controllers\Api\ProductController');

Route::get('customers/getSales1', function () {
	$sale = Sale::find(1);
	$customer = Customer::find(2);
	$sale = $customer()->associate($customer);
	$sale->save();
	dd($save->customer);
});

Route::get('customers/getSales2', function () {
	$customer = Customer::find(1);
	$sale2 = Sale::find(1);
	$customer->Sales()->save($sale2);
	dd($customer->sales);
});

Route::get('orders/getProducts', function () {
	$order = Order::find(1);
	dd($order->products);
});

Route::get('products/getOrders', function () {
	$product = Product::find(1);
	dd($product->orders);
});