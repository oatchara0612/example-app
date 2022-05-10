<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('studentcode')->Nullable();
            $table->string('firstname')->Nullable();
            $table->string('lastname')->Nullable();
            $table->string('nickname')->Nullable();
            $table->string('sex')->Nullable();
            $table->string('city')->Nullable();
            $table->string('country')->Nullable();
            $table->string('email')->Nullable();
            $table->string('phone')->Nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
