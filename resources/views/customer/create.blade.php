@extends('layout.main') @section('page_title', 'Customers')
@section('stylesheet')
 <link href="/css/create_customer.css" rel="stylesheet">
@endsection
@section('headder')
<h4 align="center">kuy555</h4>
@endsection
@section('content')
      <h1 >Hello World</h1>

<form class="form-signin" method="POST" action="/customers/post">
      {{ csrf_field() }}
      
      
      <div class="form-row">
      <div class="form-group col-md-4" >
      <label  for="body">ชื่อ :</label>
      <input type="text" class="form-control" name="Firstname" id="Firstname" required="" placeholder="ชื่อ">
      </div>
     <div class="form-group col-md-4">
      <label  for="body">นามสกุล :</label>
      <input type="text" class="form-control" name="Lastname" id="Lastname" required="" placeholder="นามสกุล">
      </div>
      </div>
      
      <div class="form-group col-md-6">
      <label  for="body">รหัสประจำตัวประชาชน :</label>
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="" placeholder="รหัสประจำตัวประชาชน">
      </div>
      <div class="form-group col-md-6">
      <label  for="body">เบอร์โทรศัพท์ :</label>
      <input type="text" class="form-control" name="Tel" id="Tel" required=""placeholder="เบอร์โทรศัพท์">
      </div>
      <div class="form-group col-md-6">
      <label  for="body">ID LINE :</label>
      <input type="text" class="form-control" name="Idline" id="Idline" required=""placeholder="ID LINE">
      </div>
      <div class="form-group col-md-8">
      <label  for="body">ที่อยู่ :</label>
      <input type="text" class="form-control" name="Address" id="Address" required=""placeholder="ที่อยู่">
      </div>
      
      <button class="btn btn-lg btn-primary btn-block col-md-4 " type="submit " >Submit</button>

    </form>
@endsection