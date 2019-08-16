<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditTrail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_trail', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->string('user_id');
            $table->string('user_name');
            $table->string('table_name');
            $table->string('column_name');
            $table->text('old_value');
            $table->text('new_value');
            $table->date('date_and_time');
            $table->string('row_operation');
            $table->string('column_operation');
            $table->integer('serial_number');
            $table->string('table_keys');
            $table->string('key_values');
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
        Schema::dropIfExists('audit_trail');
    }
}
