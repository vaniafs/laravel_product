@extends('layouts.app')

@section('content')
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Penjualan</th>
                <th>Tipe Transaksi</th>
                <th>Jumlah</th>
                <th>Tanggal Transaksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td>{{ htmlspecialchars($transaction['product']['name']) }}</td>
                    <td>{{ htmlspecialchars($transaction['sale']['customer_name']) }}</td>
                    <td>{{ htmlspecialchars($transaction['transaction_type']) }}</td>
                    <td>{{ htmlspecialchars($transaction['quantity']) }}</td>
                    <td>{{ htmlspecialchars($transaction['transaction_date']) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
