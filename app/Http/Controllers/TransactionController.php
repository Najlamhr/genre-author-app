<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Transaction::class, 'transaction');
    }

    public function index()
    {
        // Hanya admin bisa akses, sudah dicek di policy via authorizeResource
        $transactions = Transaction::all();
        return response()->json($transactions);
    }

    public function show(Transaction $transaction)
    {
        // Otomatis cek policy 'view'
        return response()->json($transaction);
    }

    public function store(Request $request)
    {
        $this->authorize('create', Transaction::class);

        $data = $request->validate([
            'order_number' => 'required|string|unique:transactions',
            'book_id' => 'required|integer|exists:books,id',
            'total_amount' => 'required|numeric|min:0',
        ]);

        $data['customer_id'] = auth()->id();

        $transaction = Transaction::create($data);

        return response()->json($transaction, 201);
    }

    public function update(Request $request, Transaction $transaction)
    {
        $this->authorize('update', $transaction);

        $data = $request->validate([
            'total_amount' => 'sometimes|numeric|min:0',
            // tambahkan field lain yang boleh diupdate
        ]);

        $transaction->update($data);

        return response()->json($transaction);
    }

    public function destroy(Transaction $transaction)
    {
        $this->authorize('delete', $transaction);

        $transaction->delete();

        return response()->json(['message' => 'Transaction deleted']);
    }
}
