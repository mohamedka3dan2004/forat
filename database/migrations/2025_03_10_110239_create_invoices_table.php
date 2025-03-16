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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id')->constrained();
            $table->foreignId('merchant_id')->constrained();
            $table->string('Product_type');
            $table->string('container_type');
            $table->string('container_count');
            $table->double('total_weight');
            $table->double('container_weight');
            $table->double('net_weight');
            $table->double('price_kg');
            $table->double('price_before_discount');
            $table->double('discount_per_kg');
            $table->double('total_price');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
