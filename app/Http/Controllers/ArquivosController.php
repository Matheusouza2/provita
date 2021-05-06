<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ArquivosController extends Controller
{
    public function UploadImage(Request $request)
    {
        $imageName = time().'.'.$request->file('image')->extension();

        $request->image->storeAs('public/images/'.Auth::user()->id, $imageName);

        DB::insert('insert into arquivos (nome, apelido, id_user) values (?, ?, ?)', [$imageName, $request->apelido, Auth::user()->id]);

        return back()->with('image',$imageName);
    }

    public function getImg(Type $var = null)
    {
        
    }
}