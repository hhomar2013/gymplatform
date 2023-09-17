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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->uuid('company_code');
            $table->string('name')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('description')->nullable();
            $table->string('welcome_message')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('type')->nullable();
            $table->string('status')->default(0);
            $table->text('logo')->nullable();
            $table->text('lt')->nullable();
            $table->text('gt')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
