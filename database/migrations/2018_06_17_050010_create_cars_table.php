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
            $table->text('carRegNo');//เลขทะเบียน
            $table->text('carRegProvince');//จังหวัด
            $table->text('car_CMFG');//ยี่ห้อ
            $table->text('carModel');//รุ่น uppp
            $table->text('carModel_Year');//รุ่นปี
            $table->text('carModelType');//ประเภทรถ กระบะ
            $table->text('chassino');//เลขตัวถัง
            $table->text('modelNo');//โมเดล
            $table->text('engineNo');//หมายเลขเครื่อง
            $table->text('carDescId');//สภาพรถ
            $table->text('color_ID');//สีรถ
            $table->text('useColorType_Id');//สีที่พ่นรถ

          $table->integer('customer_id')->unsigned();
          $table->integer('claim_id')->unsigned();

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
