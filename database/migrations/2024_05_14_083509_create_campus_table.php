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
        Schema::create('campus', function (Blueprint $table) {
            $table->id();
            $table->string('campus_name');
            $table->string('course1');
            $table->string('course2');
            $table->string('course3');
            $table->string('course4');
            $table->string('course5');
            $table->string('course6');
            $table->string('course7');
            $table->string('course8');
            $table->string('course9');
            $table->string('course10');
            $table->string('course11');
            $table->string('course12');
            $table->string('course13');
            $table->string('course14');
            $table->string('course15');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campus');
    }
};
