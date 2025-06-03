<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      Schema::create('registrations', function (Blueprint $table) {
    $table->id();
    $table->string('firstName')->nullable(false); // Match form and controller
    $table->string('lastName')->nullable(false); // Match form and controller
    $table->string('whatsappNumber')->nullable(false); // Match form and controller
    $table->string('email')->nullable(false)->unique(); // Already matches
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
}