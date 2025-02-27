<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->integer('classroom_id')->primary();
            $table->year('year');
            $table->integer('grade_id');
            $table->char('section', 2);
            $table->boolean('status')->default(true);
            $table->string('remarks', 45)->nullable();
            $table->integer('teacher_id')->nullable();
            $table->foreign('grade_id')->references('grade_id')->on('grades')->onDelete('cascade');
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers')->onDelete('set null');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
};
