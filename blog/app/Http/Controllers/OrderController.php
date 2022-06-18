<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Customers;
use App\Models\Orders;
use App\Models\Line_items;

class OrderController extends Controller
{

    public function index(string $from, string $to){

        //Select all orders between X and Y dates using the query string.
        //SELECT * FROM orders WHERE placed_at BETWEEN'2022-06-09' AND '2022-06-10';

        return Orders::whereBetween('placed_at', [$from, $to])->get();

    }
    //Reservation::whereBetween('reservation_from', [$from, $to])->get();


}
