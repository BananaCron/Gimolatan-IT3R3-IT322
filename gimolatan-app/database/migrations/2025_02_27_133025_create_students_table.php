<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->integer('student_id')->primary();
            $table->string('email', 45)->unique();
            $table->string('password', 255);
            $table->string('fname', 45);
            $table->string('lname', 45);
            $table->date('dob');
            $table->string('phone', 15)->nullable();
            $table->string('mobile', 15)->nullable();
            $table->integer('parent_id')->nullable();
            $table->date('date_of_join')->nullable();
            $table->boolean('status')->default(true);
            $table->date('last_login_date')->nullable();
            $table->string('last_login_ip', 45)->nullable();
            $table->foreign('parent_id')->references('parent_id')->on('parents')->onDelete('set null');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
