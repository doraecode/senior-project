@extends('layout.main') @section('page_title', 'Claims')
@section('stylesheet')

 <link href="/css/app.css" rel="stylesheet">
@endsection
@section('content')
<table>
<tr>
	<div align="Center">
    <a href="register/customer" class="btn btn-primary" role="button">สร้างข้อมูลลูกค้า </a>
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
        @foreach( $claims as $claim)
        <tr>

            <td><a href="">{{$claim->created_at}}</a></td>
            <td>{{$claim->id}}</td>
            <td>{{$claim->id}}</td>
            <td>{{$claim->accClaimNo}}</td>
            <td>{{$claim->accPolicyNo}}</td>
            @foreach($cars as $car)
            @if($car['claim_id'] == $claim['id'])
                <td>{{$car->carRegNo}}</td>
                <td>{{$car->car_CMFG}}</td>
                <td>{{$car->carModel}}</td>
            @endif

            @endforeach
            <td>{{$claim->insureName}}</td>
            <td>{{$claim->statusClaim}}</td>
            @foreach($customers as $customer)
            @if($customer['id'] == $claim['customer_id'])
                <td>{{$customer->firstName}} {{$customer->lastName}}</td>
               
            @endif
            @endforeach
          

        </tr>
        @endforeach
        
        </tr>
    </tbody>



</table>
@endsection