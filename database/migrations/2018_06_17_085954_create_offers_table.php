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
            $table->text('customerGetCarDate');//วันที่ลูกค้ามารับรถ
            $table->text('customerNameGetCar');//ชื่อผู้มารับรถ
            $table->text('customerIDCardGetCar');//เลขบัตรประชาชนผู้มารับรถ
            $table->text('customerTelGetcar');//เบอร์ผู้มารับรถ
            $table->text('relation');//เกี่ยวข้องกับผู้เอาประกัน
            $table->text('repNameOfferCar');//ชื่อเจ้าหน้าที่ส่งมอบรถ
            $table->text('driver_Name');//ชื่อผู้ขับขี่
            $table->text('driver_IdCard');//เลขบัตรชาชน
            $table->text('driver_PassportsNO');//เลขใบขับขี่
            $table->text('driver_Phone_NO');//เบอร์อผู้ขับขี่
            $table->text('kmCarOffer');//หมายเลขกม
            $table->text('commentOfferCar');//ความเรียบร้อยตอนรับรถ
            $table->integer('customer_id')->unsigned();
            $table->integer('claim_id')->unsigned();
            $table->integer('car_id')->unsigned();
            $table->integer('contact_id')->unsigned();

          
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
