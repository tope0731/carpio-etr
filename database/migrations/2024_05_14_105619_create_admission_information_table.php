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
        Schema::create('admission_information', function (Blueprint $table) {
            $table->id();
            $table->string('campus')->nullable();
            $table->string('admission_status')->nullable();
            $table->string('application_status')->nullable();
            $table->unsignedBigInteger('first_choice');
            $table->unsignedBigInteger('second_choice');
            $table->unsignedBigInteger('third_choice');
            $table->string('grades')->nullable();
            $table->string('photo')->nullable();
            // Add more columns for personal information
            $table->string('student_name')->nullable();
            $table->string('student_mname')->nullable();
            $table->string('student_lname')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('address')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email')->nullable();
            // Add columns for parent/guardian information
            $table->string('father_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_contact')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_contact')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_contact')->nullable();
            $table->string('guardian_address')->nullable();
            $table->string('guardian_relationship')->nullable();
            $table->string('monthly_income')->nullable();
            // Add columns for educational information
            $table->string('senior_high_school')->nullable();
            $table->string('shs_strand')->nullable();
            $table->unsignedInteger('year_graduated')->nullable();
            $table->decimal('gen_average', 5, 2)->nullable();
            $table->string('last_school_attended')->nullable();
            $table->string('course')->nullable()->nullable();
            $table->string('last_school_year')->nullable();
            // Add columns for other information
            $table->boolean('als_passer')->default(0);
            $table->unsignedInteger('als_year')->nullable();
            $table->decimal('als_average', 5, 2)->nullable();
            $table->boolean('4ps')->default(0);
            $table->string('4ps_id')->nullable()->nullable();
            $table->boolean('pwd')->default(0);
            $table->string('disability_type')->nullable();
            $table->boolean('ip')->default(0);
            $table->string('tribe')->nullable();
            $table->boolean('solo_parent')->default(0);
            $table->string('solo_parent_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_information');
    }
};
