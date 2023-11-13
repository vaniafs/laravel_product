<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Smartphone', 'price' => 1000, 'production_date' => '2022-01-01'],
            ['name' => 'T-shirt', 'price' => 20, 'production_date' => '2022-02-15'],
            ['name' => 'Programming Book', 'price' => 50, 'production_date' => '2021-12-10'],
            ['name' => 'Coffee Table', 'price' => 150, 'production_date' => '2022-03-05'],
            ['name' => 'Action Figure', 'price' => 30, 'production_date' => '2022-04-20'],
        ];

        return view('products.index', ['products' => $products]);
    }
}