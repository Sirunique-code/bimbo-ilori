<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsletterSubscribersTable extends Migration
{
    public function up()
    {
        Schema::create('newsletter_subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique(); // Store email addresses
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('newsletter_subscribers');
    }
}
