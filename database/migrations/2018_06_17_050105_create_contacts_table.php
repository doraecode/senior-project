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
            $table->timestamps(); $table->text('contactDate');
            $table->text('repContactName');//ชื่อเจ้าหน้าที่อู่
            $table->text('appointmentsRepair');//วันที่ติดต่อซ่อมล่วงหน้า
            $table->text('carRepairDate');//วันที่รถเข้าซ่อม  nullll
            $table->text('repGetCarName');//ชื่อเจ้าหน้าที่
            $table->text('EstimateDay');//วันที่คาดว่าจะซ่อมเสร็จ
            $table->text('hopeFinish');//วันที่คาดว่าซ้่อมเสร็จ
            $table->text('hopeFinish_Fix');//วันที่คาดว่าซ้่อมเสร็จ แก้ไข
            $table->text('levelOil');//ระดับเชื้อเพลิง
            $table->text('kmGetcar');//เลขกมตอนมารับรถ
            $table->text('itemInCar');//อุปกรณ์ในรถ
            $table->text('lossOther');//ความเสียหายอื่นๆ
            $table->text('estimateLabor');//ประมานค่าแรงซ่อม
            $table->text('typeRepair');//ประเภทงานซ่อม
            $table->text('estimatePart');//รายการอะไหล่
            $table->text('appointmentsGetCar');//วันที่นัดรับรถ
            $table->text('completeCarDate');//วันที่ซ่อมรถเสร็จ
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
        Schema::dropIfExists('contacts');
    }
}
