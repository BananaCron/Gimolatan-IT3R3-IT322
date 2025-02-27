<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('classroom_student', function (Blueprint $table) {
            $table->integer('classroom_id');
            $table->integer('student_id');
            $table->foreign('classroom_id')->references('classroom_id')->on('classrooms')->onDelete('cascade');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('classroom_student');
    }
};
