<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_detail', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->text('asset_code');
            $table->string('asset_group');
            $table->string('asset_desc');
            $table->string('refnum');
            $table->integer('asset_type');
            $table->date('date_acquired');
            $table->decimal('original_cost');
            $table->decimal('total_maint_amt');
            $table->date('last_service_date');
            $table->date('next_service_date');
            $table->decimal('last_bill_amount');
            $table->integer('equip_status');
            $table->date('date_sold');
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
        Schema::dropIfExists('asset_detail');
    }
}
