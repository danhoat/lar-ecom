@extends('master')
@section('content')

 <div id="login-row" class="row justify-content-center align-items-center">

   <form id="myForm">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name">
      </div>
      <div class="form-group">
        <label for="type">Type:</label>
        <input type="text" class="form-control" id="type">
      </div>
      <div class="form-group">
         <label for="price">Price:</label>
         <input type="text" class="form-control" id="price">
       </div>
       <div class="form-group alert alert-success" style="display:none;">

       </div>
      <button class="btn btn-primary" type="submit" id="ajaxSubmit">Submit</button>
    </form>
  </div>


@endsection