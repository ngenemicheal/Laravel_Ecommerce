<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Buyer;

class BuyerController extends Controller
{
    //
    function login(Request $req){
        $buyer= Buyer::where(['email'=>$req->email])->first();
        if(!$buyer || !Hash::check($req->password, $buyer->password))
        {
            return "Username OR Password is Incorrect";
        }
        else{
            $req->session()->put('buyer',$buyer);
            return redirect('/');
        }
    }
}
