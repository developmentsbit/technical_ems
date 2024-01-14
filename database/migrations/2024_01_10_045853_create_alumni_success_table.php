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
        Schema::create('alumni_success', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('alumni_success');
    }
};
