@extends('layout.main') @section('page_title', 'Customers')
@section('stylesheet')

@endsection
@section('content')



<br>
    <a href="/customer/create"><button type="button">เพิ่มข้อมูลลูกค้า</button></a>

    <br><br><br>

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
            <td><a href="/customer/{{$customer->id}}">{{$customer->id}}</a> </td>
            <td>{{$customer->firstName}}</td>
            <td>{{$customer->lastName}}</td>
            <td>{{$customer->idCard}}</td>
            <td>{{$customer->tel}}</td>
            <td>{{$customer->idLine}}</td>
            <td>{{$customer->address}}</td>
            <td><a href="claim/create"><button type="button">สร้างเคลม</button></a></td>
        </tr>
        <?php endforeach; ?>    
    </tbody>
    </table>


@endsection