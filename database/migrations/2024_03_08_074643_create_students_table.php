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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('password_confirmation')->nullable();
            $table->string('user_fname')->nullable();
            $table->string('user_mname')->nullable();
            $table->string('user_lname')->nullable();
            $table->string('user_gender')->nullable();
            $table->string('user_address')->nullable();
            $table->string('user_city')->nullable();
            $table->string('user_state')->nullable();
            $table->string('user_zipcode')->nullable();
            $table->string('user_phone')->nullable();
            $table->string('user_birthday')->nullable();
            $table->string('user_ssn')->nullable();
            $table->string('license_number')->nullable();
            $table->string('license_state')->nullable();
            $table->string('ticket_state')->nullable();
            $table->string('ticket_county')->nullable();
            $table->string('ticket_court')->nullable();
            $table->string('ticket_number')->nullable();
            $table->string('ticket_due_date')->nullable();
            $table->string('register_time')->nullable();
            $table->string('complete_time')->nullable();
            $table->string('is_confirmed')->nullable();
            $table->string('is_completed')->nullable();
            $table->string('is_admin')->default('0');;
            $table->string('paid')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('get_class_completion_certificate')->nullable();
            $table->string('source')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
