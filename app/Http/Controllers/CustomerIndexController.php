<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerIndexController extends Controller
{
    public function __invoke()
    {
        $customer = Customer::query()
            ->get();

        return view('customer.index',
            [
                'title' => 'Customers',
                'customers'=> $customer
            ]
        );
    }
}
