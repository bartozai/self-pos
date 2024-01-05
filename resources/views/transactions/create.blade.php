<!-- resources/views/transactions/create.blade.php -->

@extends('layouts.app')

@section('title', 'Create Transaction')

@section('content')
    <h1>Create Transaction</h1>

    <!-- resources/views/transactions/create.blade.php -->

<form method="POST" action="{{ route('transactions.store') }}">
    @csrf

    <label for="product_id">Product:</label>
    <!-- Pilihan produk lainnya -->

    <label for="amount">Amount:</label>
    <input type="number" name="amount" required>

    <label for="payment_method_id">Payment Method:</label>
    <select name="payment_method_id" required>
        @foreach($paymentMethods as $paymentMethod)
            <option value="{{ $paymentMethod->id }}">{{ $paymentMethod->name }}</option>
        @endforeach
    </select>

    <label for="keterangan">Keterangan:</label>
    <textarea name="keterangan"></textarea>

    <button type="submit">Add Transaction</button>
</form>
