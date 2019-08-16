<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaultLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fault_log', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('fault_number');
            $table->text('machine_no');
            $table->date('log_date');
            $table->string('fault_code');
            $table->bigInteger('fault_machine')->unsigned();
            $table->text('fault_description');
            $table->string('status');
            $table->timestamps();
            $table->foreign('fault_machine')->references('id')->on('asset_detail')->onDelete('
            cascade');        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fault_log');
    }
}
