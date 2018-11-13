<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('cep')->nullable();
            $table->string('address')->nullable();
            $table->integer('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('district')->nullable(); // bairro
            $table->string('city')->nullable();
            $table->string('uf', 2)->nullable();
            $table->string('country');
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
        Schema::dropIfExists('customers_addresses');
    }
}
