@extends('master')
@section('content')

 <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
            <div id="login-box" class="login-box">
                <form id="login-form" class="form" action="/login" method="POST">

                	@csrf
                    <h3 class="text-center text-info">Login</h3>
                    <div class="form-group">
                        <label for="email" class="text-info">Email</label><br>
                        <input type="text"  name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-info">Password:</label><br>
                        <input type="text" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>

                        <a href="#" class="text-info">Register here</a>
                        <button class="btn-info btn-md btn-default" type="submit"> Login</button>
                    </div>
                    <div id="register-link" class="text-right">
                        <a href="#" class="text-info">Register here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection