<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id')->nullable();;
            $table->timestamps();
            $table->text('firstName')->nullable();;
            $table->text('lastName')->nullable();;
            $table->text('idCard')->nullable();;
            $table->text('tel')->nullable();;
            $table->text('idLine')->nullable();;
            $table->text('address')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
