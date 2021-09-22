<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;
use App\Http\Controllers\UserController;
use App\Models\Farmacia;
use App\Models\Medico;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pacientes = DB::select('select count(id) as pacientes from usuarios where nivel = ?', [-1]);
        $laboratorios = DB::select('select count(id) as laboratorios from laboratorios', [0]);
        $exames = DB::select('select count(id) as exames from exames');
        $examesList = DB::select('select exames.*, lab.nome_fantasia, usuarios.nome as nome_paciente from exames INNER JOIN laboratorios lab ON exames.laboratorio = lab.id INNER JOIN usuarios ON exames.paciente = usuarios.id ORDER BY exames.id DESC LIMIT 12');

        return view('admin.index')->with(['pacientes' => $pacientes[0], 'laboratorios' => $laboratorios[0], 'exames' => $exames[0], 'exames2' => $examesList]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function pacientes()
    {
        $pacientes = User::where('nivel', -1)->get();
        foreach($pacientes as $paciente){
            $paciente->cpf = UserController::mascara('###.###.###-##', $paciente->cpf);
        }
        return view('admin.pacientes')->with('pacientes', $pacientes);
    }

    public function fichaPaciente(User $user)
    {
        $pdf = PDF::loadView('templates.fichaPaciente', compact('user'));
        return $pdf->download('ficha.pdf');
    }

    public function farmacias()
    {
        return view('admin.farmacias')->with('farmacias',Farmacia::all());
    }

    public function medicos()
    {
        return view('admin.medicos')->with('medicos', Medico::all());
    }
}
