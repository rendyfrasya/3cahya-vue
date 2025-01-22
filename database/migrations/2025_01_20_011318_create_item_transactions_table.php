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
        Schema::create('item_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transactions_id')->constrained()->cascadeOnDelete();
            $table->foreignId('products_id')->constrained()->cascadeOnDelete();
            $table->integer('total_price');
            $table->integer('qty');
            $table->integer('grand_total');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_transactions');
    }
};
