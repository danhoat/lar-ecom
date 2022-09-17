
@extends('master')
@section('content')
<div class="container main">

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        @foreach($products as $key=>$item)


              <div class="carousel-item @if($key == 0)) active @endif">
                <img src="{{$item->gallery}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <a href="detail/{{$item->id}}/">
                        <h5> {{$item->name}}</h5>
                        <p> {{$item->description}} </p>
                    </a>
                </div>
              </div>
        @endforeach


    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
@endsection