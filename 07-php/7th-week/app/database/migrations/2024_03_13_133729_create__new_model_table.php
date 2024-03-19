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
        Schema::create('_new_model', function (Blueprint $table) {
            $table->id()->primaryKey();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->integer('age')->nullable();
            $table->longText('address');
            $table->string('password');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_new_model');
    }
};
