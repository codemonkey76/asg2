<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        return view('customers.index');
    }
    public function show(Customer $customer)
    {

    }

    public function edit(Customer $customer)
    {

    }
}
