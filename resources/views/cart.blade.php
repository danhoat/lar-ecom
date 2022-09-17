@extends('master')
@section('content')
<?php $total = 0;?>


<div class="container main cart">
    @if($products && count($products) > 0)
       <table class="table table-striped_">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Gallery</th>
                  <th scope="col">Price</th>
                  <th></th>
                </tr>
              </thead>

            @foreach($products as $key=>$item)
                <tr> <?php $total = $total + $item->price;?>
                 <th scope="row">{{++$key}}</th>

                <td>{{$item->name}}</td>
                <td><img src="{{$item->gallery}}" /></td>
                <td>{{number_format($item->price, 0, ',', '.')}} </td>
                <td> <a href="/removecart/{{$item->cart_id}}">Remove</a></td>
                </tr>
            @endforeach
            <tr> <td colspan="3" class="justify-content-end float-end text-right"><strong>Total:</strong></td>
                <td class="text-center"><strong><?php echo number_format($total, 0, ',', '.');?></strong></td>
            </tr>
         </table>
         @else
        <p> Cart is empty.</p>
    @endif
</div>


@endsection