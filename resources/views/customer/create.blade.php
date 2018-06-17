@extends('layout.main') @section('page_title', 'Customers')
@section('stylesheet')

@endsection
@section('content')
<form class="form-signin" method="POST" action="/customers/post">
      {{ csrf_field() }}
      
      <h1 class="h3 mb-3 font-weight-normal">Hello World</h1>

      <div class="form-group">
      <label class="sr-only" for="body"><p>kuy</p></label>
      <input type="text" class="form-control" name="Firstname" id="Firstname" required="">
      </div>
      <div class="form-group">
      <label class="sr-only" for="body">นามสกุล :</label>
      <input type="text" class="form-control" name="Lastname" id="Lastname" required="">
      </div>
      <div class="form-group">
      <label class="sr-only" for="body">รหัสประจำตัวประชนชน :</label>
      <input type="text" class="form-control" name="Idcard" id="Idcard" required="">
      </div>
      <div class="form-group">
      <label class="sr-only" for="body">เบอร์โทรศัพท์ :</label>
      <input type="text" class="form-control" name="Tel" id="Tel" required="">
      </div>
      <div class="form-group">
      <label class="sr-only" for="body">ID LINE :</label>
      <input type="text" class="form-control" name="Idline" id="Idline" required="">
      </div>
      <div class="form-group">
      <label class="sr-only" for="body">ที่อยู่ :</label>
      <input type="text" class="form-control" name="Address" id="Address" required="">
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      
    </form>
  