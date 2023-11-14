@extends('layouts.app')

@section('content')
    <table class="table table-bordered border-primary">
        <thead class="thead-dark">
            <tr>
                <th>Nama Pelanggan</th>
                <th>Total Harga Pembelian</th>
                <th>Tanggal Beli</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale['customer_name'] }}</td>
                    <td>{{ $sale['total_price'] }}</td>
                    <td>{{ $sale['purchase_date'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
