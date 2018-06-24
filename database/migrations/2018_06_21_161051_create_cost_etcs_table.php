<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostEtcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_etcs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('number');//เลขรายการ
            $table->text('name');//ชื่อรายการ
            $table->text('ref_claim_id');//เลขเคลมไอดี
            $table->text('price');//ราคา
              $table->integer('customer_id')->unsigned();
          $table->integer('claim_id')->unsigned();
            $table->integer('car_id')->unsigned();
          
          $table->foreign('customer_id')
                  ->references('id')
                  ->on('customers');
           $table->foreign('claim_id')
                  ->references('id')
                  ->on('claims');  
            $table->foreign('car_id')
                  ->references('id')
                  ->on('cars'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cost_etcs');
    }
}
