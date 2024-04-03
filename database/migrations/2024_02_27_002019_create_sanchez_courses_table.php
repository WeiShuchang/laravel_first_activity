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
        Schema::create('sanchez_courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('course_code', 20);
            $table->string('course_description', 200);
            $table->integer('units',null);
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanchez_courses');
    }
};
