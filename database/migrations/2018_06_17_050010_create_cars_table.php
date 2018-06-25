<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('carRegNo')->nullable();;//เลขทะเบียน
            $table->text('carRegProvince')->nullable();;//จังหวัด
            $table->text('car_CMFG')->nullable();;//ยี่ห้อ
            $table->text('carModel')->nullable();;//รุ่น uppp
            $table->text('carModel_Year')->nullable();;//รุ่นปี
            $table->text('carModelType')->nullable();;//ประเภทรถ กระบะ
            $table->text('chassino')->nullable();;//เลขตัวถัง
            $table->text('modelNo')->nullable();;//โมเดล
            $table->text('engineNo')->nullable();;//หมายเลขเครื่อง
            $table->text('carDescId')->nullable();;//สภาพรถ
            $table->text('color_Id')->nullable();;//สีรถ
            $table->text('useColorType_Id')->nullable();;//สีที่พ่นรถ

          $table->integer('customer_id')->unsigned()->nullable();;
          $table->integer('claim_id')->unsigned()->nullable();;

          $table->foreign('customer_id')
                  ->references('id')
                  ->on('customers');
           $table->foreign('claim_id')
                  ->references('id')
                  ->on('claims');       

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
