<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->integer('grade_id')->primary();
            $table->string('name', 45);
            $table->string('desc', 45)->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('grades');
    }
};
