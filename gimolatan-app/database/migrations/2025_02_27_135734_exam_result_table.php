<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('exam_results', function (Blueprint $table) {
            $table->integer('exam_id');
            $table->integer('student_id');
            $table->integer('course_id');
            $table->string('marks', 45);
            $table->foreign('exam_id')->references('exam_id')->on('exam')->onDelete('cascade');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('exam_results');
    }
};
