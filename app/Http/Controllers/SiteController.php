<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            $pubs = DB::select('Select * from publicidade');
            return view('login', compact('pubs'));
        }
    }

    public function registro()
    {
        $pubs = DB::select('Select * from publicidade');
        return view('registro', compact('pubs'));
    }
}
