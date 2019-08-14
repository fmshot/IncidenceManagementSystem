<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEngineersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engineers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contractor_id');
            $table->string('contractor_name');
            $table->string('contact_address');
            $table->text('contractor_type');
            $table->text('city');
            $table->string('state');
            $table->date('date_reg');
            $table->text('phone');
            $table->bigInteger('credit_limit');
            $table->date('last_invoice_date');
            $table->date('last_payment_date');
            $table->string('payment_terms');
            $table->bigInteger('open_balance');
            $table->bigInteger('account_balance')->default(0);
            $table->text('contact_person');
            $table->text('remarks');
            $table->text('last_bill_no');
            $table->bigInteger('last_bill_amt');
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
        Schema::dropIfExists('engineers');
    }
}
