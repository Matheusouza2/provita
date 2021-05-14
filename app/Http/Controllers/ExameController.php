<?php

namespace App\Http\Controllers;

use App\Models\Exame;
use Illuminate\Http\Request;
use Carbon\Carbon;
use File;

class ExameController extends Controller
{
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exameName = time().'.'.$request->file('exame')->extension();
        
        $request['nome'] = $exameName;
        $request['data'] = Carbon::now();

        $request->exame->storeAs('public/images/'.$request->paciente, $exameName);

        Exame::create($request->except(['_token']));
        
        return back()->with('success', 'Exame enviado com sucesso !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function show(Exame $exame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function edit(Exame $exame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exame $exame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exame  $exame
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exame $exame)
    {
        File::delete(public_path('storage/images/'.$exame->paciente.'/'.$exame->nome));

        $exame->delete();

        return redirect()->back()->with('success', 'Exame excluido com sucesso, envie um novo arquivo.');
    }
}
