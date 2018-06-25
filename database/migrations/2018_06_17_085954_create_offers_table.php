<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('customerGetCarDate')->nullable();;//วันที่ลูกค้ามารับรถ
            $table->text('customerNameGetCar')->nullable();;//ชื่อผู้มารับรถ
            $table->text('customerIdCardGetCar')->nullable();;//เลขบัตรประชาชนผู้มารับรถ
            $table->text('customerTelGetCar')->nullable();;//เบอร์ผู้มารับรถ
            $table->text('relation')->nullable();;//เกี่ยวข้องกับผู้เอาประกัน
            $table->text('repNameOfferCar')->nullable();;//ชื่อเจ้าหน้าที่ส่งมอบรถ
            $table->text('driver_Name')->nullable();;//ชื่อผู้ขับขี่
            
            $table->text('driver_PassportsNo')->nullable();;//เลขใบขับขี่
            $table->text('driver_Phone_No')->nullable();;//เบอร์อผู้ขับขี่
          
            $table->text('commentOfferCar')->nullable();;//ความเรียบร้อยตอนรับรถ
            $table->integer('customer_id')->unsigned()->nullable();;
            $table->integer('claim_id')->unsigned()->nullable();;
            $table->integer('car_id')->unsigned()->nullable();;
            $table->integer('contact_id')->unsigned()->nullable();;

          
            $table->foreign('customer_id')
                  ->references('id')
                  ->on('customers');
            $table->foreign('claim_id')
                  ->references('id')
                  ->on('claims');  
             $table->foreign('car_id')
                  ->references('id')
                  ->on('cars');  
            $table->foreign('contact_id')
                  ->references('id')
                  ->on('contacts');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
