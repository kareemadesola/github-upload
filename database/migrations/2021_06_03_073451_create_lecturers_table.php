<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('last_name', 100);
            $table->string('first_name', 100);
            $table->string('password');
            $table->string('email');
            $table->string('country', 100);
            $table->string('city', 100);
            $table->string('address', 100);
            $table->string('number',11);
            $table->char('gender',1);
            $table->tinyInteger('status');
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
        Schema::dropIfExists('lecturers');
    }
}
