<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetAllocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_allocation', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('trans_no');
            $table->bigInteger('asset_id')->unsigned();
             $table->bigInteger('user_id')->unsigned();
            $table->string('asset_code');
            $table->date('date_assigned')->nullable();
            $table->string('asset_status');
            $table->date('date_transfer')->nullable();
            $table->timestamps();

             $table->foreign('asset_id')->references('id')->on('asset_detail')->onDelete('
             cascade');
             $table->foreign('user_id')->references('id')->on('users')->onDelete('
            cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_allocation');
    }
}
