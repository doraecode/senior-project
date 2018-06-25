@extends('layout.mainCreateCustomer') @section('page_title', 'Customers')
@section('stylesheet')
 <link href="/css/create_customer.css" rel="stylesheet">
@endsection
@section('headder')

<br>
@endsection
@section('content')

      <h1 >ข้อมูลลูกค้า</h1>

<form class="form-signin" method="get" action="{{ url('/customers/{customer}/edit')}}">
      {{ csrf_field() }}
      
      
      <div class="form-row col-md-12">
      <div class="form-group col-md-4" >
      <label  for="body">ชื่อ </label>
      <input type="text" class="form-control" name="Firstname" id="Firstname" required="" placeholder="ชื่อ" value="{{$customer->firstName}}">
      </div>
     <div class="form-group col-md-4">
      <label  for="body">นามสกุล </label>
      <input type="text" class="form-control" name="Lastname" id="Lastname" required="" placeholder="นามสกุล" value="{{$customer->lastName}}">
      </div>
      </div>
      
      <div class="form-group col-md-6">
      <label  for="body">รหัสประจำตัวประชาชน </label>
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="รหัสประจำตัวประชาชน" value="{{$customer->idCard}}">
      </div>
      <div class="form-group col-md-6">
      <label  for="body">เบอร์โทรศัพท์ </label>
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="เบอร์โทรศัพท์" value="{{$customer->tel}}">
      </div>
      <div class="form-group col-md-6">
      <label  for="body">ID LINE </label>
      <input type="text" class="form-control" name="Idline" id="Idline" required=""placeholder="ID LINE" value="{{$customer->idLine}}">
      </div>
      <div class="form-group col-md-8">
      <label  for="body">ที่อยู่ </label>
      <input type="text" class="form-control" name="Address" id="Address" required=""placeholder="ที่อยู่" value="{{$customer->address}}">
      </div>
      
      <button class="btn btn-lg btn-primary btn-block col-md-4 " type="submit " >บันทึก</button>

    </form>
@endsection