<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('exam_type', function (Blueprint $table) {
            $table->integer('exam_type_id')->primary();
            $table->string('name', 45);
            $table->string('desc', 45)->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('exam_type');
    }
};
