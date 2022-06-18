<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Customers;
use App\Models\Orders;
use App\Models\Line_items;

class OrdersByProductController extends Controller
{
    public function index(Products $product){
        return Line_items::where('product_id', $product->id)->get();
    }

}
