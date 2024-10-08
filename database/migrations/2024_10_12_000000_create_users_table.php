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
            $table->foreignId('gender_id')->default(1)->constrained()->onDelete('cascade');
            $table->date('date_of_birth')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->text('about')->nullable();
            $table->foreignId('status_id')->default(1)->constrained()->onDelete('cascade');
            $table->string('mobile_number')->nullable();
            $table->boolean('mobile_number_verified')->default(false);
            $table->string('profile_picture')->nullable();

            $table->bigInteger('neo')->default(0);
            $table->unsignedInteger('likes_count')->default(0);



            $table->string('instagram')->nullable();
            $table->string('telegram')->nullable();

            $table->rememberToken();
            $table->timestamps();

            $table->index('username');
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
