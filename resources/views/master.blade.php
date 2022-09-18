<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title> Laravel App Project</title>



	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
</script>

	<script type="text/javascript">
		(function($){

         jQuery(document).ready(function(){
            jQuery('#myForm').submit(function(e){
               e.preventDefault();
               var token = $('meta[name="csrf-token"]').attr('content');
               $.ajaxSetup({
                 headers: {
					        'X-CSRF-TOKEN': token
					    }
              });
               jQuery.ajax({
                  url: "{{ url('/processajax') }}",
                  method: 'POST',
                  data: {
                  	_token: token,
                     name: jQuery('#name').val(),
                     type: jQuery('#type').val(),
                     price: jQuery('#price').val()
                  },
                  fail: function() {
					        alert("error");
					    },

                  success: function(result){
                     console.log(result);
                     var msg = result.msg;
                     if(result.success){
                     	//alert(msg);
                  	} else {
                  		//alert(msg);
                  	}
                  	$(".alert").html(msg);
                  	$(".alert").show();
                  }});
               });
            });
		})(jQuery);
	</script>
	<style type="text/css">
		.carousel-item img{
			max-width: 350px;
			width: auto;
			height: auto;
		}
		img{
			max-width: 100%;
			overflow: hidden;
		}
		.wrap-detail{
			padding: 30px 0 50x 0;
			min-height: 500px;
			margin-top: 50px;
		}
		.bd-example{
			background-color: #ccc;
			margin: 20px 0;
		}
		.login-box{
			max-width: 450px;
			border: 1px solid #dfdfdf;
			margin:  0 auto;
			border-radius: 5px;
			padding: 25px;
			margin-top: 50px;
			background-color: #eeeeee75;

		}
		#login-row{
			min-height: 550px;
		}
		footer{
			padding: 25px 0;
			margin: 0 auto;
			border-top: 1px solid #ccc;
			margin-top: 30px;
			 background-color: #f8f9fa!important;
		}
		.main{
			min-height: 550px;
		}
		.searchForm{
			margin-left: 100px;
		}
		.product-item{
			border: px solid #ccc;
			margin-bottom: 10px;
			background-color: #fff;
		}
		.product-item{
			display: block;
			min-height: 288px;
		}
		.product-item img{
			max-width: 130px;
		}
		.product-item h3{
			font-size: 18px;
		}
		.listProduct{
			background-color: ;
		}
		.product-item a{
			text-decoration: none;
		}
		.cart img{
			max-width: 50px;
		}
		.pagination svg{
			width: 30px;
		}
		.pagination .flex.justify-between{
			display: ;
		}
		.pagination li {
			padding: 0px;
			border: 1px solid #ccc;
			border-right: 0;
		}
		.pagination li a,
		.pagination li span{
			padding: 8px 15px;
			text-decoration: none;
			min-height: 15px;
			display: block;
		}
		.pagination li:last-child{
			border-right: 1px solid #ccc;
		}
		.btn-success{min-width: 100px;
			padding-top: 8px;
			padding-bottom: 8px;
		}
	</style>
</head>
<body>

		{{View::make('header')}}

		@yield('content')

		{{View::make('footer')}}

</body>
</html>