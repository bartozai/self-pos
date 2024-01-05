<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('products')->get();

        return view('transactions.index', compact('transactions'));
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $transactions = $product->transactions; // Ambil data transaksi terkait dengan produk

        return view('products.show', compact('product', 'transactions'));
    }
    public function create()
    {
        $products = Product::all();
        $paymentMethods = PaymentMethod::all();

        return view('transactions.create', compact('products', 'paymentMethods'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'amount' => 'required|numeric',
            'payment_method_id' => 'required|exists:payment_methods,id',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        Transaction::create([
            'product_id' => $request->product_id,
            'amount' => $request->amount,
            'payment_method_id' => $request->payment_method_id,
            // tambahkan kolom lain sesuai kebutuhan
        ]);

        return redirect()->route('transactions.create')->with('success', 'Transaction added successfully!');
    }
}
