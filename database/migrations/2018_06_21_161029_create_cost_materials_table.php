<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_materials', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('number');//เลขรายการ
            $table->text('name');//ชื่อรายการ
            $table->text('ref_claim_id');//เลขเคลมไอดี
            $table->text('damageLevel');//ความเสียหาย
            $table->text('price');//ราคา
            $table->text('priceOffer');//ราคาเสนอ
            $table->text('priceOk');//ราคาอนุมัติ
            $table->text('junk');//ราคาอนุมัติ
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
        Schema::dropIfExists('cost_materials');
    }
}
