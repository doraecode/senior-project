@extends('layout.main') @section('page_title', 'Customers')
@section('stylesheet')
 <link href="/css/app.css" rel="stylesheet">

@endsection
@section('headder')
@endsection
@section('content')

<table>
<tr>
    <div align="Center">
    <a href="/register/customer" class="btn btn-primary" role="button">สร้างข้อมูลลูกค้า </a>
    <a href="#" class="btn btn-primary" role="button">Update สถานะรถลูกค้า</a>
</div>
</tr>
</table>
 <br>   
<input class="form-control" id="myInput" type="text" placeholder="ค้นหาข้อมูลลูกค้า...">
  <br>
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
    <tbody id="myTable">
        <?php foreach ($customers as $customer ): ?>
        <tr>
            <td><a href="/customers/{{$customer->id}}">{{$customer->id}}</a> </td>
            <td>{{$customer->firstName}}</td>
            <td>{{$customer->lastName}}</td>
            <td>{{$customer->idCard}}</td>
            <td>{{$customer->tel}}</td>
            <td>{{$customer->idLine}}</td>
            <td>{{$customer->address}}</td>
            <td><a href="/register/claims/{{$customer->id}}"><button type="button">สร้างเคลม</button></a></td>
        </tr>
        <?php endforeach; ?>    
    </tbody>
    </table>
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


@endsection