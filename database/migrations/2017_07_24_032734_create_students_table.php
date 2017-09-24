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
            $table->string('preferred_name', 50) ->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('address', 255)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('state', 2)->nullable();
            $table->string('zip_code', 9)->nullable();
            $table->string('email', 254)->nullable();
            $table->string('current_school', 75)->nullable();
            $table->integer('current_grade')->nullable();
            $table->boolean('allow_text_messages')->nullable();
            $table->string('hs_first_choice', 75)->nullable();
            $table->string('hs_second_choice', 75)->nullable();
            $table->string('birth_city', 50)->nullable();
            $table->string('birth_state', 2)->nullable();
            $table->string('sex', 1)->nullable();
            $table->string('public_school_district', 75)->nullable();
            $table->string('religion', 50)->nullable();
            $table->string('church', 50)->nullable();
            $table->integer('num_of_older_brothers')->nullable();
            $table->integer('num_of_younger_brothers')->nullable();
            $table->integer('num_of_older_sisters')->nullable();
            $table->integer('num_of_younger_sisters')->nullable();
            $table->text('why_applying')->nullable();
            $table->text('disabilities')->nullable();
            $table->boolean('has_cell_phone')->nullable();
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
