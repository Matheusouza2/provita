<?php

namespace App\Http\Controllers;

use App\Models\Farmacia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FarmaciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('farmacia.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('farmacia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cnpj' => 'required'
        ]);

        $request['cnpj'] = str_replace(array('.','/', '-'), '', $request->cnpj);

        $request['cep'] = str_replace(array('.', '-'), '', $request->cep);

        $request['contato'] = str_replace(array('(','-', ')', ' '), '', $request->contato);

        $request['password'] = Hash::make($request->password);

        Farmacia::create($request->except(['_token']));

        return redirect()->route('farmaciaIndex')->with([
            'title' => 'Cadastro Efetuado !',
            'text' => 'Farmácia Cadastrada com sucesso.',
            'icon' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function show(Farmacia $farmacia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function edit(Farmacia $farmacia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farmacia $farmacia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Farmacia  $farmacia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farmacia $farmacia)
    {
        //
    }
}
