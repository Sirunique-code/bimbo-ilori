<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('session_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable(); // ✅ removed ->change()
            $table->string('session_type');
            $table->date('preferred_date');
            $table->time('preferred_time');
            $table->string('payment_proof');
            $table->text('notes')->nullable();
            $table->enum('status', ['Pending', 'Confirmed'])->default('Pending');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('session_bookings');
    }
};
