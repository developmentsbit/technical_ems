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
        Schema::create('job_placement', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('department');
            $table->string('name',200)->nullable();
            $table->integer('roll');
            $table->string('session',20)->nullable();
            $table->string('job_title',200)->nullable();
            $table->string('institute',200)->nullable();
            $table->text('details')->nullable();
            $table->string('phone',11);
            $table->string('approve');
            $table->string('img')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_placement');
    }
};
