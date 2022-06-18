<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrdersByProductController;
use App\Http\Controllers\SalesByProductController;
use App\Http\Controllers\CustomersWhoBoughtProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductsByCustomerController;
use App\Http\Controllers\ProductsBetweenDatesByCustomerController;
use App\Http\Controllers\MostPurchasedProductController;

use App\Models\Products;
use App\Models\Customers;
use App\Models\Orders;
use App\Models\Line_items;

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


//FINALIZADOS
Route::get('products', [ProductController::class, 'index']);
Route::get('customers', [CustomerController::class, 'index']);
Route::get('orders/by-product/{product}', [OrdersByProductController::class, 'index']);
Route::get('products/{product}/sales', [SalesByProductController::class, 'index']);
Route::get('products/{product}/customers', [CustomersWhoBoughtProductController::class, 'index']);
Route::get('orders/{from}/{to}', [OrderController::class, 'index']);


//FEITO
Route::get('customers/{customer}/products', [ProductsByCustomerController::class, 'index']);


//FEITO
Route::get('products/{customer}/{from}/{to}', [ProductsBetweenDatesByCustomerController::class, 'index']);

// FEITO
Route::get('products/most_purchased', [MostPurchasedProductController::class, 'index']);


/*
Select all the products a given customer has bought (use model binding). - id customer
Select the total amount of products a X customer bought between 2 dates. - id customer e datas
Select what is the most purchased product. - /products/mustPurchesed
*/
