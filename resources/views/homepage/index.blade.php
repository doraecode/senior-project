@extends('layout.main') @section('page_title', 'Customers')
@section('stylesheet')

@endsection
@section('content')
<input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br><table class="table table-striped" style="width: 1000px; vertical-align: top; ">

	

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

    <tbody id="myTable">
    <?php foreach ($claims as $claim ): ?>
        <tr>
      <td>{{$claim->created_at}}</td>
        <td>{{$claim->id}}</td>
        <td><a href="/index/{{$createclaim->id}}">{{$claim->claim_id}}</a></td>
        <td>{{$claim->accClaimNo}}</td>
        <td>{{$claim->claimNo}}</td>
        <td>{{$claim->statusCar}}</td>
        <td>{{$claim->car_gen}}</td>
        <td>{{$claim->company}}</td>
        <td>{{$claim->state}}</td>
        <td>{{$claim->customer_name}}</td>

    <?php endforeach; ?>
        </tr>
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