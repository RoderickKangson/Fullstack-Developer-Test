<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::orderBy('transactionDate')
            ->get()
            ->groupBy(function ($item) {
                return \Carbon\Carbon::parse($item->transactionDate)->format('Y-m');
            });

        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ID' => 'required|id',
            'productID' => 'required|string',
            'productName' => 'required|string',
            'amount' => 'required|integer|min:0',
            'customerName' => 'required|string',
            'status' => 'required|in:0,1,2',
            'transactionDate' => 'required|date',
        ]);

        $validated['createBy'] = auth()->user()->name ?? 'System';
        $validated['createOn'] = now();

        Transaction::create($validated);

        return redirect()->route('transactions.index')->with('success', 'Transaction created!');
    }

    public function edit(Transaction $transaction)
    {
        return view('transactions.edit', compact('transaction'));
    }
}