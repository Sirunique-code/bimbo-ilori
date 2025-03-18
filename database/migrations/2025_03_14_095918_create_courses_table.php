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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_title');
            $table->text('course_description');
            $table->decimal('course_price_usd', 8, 2)->default(0);
            $table->decimal('course_price_ngn', 10, 2)->default(0);
            $table->string('course_duration');
            $table->string('pay_link')->nullable();
            $table->string('register_link')->nullable();
            $table->string('course_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
