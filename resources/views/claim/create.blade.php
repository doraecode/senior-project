@extends('layout.main') @section('page_title', 'Customers')
@section('stylesheet')
 <link href="/css/create_customer.css" rel="stylesheet">
@endsection
@section('headder')
<h4 align="center">kuy555</h4>

@endsection
@section('sidebar')
@include('layout.sub-layout.sidebar')
@endsection
@section('content')

      <nav class="nav nav-pills nav-fill">
  <a class="nav-item nav-link active" href="#">ข้อมูลทั่วไป</a>
  <a class="nav-item nav-link" href="#">ค่าแรง</a>
  <a class="nav-item nav-link" href="#">ค่าอะไหล่</a>
  <a class="nav-item nav-link" href="#">ค่าใช้จ่ายอื่นๆ</a>
  <a class="nav-item nav-link" href="#">รูปประกอบ</a>
  <a class="nav-item nav-link" href="#">สรุป</a>
  <a class="nav-item nav-link disabled" href="#">Disabled</a>
</nav>
<br><br>
<form  method="POST" action="/claims/post">
      {{ csrf_field() }}
      
      
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6" >
      <label  for="body" class="col-sm-4 col-form-label ">ชื่ออู่</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Firstname" id="Firstname" required="" placeholder="" value="ตึ๋งเซอร์วิส">
      </div></div>
     <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">บริษัทประกันภัย</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Lastname" id="Lastname" required="" placeholder="">
      </div></div></div>
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">เลขรับแจ้ง</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">เลขกรมธรรม์</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
  	<div class="form-row col-md-12">
       <div class="form-group row col-md-6">
      <label  for="policyType" class="col-sm-4 col-form-label">ประเภทกรมธรรม์</label>
      <div class="col-sm-4">
      <select class="form-control" id="policyType" >
      <option>กรมธรรม์ชั้น</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
    </select>
      </div></div>
  
       <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">จำนวนเงินคุ้มครอง</label>
      <div class="col-sm-4">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="0.00">
      </div> 
      <label  for="body" class=" col-form-label">บาท</label>

  </div>
  </div>
      <div class="form-group col-md-12">
      <label  for="body" >สถานะจอดซ่อม </label>
      <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline1">จอดซ่อม</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
  <label class="custom-control-label" for="customRadioInline2">ไม่จอดซ่อม</label>
</div>
      </div>
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">เลขที่เคลม</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">สาขา</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6" >
      <label  for="body" class="col-sm-4 col-form-label ">ประเภทเคลม</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Firstname" id="Firstname" required="" placeholder="">
      </div></div>
     <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">คันที่</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Lastname" id="Lastname" required="" placeholder="">
      </div></div></div>

      <div class="form-row col-md-12">
      <div class="form-group row col-md-6" >
      <label  for="body" class="col-sm-4 col-form-label ">ค่าเสียหายส่วนแรก</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Firstname" id="Firstname" required="" placeholder="">
      </div></div>
     <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">การเรียกเก็บเงิน</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Lastname" id="Lastname" required="" placeholder="">
      </div></div></div>
      
      
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6" >
      <label  for="body" class="col-sm-4 col-form-label ">เบอร์โทรศัพท์</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Firstname" id="Firstname" required="" placeholder="">
      </div></div>
     <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">FAX</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Lastname" id="Lastname" required="" placeholder="">
      </div></div></div>
      
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">วันที่แจ้งอุบัติเหตุ</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">วันที่เกิดอุบัติเหตุ</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
        
       <h1 >ข้อมูลรถครับ</h1> 
       <div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">เลขทะเบียน</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">จังหวัด</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
		<div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">ยี่ห้อ</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  	</div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">รุ่น</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">ปี</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">ประเภทรถ</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
	<div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">เลขตัวถัง</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">โมเดล</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">หมายเลขเครื่อง</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">สภาพรถ</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
<div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">สีรถ</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">สีที่พ่นรถ</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
	<h1 >ติดต่อครับ</h1> 
	<div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">วันที่นัดซ่อม</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">ชื่อเจ้าหน้าที่ติดต่อ</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
	<div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">วันที่นำรถเข้าซ่อม</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">ชื่อเจ้าหน้าที่ซ่อม</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">วันที่คาดว่าซ่อมเสร็จ</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">ชื่อเจ้าหน้าที่ซ่อม</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
<div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">ระดับเชื้อเพลิงก่อนซ่อม</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">ระดับเชื้อเพลิงหลังซ่อม</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">เลขกม. ก่อนซ่อม</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">เลขกม. หลังซ่อม</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">อุปกรณ์ในรถ</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">อุปกรณ์ในรถ</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
      <div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">ประมาณค่าแรงซ่อม</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">ประเภทงานซ่อม</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
		<div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">ประมาณค่าอะไหล่</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">ความเสียหายอื่นๆ</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>
	<div class="form-row col-md-12">
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">วันที่รถเสร็จ</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="">
      </div>
  </div>
      <div class="form-group row col-md-6">
      <label  for="body" class="col-sm-4 col-form-label">วันที่นัดรับรถ</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="">
      </div></div></div>

      <button class="btn btn-lg btn-primary btn-block col-md-4 " type="submit " >Submit</button>
    </form>
@endsection