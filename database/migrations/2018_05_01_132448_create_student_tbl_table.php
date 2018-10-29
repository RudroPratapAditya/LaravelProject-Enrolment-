<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_tbl', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('student_name');
            $table->string('student_reg');
            $table->string('student_address');
            $table->string('student_mobile');
            $table->string('student_college');
            $table->string('student_email');
            $table->string('student_image');
            $table->string('student_father');
            $table->string('student_mother');
            $table->string('student_dob');
            $table->string('student_faculty');
            $table->string('student_session');
             $table->string('student_level');
            $table->string('student_semister');
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
        Schema::dropIfExists('student_tbl');
    }
}
