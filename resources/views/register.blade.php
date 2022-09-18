@extends('master')
@section('content')

 <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">

            <h3 class="text-center text-info">Register</h3>

            <div id="login-box" class="login-box">
                <form id="login-form" class="form" action="/register" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="text-info">Username</label><br>
                        <input type="text"  name="username" id="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email" class="text-info">Email</label><br>
                        <input type="email"  name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-info">Password:</label><br>
                        <input type="text" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group text-right">
                        <button  class="btn-info btn-md btn-default btn btn-success" type="submit"> Register</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


@endsection