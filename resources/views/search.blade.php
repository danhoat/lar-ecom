
@extends('master')
@section('content')
<div class="container main listProduct">

      <h3> Search Result</h3>
      <div class="row">
        @csrf


         @foreach($products as $key=>$item)
          <div class="col-4 text-center" >
              <div class="product-item ">
                <h3 class="text-center"> {{$item->name}}</h3>
                <a href="detail/{{$item->id}}"><img src="{{$item->gallery}}" /></a>
                <p>Price: {{number_format($item->price, 0, ',', '.')}}</p>
                <p> <a href="detail/{{$item->id}}">Detail</a></p>
            </div>
          </div>
         @endforeach


     </div>

     <div class="container mt-5">
       <div class="d-flex justify-content-center pagination">
           <!-- {!! $products->links() !!} -->
           <nav aria-label="Page navigation example">
          {!! $products->links() !!}
        </nav>
      </div>
    </div>

</div>
@endsection