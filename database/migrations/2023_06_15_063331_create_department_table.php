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
        Schema::create('department', function (Blueprint $table) {
            $table->id();
            $table->string('department');
            $table->string('department_name_bn')->nullable();
            $table->timestamps();
        });

        Schema::table('classroutine', function (Blueprint $table) {
            $table->foreign('department_id')->references('id')->on('department');
            $table->foreign('department_id')->references('id')->on('department');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('department');
    }
};
