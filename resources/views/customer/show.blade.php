@extends('layout.main') @section('page_title', 'Customers')
@section('stylesheet')
 <link href="/css/app.css" rel="stylesheet">

@endsection
@section('content')
<div class="table-responsive">
    <table>
<tr>
    <div align="Center">
    <a href="/register/customer" class="btn btn-primary" role="button">สร้างข้อมูลลูกค้า </a>
    <a href="#" class="btn btn-primary" role="button">Update สถานะรถลูกค้า</a>
</div>
</tr>
</table>
    <table>
		<tr>
			<th>ชื่อ</th>
			<th>นามสกุล</th>
			<th>เลขประจำตัวประชาชน</th>
    		<th>เบอร์โทรศัพท์</th>
			<th>LINE</th>
			<th>ที่อยู่</th>
		</tr>
    
    <tbody>
    
    	<tr>
      		<td>{{$customer->firstName}}</td>
        	<td>{{$customer->lastName}}</td>
        	<td>{{$customer->idCard}}</td>
        	<td>{{$customer->tel}}</td>
        	<td>{{$customer->idLine}}</td>
        	<td>{{$customer->address}}</td>
        </tr>
    	
	</tbody>
    </table>
</div>

@endsection