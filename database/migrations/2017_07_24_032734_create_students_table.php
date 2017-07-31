<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->timestamps();
            $table->string('first_name', 50);
            $table->string('middle_name', 50)->nullable();
            $table->string('last_name', 50);
            $table->date('birth_date');
            $table->string('address', 255);
            $table->string('city', 50);
            $table->string('state', 2);
            $table->string('zip_code', 9);
            $table->string('email', 254);
            $table->string('current_school', 75);
            $table->integer('current_grade');
            $table->boolean('allow_text_messages');
            $table->string('hs_first_choice', 75);
            $table->string('hs_second_choice', 75)->nullable();
            $table->string('birth_city', 50);
            $table->string('birth_state', 2);
            $table->string('sex', 1);
            $table->string('public_school_district', 75);
            $table->string('religion', 50);
            $table->string('church', 50)->nullable();
            $table->integer('num_of_older_brothers');
            $table->integer('num_of_younger_brothers');
            $table->integer('num_of_older_sisters');
            $table->integer('num_of_younger_sisters');
            $table->text('why_applying');
            $table->text('disabilities')->nullable();
            $table->boolean('has_cell_phone');
            $table->string('cell_phone', 10)->nullable();
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
