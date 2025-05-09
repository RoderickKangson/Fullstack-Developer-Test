<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction; 
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::orderBy('transactionDate')
        ->get()
        ->groupBy(function($item) {
            return \Carbon\Carbon::parse($item->transactionDate)->format('Y-m');
        });

    return view('transactions.index', compact('transactions'));
}

}
