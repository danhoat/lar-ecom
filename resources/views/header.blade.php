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
        <a class="nav-link" href="#">Products</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Custom Link</a>
      </li>
      <li class="searchForm">
        <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </li>

    </ul>


  </div>
   <ul class="nav navbar-nav navbar-right">

      <?php if($isLogged){ ?>
         <li><a href="#">cart(<?php echo $total;?>)</a></li>
       <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $name; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">Logout</a>
          <a class="dropdown-item" href="/logout">ABc Check</a>

        </div>
      </li>
    <?php }  else { ?>
       <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
    <?php } ?>
     </ul>
</div>

</nav>