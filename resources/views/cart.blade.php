@extends('master')
@section('content')
<?php $total = 0;?>

<div class="container main cart">
    @if($products)
       <table class="table table-striped_">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Gallery</th>
                  <th scope="col">Price</th>
                </tr>
              </thead>

            @foreach($products as $key=>$item)
                <tr> <?php $total = $total + $item->price;?>
                 <th scope="row">{{++$key}}</th>

                <td>{{$item->name}}</td>
                <td><img src="{{$item->gallery}}" /></td>
                <td>{{number_format($item->price, 0, ',', '.')}} </td>
                </tr>
            @endforeach
            <tr> <td colspan="3" class="justify-content-end float-end text-right"><strong>Total:</strong></td>
                <td><?php echo number_format($total, 0, ',', '.');?></td>
            </tr>
         </table>
    @endif
</div>


@endsection