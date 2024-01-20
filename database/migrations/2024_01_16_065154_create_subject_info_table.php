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
        Schema::create('subject_info', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('department');
            $table->bigInteger('semester_id')->unsigned();
            $table->foreign('semester_id')->references('id')->on('semesters');
            $table->string('subject_name')->nullable();
            $table->string('subject_name_bn')->nullable();
            $table->string('subject_code')->nullable();
            $table->integer('serial')->nullable();
            $table->integer('status')->nullable();
            $table->date('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_info');
    }
};
