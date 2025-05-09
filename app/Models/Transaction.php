<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'create_transactions_table';

    protected $fillable = [
        'ID',
        'productID',
        'productName',
        'amount',
        'customerName',
        'status',
        'transactionDate',
        'createBy',
        'createOn'
    ];

}
