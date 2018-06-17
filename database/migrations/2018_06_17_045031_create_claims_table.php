<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('repairname');//ชื่ออู่
            $table->text('insureName');//name insurer$table->text('accPolicyNo');//เลขกรมธรรม์
            $table->text('claimNo');//เลขที่เคลม
            $table->text('accClaimNo');//เลขรับแจ้ง
            $table->text('accStatusCar'); //สถานะจอดซ่อม$table->text('CarIden');//รถประกันหรือคู่กรณี
            $table->text('carIdenNo');//คันที่
            $table->text('deduction');//ค่าเสียหายส่วนแรก
            $table->text('deductionSrc');//การเรียกเก็บเงิน
            $table->text('insureId');//สาขาบริษัทประกัน
            $table->text('insurePhone');//หมายเลขโทรศัพท์
            $table->text('insureFax');//หมายเลขแฟ็ก
            $table->text('policyTypeId');//กรมธรรม์ชั้นไหน
            $table->text('InsuredValue');//จำนวนเงินคุ้มครอง
            $table->text('callAccidentDate');//วันที่แจ้งอุบัติเหตุ
            $table->text('accidentDate');//วันที่เกิดอุบัติเหตุ
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('claims');
    }
}
