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
            $table->boolean('male_female');
            $table->boolean('deceased');
            $table->date('deceased_date')->nullable();
            $table->string('title', 20);
            $table->string('first_name', 50);
            $table->string('middle_name', 50)->nullable();
            $table->string('last_name', 50);
            $table->string('maiden_name', 50);
            $table->string('email', 254);
            $table->string('emergency_phone', 10);
            $table->string('cell_phone', 10);
            $table->boolean('allow_text_messages');
            $table->boolean('alumna');
            $table->string('religion', 50);
            $table->string('church', 50)->nullable();
            $table->boolean('employed');
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
