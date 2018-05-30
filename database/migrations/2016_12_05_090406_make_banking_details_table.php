<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeBankingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banking_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_details_id');
            $table->integer('acc_name');
            $table->integer('acc_number');
            $table->integer('institution_id');
            $table->integer('acc_type_id');
            $table->string('branch_name');
            $table->string('branch_code');
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
        Schema::dropIfExists('banking_details');
    }
}
