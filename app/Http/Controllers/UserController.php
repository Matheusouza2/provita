<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

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
        $examesList = DB::select('select exames.*, lab.nome_fantasia from exames INNER JOIN laboratorios lab ON exames.laboratorio = lab.id WHERE paciente = ?', [Auth::user()->id]);

        return view('user.index')->with(['exames' => $examesList]);
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
    public function show(Request $request)
    {
        $data = [];
        
        if($request->has('q')){
            $search = $request->q;
            $data = User::select("id","nome","cpf")
                    ->where('nivel', '-1')
                    ->where('cpf','LIKE',"%$search%")
                    ->orWhere('nome', 'LIKE', "%$search%")
                    ->get();
        }
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('user.perfil', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->cpf = str_replace(array('.', '-'), '', $request->cpf);
        $request->cep = str_replace('-', '', $request->cep);
        $data = explode('/', $request['nascimento']);
        $request->nascimento = $data[2].'-'.$data[1].'-'.$data[0];

        $user->nome = $request->nome;
        $user->cpf = $request->cpf;
        $user->rg = $request->rg;
        $user->nascimento = $request->nascimento;
        $user->email = $request->email;
        $user->sexo = $request->sexo;
        $user->diabetico = $request->diabetico;
        $user->hipertensao = $request->hipertensao;
        $user->cep = $request->cep;
        $user->logradouro = $request->logradouro;
        $user->numero = $request->numero;
        $user->bairro = $request->bairro;
        $user->cidade = $request->cidade;
        $user->uf = $request->uf;

        if($request->password != null){
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->back()->with('success', 'Dados alterados com sucesso !!');
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

    public function exames()
    {
        $examesList = DB::select('select exames.*, lab.nome_fantasia from exames INNER JOIN laboratorios lab ON exames.laboratorio = lab.id WHERE paciente = ?', [Auth::user()->id]);
        return view('user.exames', compact('examesList'));
    }

    public static function mascara($mask, $str){
        $str = str_replace(" ","",$str);
        for($i=0;$i<strlen($str);$i++){
            $mask[strpos($mask,"#")] = $str[$i];
        }
        return $mask;
    }

    public function mostrar()
    {
        $user = User::all();
        return json_encode($user);
    }
    
    /**
     * METODOS DE RESET DE SENHA
     */
    function passwordRequest()
    {
        return view('auth.forgot-password');
    }

    public function passwordEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['success' => __($status)])
                    : back()->withErrors(['erro' => __($status)]);
    }

    public function passwordReset($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
    
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
    
                $user->save();
    
                event(new PasswordReset($user));
            }
        );
    
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('entrar')->with('success', __($status))
                    : back()->withErrors(['erro' => [__($status)]]);
    }
}
