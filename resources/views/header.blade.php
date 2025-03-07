<?php
use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();


$user       = session()->get('user');
$isLogged   = false;
if( $user ){
  $name =$user['name'];
  $isLogged = true;
}

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/products">Products</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Orders</a>
      </li>
      

       <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          User
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="/logout">Thêm User</a>
        </div>
      </li>

      <li class="searchForm">
        <form class="form-inline my-2 my-lg-0" action="/search" method="GET">
        <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  </li>

    </ul>


  </div>
   <ul class="nav navbar-nav navbar-right">
      <?php if($isLogged){ ?>
         <li class="nav-item ">
            <a class="nav-link " href="/cartlist">Cart(<?php echo $total;?>)</a>
        </li>
       <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $name; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">Logout</a>
          <a class="dropdown-item" href="/logout">ABc Check</a>
        </div>
      </li>
          <li class="nav-item ">&nbsp;</li>
          <li class="nav-item ">&nbsp;</li>
          <li class="nav-item ">&nbsp;</li>
          <li class="nav-item ">&nbsp;</li>
    <?php }  else { ?>
       <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ajaxform">Ajax Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register">Register</a>
      </li>
    <?php } ?>
     </ul>
</div>

</nav>