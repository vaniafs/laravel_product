<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = [
            [
                'product' => ['name' => 'Coffee Table'],
                'sale' => ['customer_name' => 'John Doe'],
                'transaction_type' => 'Sale',
                'quantity' => 1,
                'transaction_date' => '2022-01-15',
            ],
            [
                'product' => ['name' => 'Programming Book'],
                'sale' => ['customer_name' => 'Jane Smith'],
                'transaction_type' => 'Sale',
                'quantity' => 2,
                'transaction_date' => '2022-02-20',
            ],
            [
                'product' => ['name' => 'T-shirt'],
                'sale' => ['customer_name' => 'Bob Johnson'],
                'transaction_type' => 'Sale',
                'quantity' => 3,
                'transaction_date' => '2022-03-10',
            ],
            [
                'product' => ['name' => 'Action Figure'],
                'sale' => ['customer_name' => 'Alice Williams'],
                'transaction_type' => 'Sale',
                'quantity' => 2,
                'transaction_date' => '2022-04-05',
            ],
            [
                'product' => ['name' => 'Smartphone'],
                'sale' => ['customer_name' => 'Charlie Brown'],
                'transaction_type' => 'Sale',
                'quantity' => 1,
                'transaction_date' => '2022-05-12',
            ],
        ];

        return view('transactions.index', ['transactions' => $transactions]);
    }
}
