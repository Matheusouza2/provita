<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratorio;
use Illuminate\Support\Facades\Hash;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request['password'] = Hash::make('123');
        $request['cnpj'] = str_replace(array('.','-','/'), '', $request['cnpj']);
        $request['contato'] = str_replace(array('(','-',')', ' '), '', $request['contato']);

        if(Laboratorio::where('cnpj', $request['cnpj'] )->exists()){
            return redirect()->back()->with('erro', 'O CNPJ digitado já se encontra cadastrado na nossa base de dados!');
        }else{
            Laboratorio::create($request->except(['_token']));
            return redirect()->back()->with('success', 'Cadastro realizado com sucesso');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        return response()->json(Laboratorio::all(), 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
