<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Customers;
use App\Models\Orders;
use App\Models\Line_items;
use Illuminate\Support\Facades\DB;

class MostPurchasedProductController extends Controller
{
    public function index(){

        /*
        select max(sum_purchases), p.title
        from (
	    SELECT product_id , sum(quantity) AS sum_purchases
	    FROM line_items v_stat
	    GROUP BY v_stat.product_id order by sum_purchases desc limit 1
        ) x join products p on p.id = x.product_id ;
        */

        return Products::join(DB::raw('(SELECT product_id , sum(quantity) AS sum_purchases
                            FROM week3db.line_items v_stat
                            GROUP BY v_stat.product_id order by sum_purchases desc limit 1) x'), function($join){
                                $join->on('products.id', '=', 'x.product_id');
                            })->select('products.title', 'x.sum_purchases')->first();
    }


}
