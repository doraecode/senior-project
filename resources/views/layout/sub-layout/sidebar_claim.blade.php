

<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button"   aria-controls="collapseExample">
    ข้อมูลลูกค้า
  </a>
  
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <table style="margin-left: 10%">
	<tbody>
	<tr>
		<td>ชื่อ {{$customer->firstName}} </td>
		<td>{{$customer->lastName}}</td>	
	</tr>
	<tr>
		<td>เลขประจำตัวประชาชน </td>
		
	</tr>
	<tr><td>{{$customer->idCard}}</td></tr>
	<tr><td>เบอร์โทรศัพท์ </td></tr>
	<tr><td>{{$customer->tel}}</td></tr>
	<tr><td>ID LINE : {{$customer->idLine}}</td></tr>
	<tr><td>ที่อยู่: {{$customer->address}}</td></tr>


</tbody></table>
  </div>
</div>

<script type="text/javascript">
$('#collapseExample').collapse({
  toggle: true
})
</script>
{{-- <table style="margin-left: 10%">
	<tbody>
	<tr>
		<td>ชื่อ {{$customer->firstName}} </td>
		<td>{{$customer->lastName}}</td>	
	</tr>
	<tr>
		<td>เลขประจำตัวประชาชน </td>
		
	</tr>
	<tr><td>{{$customer->idCard}}</td></tr>
	<tr><td>เบอร์โทรศัพท์ </td></tr>
	<tr><td>{{$customer->tel}}</td></tr>
	<tr><td>ID LINE : {{$customer->idLine}}</td></tr>
	<tr><td>ที่อยู่: {{$customer->address}}</td></tr>


</tbody></table> --}}