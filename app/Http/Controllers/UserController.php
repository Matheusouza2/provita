<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Realiza o Login do Usuario
     */
    public function login(Request $request)
    {
        $validated = $request->validate([
            'cpf' => ['required', 'cpf'],
            'password' => ['required']
        ]);
        
        $usuario = [
            'cpf' => str_replace(array('.', '-'), '', $request->cpf),
            'password' => $request->password
        ];

        if(Auth::attempt($usuario)){
            $request->session()->regenerate();
            return redirect()->route('entrar');
        }else{
            return redirect()->route('entrar')->withErrors(['erro' => 'Verifique suas credenciais e tente novamente']);
        }
    }
    /**
     * Realizar o cadastro do Usuario
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'cpf' => ['cpf'],
            'nascimento' => ['date_format:"d/m/Y'],
            'email' => ['email:rfc,dns','unique:usuarios,email'],
            'password' => ['min:8']
        ]);

        $request['nivel'] = -1;
        $request['password'] = Hash::make($request['password']);
        $request['cpf'] = str_replace(array('.','-'), '', $request['cpf']);
        $data = explode('/', $request['nascimento']);
        $request['nascimento'] = $data[2].'-'.$data[1].'-'.$data[0];
        $request['cep'] = str_replace('-', '', $request['cep']);
        
        if(User::where('cpf', $request['cpf'] )->exists()){
            return redirect()->back()->withErrors(['erro' => 'O CPF digitado já se encontra cadastrado no nosso sistema!']);
        }else{
            User::create($request->except(['_token']));
            return redirect()->route('entrar')->with('success', 'Cadastro realizado com sucesso');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return response()->json(User::all(), 200);
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

    public function dose1()
    {
        $image = DB::select('select * from arquivos where id_user = ? AND apelido = ?', [Auth::user()->id, '1dose']);
        
        return view('user.dose1')->with('image', $image);
    }

    public function dose2()
    {
        $image = DB::select('select * from arquivos where id_user = ? AND apelido = ?', [Auth::user()->id, '2dose']);
        
        return view('user.dose2')->with('image', $image);
    }

    public function carteiraVacina()
    {
        $image = DB::select('select * from arquivos where id_user = ? AND apelido LIKE ?', [Auth::user()->id, 'carteira%']);
        return view('user.carteira-vacina')->with('image', $image);
    }

    public static function mascara($mask, $str){
        $str = str_replace(" ","",$str);
        for($i=0;$i<strlen($str);$i++){
            $mask[strpos($mask,"#")] = $str[$i];
        }
        return $mask;
    }
}
