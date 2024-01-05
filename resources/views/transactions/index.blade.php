<!-- File: resources/views/transactions/index.blade.php -->

@extends('layouts.app')

@section('page_title', 'Transaction List')

@section('content')
    <div class="container mt-4">
        <h2>Transaction List</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Total</th>
                    <th>Bayar</th>
                    <th>Tipe Bayar</th>
                    
                   
                </tr>
            </thead>
            <a href="{{ route('products.index') }}" class="btn btn-primary">Kembali</a>

            <tbody>
                @foreach ($transactions as $transaction)
    <h3>Transaction ID: {{ $transaction->id }}</h3>
    <ul>
        @foreach ($transaction->products as $product)
            <li>{{ $product->name }} - {{ $product->price }}</li>
        @endforeach
    </ul>
@endforeach
            </tbody>
        </table>
    </div>
@endsection
