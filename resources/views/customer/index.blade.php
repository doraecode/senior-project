@extends('layout.main') @section('page_title', 'Customers')
@section('stylesheet')

@endsection
@section('content')
<table>
<tr>
    <div align="Center">
    <a href="customers/create" class="btn btn-primary" role="button">สร้างข้อมูลลูกค้า </a>
    <a href="#" class="btn btn-primary" role="button">Update สถานะรถลูกค้า</a>
</div>
</tr>
</table>
    

    <table align="center" class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>เลขประจำตัวประชาชน</th>
            <th>เบอร์โทรศัพท์</th>
            <th>LINE</th>
            <th>ที่อยู่</th>
            <th>สร้างใบเคลม</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($customers as $customer ): ?>
        <tr>
            <td><a href="/customers/{{$customer->id}}">{{$customer->id}}</a> </td>
            <td>{{$customer->firstName}}</td>
            <td>{{$customer->lastName}}</td>
            <td>{{$customer->idCard}}</td>
            <td>{{$customer->tel}}</td>
            <td>{{$customer->idLine}}</td>
            <td>{{$customer->address}}</td>
            <td><a href="claims/create"><button type="button">สร้างเคลม</button></a></td>
        </tr>
        <?php endforeach; ?>    
    </tbody>
    </table>


@endsection