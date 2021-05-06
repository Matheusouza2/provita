<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function entrar()
    {
        if(Auth::check()){
            if(Auth::user()->nivel == -1){
                return redirect()->route('userIndex');
            }elseif(Auth::user()->nivel == 0){
                //Rota do laboratório quando implementada
            }else{
                return redirect()->route('adminIndex');
            }
        }else{
            return view('login');
        }
    }
}
