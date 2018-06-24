@extends('layout.mainClaim') @section('page_title', 'Customers')
@section('stylesheet')
<link href="{{asset('assets/css/upload.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
<nav class="nav nav-pills nav-fill">
  <a class="nav-item nav-link " href="#">ข้อมูลทั่วไป</a>
  <a class="nav-item nav-link" href="/register/claims/{{$customer->id}}/cost-work">ค่าแรง</a>
  <a class="nav-item nav-link" href="#">ค่าอะไหล่</a>
  <a class="nav-item nav-link" href="#">ค่าใช้จ่ายอื่นๆ</a>
  <a class="nav-item nav-link active" href="http://localhost:8000/register/claims/{{$customer->id}}/image">รูปประกอบ</a>
  <a class="nav-item nav-link" href="#">สรุป</a>
  <a class="nav-item nav-link disabled" href="#">Disabled</a>
</nav>
<br><br>

  


<!-- //------------------before_Fix-------------- -->
<form action="{{url('/admin/upload/action')}}" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row page-header">
        <div class="col-sm-2 text-right padding-top-20">
    <ul class="nav nav-pills">
  
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" target="iframe_a">เลือกรูป</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/image/{customer}/show" target="iframe_a">รูปทั้งหมด</a>
      <a class="dropdown-item" href="#" target="iframe_a">ใบเคลม/ใบแจ้งอุบัติเหตุ</a>
      <a class="dropdown-item" href="#" target="iframe_a">ใบขับขี่</a>
      <a class="dropdown-item" href="#" target="iframe_a">ใบรับรถก่อนซ่อม</a>
      <a class="dropdown-item" href="#" target="iframe_a">กรมธรรม์</a>
      <a class="dropdown-item" href="#" target="iframe_a">ใบทะเทียนรถ</a>
      <a class="dropdown-item" href="#" target="iframe_a">ใบรับรถ(ซ่อมเสร็จ)</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" target="iframe_a">รูปก่อนซ่อม</a>
      <a class="dropdown-item" href="#" target="iframe_a">รูประหว่างซ่อม</a>
      <a class="dropdown-item" href="#" target="iframe_a">รื้อเคาะ</a>
      <a class="dropdown-item" href="#" target="iframe_a">เตรียมพื้น/พ่นสี</a>
      <a class="dropdown-item" href="#" target="iframe_a">เทียบอะไหล่</a>
      <a class="dropdown-item" href="#" target="iframe_a">ประกอบชิ้นส่วน</a>
      <a class="dropdown-item" href="#" target="iframe_a">รูปซ่อมเสร็จ</a>
    </div>
  </li>
  </ul>
        </div>
        <div class="col-sm-4 text-right padding-top-20">
            <input type="file" name="uploader" id="uploader" />
        </div>
        <div class="col-sm-6 text-right padding-top-20">
            <button class="btn btn-success" type="submit" name = "btn-upload" title="Upload image"><i class="fa fa-upload" ></i> Upload</button>
            <button class="btn btn-danger del" type="submit" name = "btn-delete" title="Delete Multiple image"><i class="fa fa-trash-o" ></i> Delete</button>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <div class="row">
                @if($images)
                    @foreach($images as $img)
                    <div class="col-xs-3 gallery">
                        <img src="{{asset('images/uploads/'.$img->image_name)}}" />
                    </div>
                    @endforeach
                @endif
                </div>
 
            </div>
        </div>
    </div>
</form>
<iframe height="600px" width="90%" src="/image/{customer}/show" name="iframe_a"></iframe>

<p><a href="https://www.w3schools.com" target="iframe_a">W3Schools.com</a></p>




@endsection