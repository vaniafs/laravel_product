@extends('layouts.app')

@section('content')
    <h1>Detail Produk {{ $product->name }}</h1>
    <p>Harga: {{ $product->price }}</p>
    <p>Tanggal Produksi: {{ $product->production_date }}</p>
    <a href="{{ route('products.index') }}">Kembali ke Daftar Produk</a>
@endsection