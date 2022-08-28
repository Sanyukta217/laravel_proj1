<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserController extends Controller
{
    //
    function login(Request $req){
        $user =  User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            "Email or password doesnot match";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
