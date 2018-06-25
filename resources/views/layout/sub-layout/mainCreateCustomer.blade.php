<!DOCTYPE html>
 <html lang="en">
 <head>
 <title>@yield('page_title')</title>
 <meta charset="utf-8">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

 <meta name="viewport" content="width=device-width, initial-scale=1">
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
@yield('stylesheet')

 <!-- <link href="/css/app.css" rel="stylesheet"> -->
 
 </head>
 <body>
 	 <!-- <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">

 </div> -->
 <div class="container-fluid " style="background-color: whitesmoke">
 
<div class="row content " >
 <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 sidenav " style="background-color: whitesmoke">

	

     

 </div>

 
 <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 " style="background-color: whitesmoke">
@yield('content')
 
 </body>
 <!-- <footer class="container-fluid">
 <p> Design by zen</p>
 </footer> -->
