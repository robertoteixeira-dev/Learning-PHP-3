<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Customers;
use App\Models\Orders;
use App\Models\Line_items;

class ProductsByCustomerController extends Controller
{
    public function index(Customers $customer){


        //Select all the products a given customer has bought (use model binding). - id customer
        //select distinct (p.title) from line_items as li join orders as o on o.id = li.order_id join products p on
        //p.id  = li.product_id where o.customer_id  = 1;

        return Line_items::join('orders', 'orders.id', 'line_items.order_id')->join('products', 'products.id', 'line_items.product_id')->where('customer_id', $customer->id)->get();

        

    }
}
