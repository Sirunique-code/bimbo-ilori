<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
      Schema::create('thank_you_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('payment_proof'); // store file path
            $table->date('preferred_date');
            $table->time('preferred_time');
            $table->timestamps();
        });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thank_you_bookings');
    }
};
