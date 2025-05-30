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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->text('amazon_link')->nullable();
            $table->text('bookselar_link')->nullable();
            $table->text('bookamazon_link')->nullable();
            $table->string('bookpaystack_link')->nullable();
            $table->string('bookpaystackdigital_link')->nullable();
            $table->string('selar_link')->nullable();
            $table->string('paystack_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
