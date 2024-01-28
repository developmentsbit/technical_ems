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
        Schema::create('semesters', function (Blueprint $table) {
            $table->id();
            $table->string('semester_name');
            $table->string('semester_name_bn')->nullable();
            $table->string('status');
            $table->timestamps();
        });

        Schema::table('classroutine', function (Blueprint $table) {
            $table->foreign('semester_id')->references('id')->on('semesters');
        });
        Schema::table('syllabus', function (Blueprint $table) {
            $table->foreign('semester_id')->references('id')->on('semesters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semesters');
    }
};
