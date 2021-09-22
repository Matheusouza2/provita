<?php

namespace App\Http\Controllers;

use File;
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

    public function deleteImage(Request $request)
    {
        $image = DB::select('select * from arquivos where id = ?', [$request->id]);

        File::delete(public_path('storage/images/'.Auth::user()->id.'/'.$image[0]->nome));

        DB::delete('delete from arquivos where id = ?', [$image[0]->id]);

        return redirect()->back()->with([
            'title' => 'Foto excluida com sucesso !',
            'text' => 'Envie uma nova foto do seu cartão de vacina.',
            'icon' => 'success'
        ]);
    }
}