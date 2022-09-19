<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    //
    function login(Request $req){
        $email  = $req->email;
        $user   = false;


        // if( is_email($email) ){
        //     $user =  User::where(['email'=> $email])->first();
        // } else {
        //     $user = User::where(['name'=> $email])->first();
        // }

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $user =  User::where(['email'=> $email])->first();
        } else {
          $user = User::where(['name'=> $email])->first();
        }


        if( !$user || !Hash::check($req->password, $user->password )){
            return 'Password incorrect.';
        }
        $req->session()->put('user',$user);

        return redirect('/');

    }
    function register(Request $req){

        // $user =  User::where(['email'=> $req->email])->first();

        // if( !$user || !Hash::check($req->password, $user->password )){
        //     return 'Password incorrect.';
        // }
        // $req->session()->put('user',$user);
        $email = $req->email;
        $user = $user =  User::where(['email'=> $email])->first();
        if( $user ){
            return "Email already exists: ".$email;
        }
        $user = new User;

        $user->name   = trim($req->username);
        $user->email   = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        $req->session()->put('user',$user);
        return redirect('/');

    }
    function loginAjax(Request $req){
        $email  = $req->email;
        $user   = false;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $user =  User::where(['email'=> $email])->first();
        } else {
          $user = User::where(['name'=> $email])->first();
        }

        if( !$user || !Hash::check($req->password, $user->password )){
            $msg =  'Login fail.';
             return response()->json(['success'=> false, 'msg' => $msg]);
        }
        $req->session()->put('user',$user);

        return response()->json(['success'=> true, 'msg' => 'Login successfully. Redirect to home page.']);
    }

}
