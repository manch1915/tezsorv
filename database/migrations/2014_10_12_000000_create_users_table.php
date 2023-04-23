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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();;
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('sex_id')->default(1)->constrained();
            $table->date('date_of_birth')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->text('about')->nullable();
            $table->foreignId('status_id')->default(1)->constrained();
            $table->string('mobile_number')->nullable();
            $table->string('profile_picture')->nullable();
            $table->rememberToken();
            $table->timestamps();

            //todo avelacnel soc cancner

            $table->index('email');
            $table->index(['first_name', 'last_name']);
            $table->foreign('sex_id')->references('id')->on('sexes')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
