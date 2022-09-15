
@extends('master')
@section('content')
<div class="container">
  <div class="row wrap-detail">
    <div class="col-sm-6" >
      <img src="{{$product->gallery}}" width="350" />
    </div>
    <div class="col-sm-6" >
      <h3> Description</h3>
      <h2>{{$product->name}}</h2>
      <label>Price: {{$product->price}}</label>
      <p> Category: {{$product->category}}</p>
      <p> {{$product->description}}</p>
      <p>
  
        <button type="button" class="btn btn-success btnAddCart">Add to Cart</button>
         <a type="button" class="btn btn-success" href="#">Buy Now</a>
      </p>
    </div>
  </div>
</div>
@endsection