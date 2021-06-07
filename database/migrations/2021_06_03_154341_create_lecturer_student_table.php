<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturerStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturer_student', function (Blueprint $table) {
            $table->unsignedSmallInteger('lecturer_id');
            $table->foreign('lecturer_id')
                ->references('id')
                ->on('lecturers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedInteger('student_id');
            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('lecturer_student');
    }
}
