<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('exam', function (Blueprint $table) {
            $table->integer('exam_id')->primary();
            $table->integer('exam_type_id');
            $table->string('name', 45);
            $table->date('start_date');
            $table->foreign('exam_type_id')->references('exam_type_id')->on('exam_type')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('exam');
    }
};
