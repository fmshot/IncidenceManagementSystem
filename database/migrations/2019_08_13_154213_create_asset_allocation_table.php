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
            $table->integer('trans_no');
            // $table->string('asset_code')->unsigned()->index();
            // $table->string('user_id')->unsigned();
            $table->string('asset_code');
            $table->date('data_assigned');
            $table->integer('asset_status');
            $table->date('date_transfer');
            $table->timestamps();

            // $table->foreign('asset_code')->references('asset_code')->on('asset_detail')->onDelete('
            // cascade');
            // $table->foreign('user_id')->references('user_id')->on('user_master')->onDelete('
            // cascade');
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
