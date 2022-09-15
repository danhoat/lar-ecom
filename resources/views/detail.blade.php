
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

      <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$product->id}}">

        <button type="submit" class="btn btn-success btnAddCart">Add to Cart</button>
        </form>
        <p>
          <br />
         <a type="button" class="btn btn-success" href="#">Buy Now</a>
       </p>

    </div>
  </div>
</div>
@endsection