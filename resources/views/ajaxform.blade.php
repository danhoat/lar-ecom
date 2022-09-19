@extends('master')
@section('content')

<div id="login-row" class="row justify-content-center align-items-center">
    <div id="login-column" class="col-md-6">
        <h3 class="text-center text-info">Login</h3>
        <div id="login-box" class="login-box">
            <form id="loginAjax" class="form needs-validation">
              @csrf

                <div class="form-group">
                    <label for="email" class="text-info">Email or Username</label><br>
                    <input type="text"  name="email" id="email" class="form-control required required" required>
                </div>
                <div class="form-group">
                    <label for="password" class="text-info">Password:</label><br>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                 <div class="form-group alert " style="display:none;">

                    <span class="redirecting spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                      <div class="message"></div>
                 </div>
                <div class="form-group text-right">
                    <button  class="btn-info btn-md btn-default btn btn-success" type="submit"> Login</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection