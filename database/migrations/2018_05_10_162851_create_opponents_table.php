<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opponents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('team_name')->unique();
            $table->string('coach_name')->unique();
            $table->string('coach_email');
            $table->string('coach_phone');
            $table->string('field_address');
            $table->string('field_city');
            $table->string('field_state');
            $table->string('field_zip');
            $table->integer('field_number');
            $table->text('notes');
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
        Schema::dropIfExists('opponents');
    }
}
