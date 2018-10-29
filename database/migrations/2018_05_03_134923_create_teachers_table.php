<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
          $table->increments('teacher_id');
            $table->string('teacher_name');
            $table->string('teacher_department');
            $table->string('teacher_designation');
            $table->string('teacher_image');
            $table->string('teacher_email');
            $table->string('teacher_phone');
            $table->string('teacher_address');
            $table->string('teacher_faculty');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
