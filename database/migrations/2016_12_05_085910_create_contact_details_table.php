<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_detail_id');
            $table->string('telephone');
            $table->string('mobile');
            $table->string('fax');
            $table->string('group_email');
            $table->string('products');
            $table->string('description');
            $table->string('physical_address_1');
            $table->string('physical_address_2');
            $table->string('physical_address_3');
            $table->string('postal_code');
            $table->string('postal_address_1');
            $table->string('postal_address_3');
            $table->string('postal_address_2');
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
        Schema::dropIfExists('contact_details');
    }
}
