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
  <a class="nav-item nav-link" href="http://localhost:8000/register/claims/{{$customer->id}}/cost-work">ค่าแรง</a>
  <a class="nav-item nav-link" href="http://localhost:8000/register/claims/{{$customer->id}}/cost-material">ค่าอะไหล่</a>
  <a class="nav-item nav-link" href="#">ค่าใช้จ่ายอื่นๆ</a>
  <a class="nav-item nav-link" href="http://localhost:8000/register/claims/{{$customer->id}}/image">รูปประกอบ</a>
  <a class="nav-item nav-link" href="#">สรุป</a>
  <a class="nav-item nav-link disabled" href="#">Disabled</a>
</nav>
<br><br>
<form  method="POST" action="/claims/post">
      {{ csrf_field() }}
      
      
      @include('claim.component.layout.claim')
        
       <h1 >ข้อมูลรถครับ</h1> 
       @include('claim.component.layout.car')
	<h1 >ติดต่อครับ</h1> 
	     @include('claim.component.layout.contact')
       <h1 >ข้อมูลรับรถครับ</h1> 
      @include('claim.component.layout.offer')
      <button class="btn btn-lg btn-primary btn-block col-md-4 " type="submit " >Submit</button>
    </form>
@endsection