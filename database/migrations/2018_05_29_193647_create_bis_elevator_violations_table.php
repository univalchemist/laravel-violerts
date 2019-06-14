<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBisElevatorViolationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bis_elevator_violations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id');
            $table->integer('b_i_s_elevator_id');
            $table->string('device_number')->nullable();
            $table->string('violation_number');
            $table->string('svr_code')->nullable();
            $table->string('disposition_code');
            $table->string('disposition_date');
            $table->string('disposition_badge')->nullable();
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
        Schema::dropIfExists('bis_elevator_violations');
    }
}
