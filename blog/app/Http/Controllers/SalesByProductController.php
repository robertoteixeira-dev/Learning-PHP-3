<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Customers;
use App\Models\Orders;
use App\Models\Line_items;

class SalesByProductController extends Controller
{
    public function index(Products $product){

        //Select total sales for a given product (use model binding).
        //SELECT sum(line_items.item_total) FROM line_items WHERE product_id = 5;
        return Line_items::where('product_id', $product->id)->sum('item_total');
    }
}
