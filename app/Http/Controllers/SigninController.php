<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class SigninController extends Controller
{
    //
    function show(Request $req){
        $data=Admin::where(['email'=>$req->email])->first();
        if(!$data || !Hash::check($req->password, $data->password)){
            return "email or password is not matched";
        }
        else{
            $req->session()->put('data',$data);
            return redirect('admin');
        }
    }
}
