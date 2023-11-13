@extends('layouts.app')

@section('content')
    <h1>Daftar Produk</h1>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Tanggal Produksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>{{ $product['production_date'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
