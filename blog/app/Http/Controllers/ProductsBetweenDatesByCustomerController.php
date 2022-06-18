<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Customers;
use App\Models\Orders;
use App\Models\Line_items;

class ProductsBetweenDatesByCustomerController extends Controller
{
    public function index(Customers $customer, string $from, string $to){

        //select sum(item_count) from orders where customer_id = 1 and placed_at BETWEEN'2022-06-09' AND '2022-06-11';
        //Select the total amount of products a X customer bought between 2 dates.

        return Orders::whereBetween('placed_at', [$from, $to])->where('customer_id', $customer->id)->sum('orders.item_count');

      
    }
}
