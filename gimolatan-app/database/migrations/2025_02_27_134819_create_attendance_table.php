<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->date('date');
            $table->integer('student_id');
            $table->boolean('status');
            $table->text('remark')->nullable();
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('attendance');
    }
};
