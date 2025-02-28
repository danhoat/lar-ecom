@extends('master')
@section('content')

 <div id="login-row" class="row justify-content-center align-items-center">
    <div id="login-column" class="col-md-6">
        <h3 class="text-center text-info">Login</h3>
        <div id="login-box" class="login-box">
            <form id="login-form" class="form" action="/login" method="POST">
            	@csrf

                <div class="form-group">
                    <label for="email" class="text-info">Email or Username</label><br>
                    <input type="text"  name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password" class="text-info">Password:</label><br>
                    <input type="text" name="password" id="password" class="form-control">
                </div>
                <div class="form-group text-right">
                    <button  class="btn-info btn-md btn-default btn btn-success" type="submit"> Login</button>
                </div>

            </form>

        </div>


        <div class="alert login-box" role="alert">
            <h4 class="alert-heading">Account Demo!</h4>

           admin/admin <br />
            abc/abc
        </div>

    </div>
</div>

@endsection