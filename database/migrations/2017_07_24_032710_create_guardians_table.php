<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->boolean('male_female')->nullable();
            $table->boolean('deceased')->nullable();
            $table->date('deceased_date')->nullable();
            $table->string('title', 20)->nullable();
            $table->string('first_name', 50)->nullable();
            $table->string('middle_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('maiden_name', 50)->nullable();
            $table->string('email', 254)->nullable();
            $table->string('emergency_phone', 10)->nullable();
            $table->string('cell_phone', 10)->nullable();
            $table->boolean('allow_text_messages')->nullable();
            $table->boolean('alumna')->nullable();
            $table->string('religion', 50)->nullable();
            $table->string('church', 50)->nullable();
            $table->boolean('employed')->nullable();
            $table->string('employer', 75)->nullable();
            $table->string('work_type', 50)->nullable();
            $table->string('work_address', 255)->nullable();
            $table->string('work_city', 50)->nullable();
            $table->string('work_state', 2)->nullable();
            $table->string('work_zip_code', 9)->nullable();
            $table->string('work_phone', 10)->nullable();
            $table->boolean('allow_calls_to_work')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guardians');
    }
}
