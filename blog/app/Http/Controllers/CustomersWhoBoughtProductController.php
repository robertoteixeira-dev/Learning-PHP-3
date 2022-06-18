<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Customers;
use App\Models\Orders;
use App\Models\Line_items;

class CustomersWhoBoughtProductController extends Controller
{
    public function index(Products $product){

        //Select all the customers who bought X product.
        // select o.customer_id  from orders as o join line_items as li on o.id  = li.order_id  where li.product_id  = 5;
        
        return Line_items::join('orders', 'orders.id', 'line_items.order_id')->where('product_id', $product->id)->get();

    }
}
