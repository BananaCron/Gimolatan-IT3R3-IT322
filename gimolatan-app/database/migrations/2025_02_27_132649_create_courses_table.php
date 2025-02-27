<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->integer('course_id')->primary();
            $table->string('name', 45);
            $table->string('description', 45)->nullable();
            $table->integer('grade_id');
            $table->foreign('grade_id')->references('grade_id')->on('grades')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
