<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = [
            ['customer_name' => 'John Doe', 'total_price' => 500, 'purchase_date' => '2022-01-15'],
            ['customer_name' => 'Jane Smith', 'total_price' => 800, 'purchase_date' => '2022-02-20'],
            ['customer_name' => 'Bob Johnson', 'total_price' => 300, 'purchase_date' => '2022-03-10'],
            ['customer_name' => 'Alice Williams', 'total_price' => 1200, 'purchase_date' => '2022-04-05'],
            ['customer_name' => 'Charlie Brown', 'total_price' => 250, 'purchase_date' => '2022-05-12'],
        ];

        return view('sales.index', ['sales' => $sales]);
    }
}
