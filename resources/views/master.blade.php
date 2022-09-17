<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Laravel App Project</title>



	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



	<script type="text/javascript">
		(function($){
			$(document).ready(function(){
				//$('.carousel').carousel();
				//alert('js ok');
				$('.carousel').carousel({
				  interval: 2000
				})
			})
		})(jQuery)
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
			border: 1px solid #ccc;
			margin:  0 auto;
			border-radius: 5px;
			padding: 25px;
			margin-top: 50px;

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
		.cart img{
			max-width: 80px;
		}
	</style>
</head>
<body>

		{{View::make('header')}}

		@yield('content')

		{{View::make('footer')}}

</body>
</html>