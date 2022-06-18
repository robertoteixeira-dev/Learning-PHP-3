<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customers::all();

        return view('customers', ['customers' => $customers,]);
    }
}
