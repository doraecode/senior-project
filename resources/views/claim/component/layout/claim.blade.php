    
<div class="form-row col-md-12">
      <div class="form-group row col-md-6" >
      <label  for="body" class="col-sm-4 col-form-label ">รหัสลูกค้า</label> 
      <div class="col-sm-2">
      <input type="text" name="Customer_Id" value="{{ $customer['id'] }}"  >
      </div></div>
     <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label"></label>
      <div class="col-sm-6">

      </div></div></div>  
<div class="form-row col-md-12">
      <div class="form-group row col-md-6" >
      <label  for="body" class="col-sm-4 col-form-label ">ชื่ออู่</label> 
      <div class="col-sm-6">
      <input type="text" class="form-control" name="RepairName" id="Repairname"  placeholder="" value="ตึ๋งเซอร์วิส">
      </div></div>
     <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">บริษัทประกันภัย</label>
      <div class="col-sm-6">
     
      <select name="InsureName"  id="InsureName">
  <option selected="selected" value="0">- ประกัน -</option>
  <option value="สินทรัพย์ประกันภัย">สินทรัพย์ประกันภัย</option>
  <option value="แอลเอ็มจีประกันภัย จำกัด (มหาชน)">แอลเอ็มจีประกันภัย จำกัด (มหาชน)</option>
  <option value="เอเชีย ประกันภัย 1950">เอเชีย ประกันภัย 1950</option>
  <option value="เจ้าพระยาประกันภัย">เจ้าพระยาประกันภัย</option>
  <option value="ไทยเศรษฐกิจประกันภัย">ไทยเศรษฐกิจประกันภัย</option>
  <option value="ทูนประกันภัย บมจ.">ทูนประกันภัย บมจ.</option>
  <option value="ประกันภัยไทยวิวัฒน์">ประกันภัยไทยวิวัฒน์</option>
  <option value="อินทรประกันภัย บมจ.">อินทรประกันภัย บมจ.</option>
  <option value="สหมงคลประกันภัย บมจ.">สหมงคลประกันภัย บมจ.</option>

</select>
      </div></div></div>
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">เลขรับแจ้ง</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="AccClaimNo" id="AccClaimNo"  placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">เลขกรมธรรม์</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="AccPolicyNo" id="AccPolicyNo" placeholder="">
      </div></div></div>
  	<div class="form-row col-md-12">
       <div class="form-group row col-md-6">
      <label  for="policyTypeId" class="col-sm-4 col-form-label">ประเภทกรมธรรม์</label>
      <div class="col-sm-4">
      <select class="form-control" id="PolicyTypeId" name="PolicyTypeId">
      <option>กรมธรรม์ชั้น</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
    </select>
      </div></div>
  
       <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">จำนวนเงินคุ้มครอง</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" name="InsuredValue" id="InsuredValue" placeholder="0.00">
      </div> 
      <label  for="body" class=" col-form-label">บาท</label>

  </div>
  </div>
      <div class="form-group col-md-12">
      <label  for="body" >สถานะจอดซ่อม </label>
      <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="AccStatusCar" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1">จอดซ่อม</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="AccStatusCar" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline2">ไม่จอดซ่อม</label>
</div>
      </div>
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">เลขที่เคลม</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="ClaimNo" id="ClaimNo"  placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">สาขา</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="InsureId" id="InsureId" placeholder="">
      </div></div></div>
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6" >
      <label  for="body" class="col-sm-4 col-form-label ">ประเภทเคลม</label>
      <div class="col-sm-6">
      <select name="ClaimType" id="ClaimType" >
  <option value="">- ระบุ -</option>
  <option value="ประกัน">ประกัน</option>
  <option value="คู่กรณี">คู่กรณี</option>
 

</select>
      </div></div>
     <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">คันที่</label>
      <div class="col-sm-6">
        <select name="CarIdenNo" id="CarIdenNo" >
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  </select>
     
      </div></div></div>

      <div class="form-row col-md-12">
      <div class="form-group row col-md-6" >
      <label  for="body" class="col-sm-4 col-form-label ">ค่าเสียหายส่วนแรก</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Deduction" id="Deduction"  placeholder="0.00">

      </div>
      <label  for="body" class="col-sm-2 col-form-label">บาท</label>
    </div>
     <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">การเรียกเก็บเงิน</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="DeductionSrc" id="DeductionSrc"  placeholder="0.00">
      </div>
      <label  for="body" class="col-sm-2 col-form-label">บาท</label>
    </div></div>
      
      
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6" >
      <label  for="body" class="col-sm-4 col-form-label ">เบอร์โทรศัพท์</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="InsurePhone" id="InsurePhone"  placeholder="">
      </div></div>
     <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">FAX</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="InsureFax" id="InsureFax"  placeholder="">
      </div></div></div>
      
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">วันที่แจ้งอุบัติเหตุ</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="CallAccidentDate" id="Idcard"  placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">วันที่เกิดอุบัติเหตุ</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="AccidentDate" id="AccidentDate" placeholder="">
      </div></div></div>
