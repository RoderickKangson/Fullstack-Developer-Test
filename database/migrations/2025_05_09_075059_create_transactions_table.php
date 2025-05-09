<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('create_transactions_table', function (Blueprint $table){
            $table->id('ID');
            $table->string('productID');
            $table->string('productName');
            $table->integer('amount');
            $table->string('customerName');
            $table->tinyInteger('status');
            $table->dateTime('transactionDate');
            $table->string('createBy');
            $table->dateTime('createOn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_transactions_table');
    }
};
