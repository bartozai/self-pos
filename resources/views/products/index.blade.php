@extends('layouts.app')

@section('page_title', 'Product List')

@section('content')
    <div class="container mt-4">
        <h2>Product List</h2>

        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Product</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <!-- Add delete button with form submission if needed -->
                            <a href="{{ route('products.destroy', $product->id) }}" class="btn btn-danger btn-sm">Delete</a>
                            
                            <a href="{{ route('products.show', ['id' => $product->id]) }}" class="btn btn-success btn-sm">View Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
