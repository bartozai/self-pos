<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
    <!-- Tampilkan informasi produk lainnya sesuai kebutuhan -->

    <h2>Transactions:</h2>
    @if(isset($transactions) && count($transactions) > 0)
        <ul>
            @foreach($transactions as $transaction)
                <li>Transaction ID: {{ $transaction->id }}, Total: ${{ $transaction->total }}, Payment Type: {{ $transaction->tipe_bayar }}</li>
            @endforeach
        </ul>
    @else
        <p>No transactions for this product.</p>
    @endif

    <!-- Tautkan ke halaman tambah transaksi -->
    <a href="{{ route('transactions.create') }}" class="btn btn-primary btn-sm">Add Transaction</a>


    <!-- Tautkan ke halaman lain jika diperlukan -->
    <a href="{{ route('products.index') }}" class="btn btn-success btn-sm">Back to Products</a>
@endsection
