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
        Schema::create('t_coursematerial', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('department');
            $table->bigInteger('semester_id')->unsigned();
            $table->foreign('semester_id')->references('id')->on('semesters');
            $table->bigInteger('subject_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('subject_info');
            $table->bigInteger('section_id')->unsigned();
            $table->foreign('section_id')->references('id')->on('addsection');
            $table->bigInteger('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teacherstaff');
            $table->string('type')->nullable();
            $table->string('title',200)->nullable();
            $table->string('title_bn',200)->nullable();
            $table->text('details')->nullable();
            $table->text('details_bn')->nullable();
            $table->string('date');
            $table->string('image')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_coursematerial');
    }
};
