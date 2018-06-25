@extends('layout.mainClaim') @section('page_title', 'Customers')
@section('stylesheet')
 <link href="/css/create_customer.css" rel="stylesheet">
@endsection
@section('headder')
<h4 align="center">kuy555</h4>

@endsection
@section('sidebar')
@include('layout.sub-layout.sidebar_claim')
@endsection
@section('content')
<nav class="nav nav-pills nav-fill">
  <a class="nav-item nav-link " href="http://localhost:8000/register/claims/{{$customer->id}}">ข้อมูลทั่วไป</a>
  <a class="nav-item nav-link active" href="http://localhost:8000/register/claims/{{$customer->id}}/cost-work">ค่าแรง</a>
  <a class="nav-item nav-link" href="http://localhost:8000/register/claims/{{$customer->id}}/cost-material">ค่าอะไหล่</a>
  <a class="nav-item nav-link" href="#">ค่าใช้จ่ายอื่นๆ</a>
  <a class="nav-item nav-link" href="http://localhost:8000/register/claims/{{$customer->id}}/image">รูปประกอบ</a>
  <a class="nav-item nav-link" href="#">สรุป</a>
  <a class="nav-item nav-link disabled" href="#">Disabled</a>
</nav>
<br><br>
<form  method="POST" action="/claims/costWork/post">
      {{ csrf_field() }}
		<table  class="table table-striped">
		<thead>
        <tr>
            <th>รายการค่าแรง</th>
            <th><a href="customers/create" class="btn btn-primary" role="button">เพิ่ม/แก้ไขรายการ </a></th>
            
        </tr>
		<tr> 
        	<th>No.</th>
        	<th>รายการ</th>
        	<th>ระดับเสียหาย</th>
        	<th>ราคา</th>
        	<th>ราคาเสนอ</th>
        	<th>ราคาอนุมัติ</th>
        </tr>
    	</thead>
    	
    <tbody >
    	<?php foreach ($costWorks as $costWork ): ?>
        <tr>
        <td>{{$costWork->number}}</td>
        <td>{{$costWork->name}}</td>
        <td>{{$costWork->damageLevel}}</td>
        <td>{{$costWork->price}}</td>
        <td>{{$costWork->priceOffer}}</td>
        <td>{{$costWork->priceOk}}</td>
        </tr>
        

    	<?php endforeach; ?>
        @for ($i=1; $i <=1 ; $i++) 
        	<tr>
        	{{-- <td> {{$i}}</td> --}}
        	<td><input type="text" class="form-control" name="Number" id="Number" required="" placeholder="" value=""></td>
        	<td><input type="text" class="form-control" name="Name" id="Name" required="" placeholder="" value=""></td>
        	<td width="150px"><select class="form-control" name="DamageLevel" id="DamageLevel" >
      <option></option>
      <option>เบา</option>
      <option>กลาง</option>
      <option>หนัก</option>
      <option>เปลี่ยน</option>

    </select></td>
        	
        	
        	<td><input type="text" class="form-control" name="Price" id="Price" required="" placeholder="" value=""></td>
        	<td><input type="text" class="form-control" name="PriceOffer" id="PriceOffer" required="" placeholder="" value=""></td>
        	<td><input type="text" class="form-control" name="PriceOk" id="PriceOk" required="" placeholder="" value=""></td>
       		</tr>
        @endfor
    	
		
        
   </tbody>
   </table>
   <button class="btn btn-lg btn-primary btn-block col-md-4 " type="submit " >Submit</button>
    </form>
</form>
@endsection