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
            $table->text('repairName')->nullable();;//ชื่ออู่
            $table->text('insureName')->nullable();;//name insurer$table->text('accPolicyNo');//เลขกรมธรรม์
            $table->text('claimNo')->nullable();;//เลขที่เคลม
            $table->text('accClaimNo')->nullable();;//เลขรับแจ้ง
            $table->text('accPolicyNo')->nullable();;//เลขกรมธรรม์  uppppppp
            
            $table->text('accStatusCar')->nullable();; //สถานะจอดซ่อม$table->text('CarIden');//รถประกันหรือคู่กรณี
            $table->text('carIdenNo')->nullable();;//คันที่
            $table->text('deduction')->nullable();;//ค่าเสียหายส่วนแรก
            $table->text('deductionSrc')->nullable();;//การเรียกเก็บเงิน
            $table->text('insureId')->nullable();;//สาขาบริษัทประกัน
            $table->text('insurePhone')->nullable();;//หมายเลขโทรศัพท์
            $table->text('insureFax')->nullable();;//หมายเลขแฟ็ก
            $table->text('policyTypeId')->nullable();;//กรมธรรม์ชั้นไหน
            $table->text('insuredValue')->nullable();;//จำนวนเงินคุ้มครอง
            $table->text('callAccidentDate')->nullable();;//วันที่แจ้งอุบัติเหตุ
            $table->text('accidentDate')->nullable();;//วันที่เกิดอุบัติเหตุ
            $table->text('statusClaim')->nullable();;//วันที่เกิดอุบัติเหตุ
            $table->text('customer_id')->nullable();;
          //   $table->foreign('customer_id')->references('id')->on('customers');
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
