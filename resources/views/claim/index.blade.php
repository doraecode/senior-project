@extends('layout.main') @section('page_title', 'Customers')
@section('stylesheet')

@endsection
@section('content')
<table>
<tr>
	<div align="Center">
    <a href="users/create1150" class="btn btn-primary" role="button">สร้างข้อมูลลูกค้า </a>
    <a href="#" class="btn btn-primary" role="button">Update สถานะรถลูกค้า</a>
</div>
</tr>
</table>



<table class="table table-striped" style="width: 1000px; vertical-align: top; ">

	

<!-- -------------------------------------data------------------- -->

	
	<thead><tr>
	<th>วันที่/เวลา</th>
	<th>เลขที่รายการ</th>
	<th>เลขที่เคลม</th>
    <th>เลขที่รับแจ้ง</th>
	<th>ทะเบียนรถ</th>
	<th>ยี่ห้อ</th>
	<th>รุ่น</th>
	<th>ชื่อบริษัทประกัน</th>
	<th>สถานะเคลม</th>
	<th>ชื่อลูกค้า</th>
    </tr></thead>

    <tbody>
    <?php foreach ($claims as $claim ): ?>
        <tr>
      <td>{{$claim->created_at}}</td>
        <td>{{$claim->id}}</td>
        <td><a href="/index/{{$createclaim->id}}">{{$claim->claim_id}}</a></td>
        <td>{{$claim->accident_id}}</td>
        <td>{{$claim->car_id}}</td>
        <td>{{$claim->car_brand}}</td>
        <td>{{$claim->car_gen}}</td>
        <td>{{$claim->company}}</td>
        <td>{{$claim->state}}</td>
        <td>{{$claim->customer_name}}</td>

    <?php endforeach; ?>
        </tr>
    </tbody>



</table>
@endsection