<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps(); $table->text('contactDate')->nullable();;
            $table->text('repContactName')->nullable();;//ชื่อเจ้าหน้าที่อู่
           
            $table->text('carRepairDate')->nullable();;//วันที่รถเข้าซ่อม  nullll
            $table->text('repGetCarName')->nullable();;//ชื่อเจ้าหน้าที่
            // $table->text('estimateDay');//วันที่คาดว่าจะซ่อมเสร็จ
            $table->text('hopeFinish')->nullable();;//วันที่คาดว่าซ้่อมเสร็จ
           
            $table->text('levelOilGetCar')->nullable();;//ระดับเชื้อเพลิง
            $table->text('levelOilOfferCar')->nullable();;//ระดับเชื้อเพลิง

            $table->text('kmGetCar')->nullable();;//เลขกมตอนมารับรถ
            $table->text('kmOfferCar')->nullable();;//เลขกมตอนมารับรถ

            $table->text('itemInCar')->nullable();;//อุปกรณ์ในรถ
            $table->text('lossOther')->nullable();;//ความเสียหายอื่นๆ
            $table->text('estimateLabor')->nullable();;//ประมานค่าแรงซ่อม
            $table->text('typeRepair')->nullable();;//ประเภทงานซ่อม
            $table->text('estimatePart')->nullable();;//รายการอะไหล่
            $table->text('appointmentsGetCar')->nullable();;//วันที่นัดรับรถ
            $table->text('completeCarDate')->nullable();;//วันที่ซ่อมรถเสร็จ
          $table->integer('customer_id')->unsigned()->nullable();;
          $table->integer('claim_id')->unsigned()->nullable();;
            $table->integer('car_id')->unsigned()->nullable();;
          
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
        Schema::dropIfExists('contacts');
    }
}
