@extends('templates.site')
@section('content')
<body class="login-provita">
    <a href="/" class="logo-login"><img class="logo-img" src="{{asset('site/img/logo.svg')}}" alt="logo-provita" style="justify-content: center;"></a>
    <p class="subtitulo">
        A Provita facilita você a se conectar e ter acesso a todos 
        os seus documentos na área da saúde
    </p>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-4 order-xl-1">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="nome">Nome</label>
                                        <input type="text" value="{{ old('nome') }}" id="nome" name="nome" class="form-control" placeholder="Nome completo">
                                        @error('nome')
                                            <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="doc">CPF</label>
                                        <input type="text" value="{{ old('cpf') }}" id="doc" name="cpf" class="form-control" placeholder="CPF">
                                        @error('cpf')
                                            <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="born">Data de nascimento</label>
                                        <input type="text" value="{{ old('nascimento') }}" id="born" name="nascimento" class="form-control" placeholder="Data Nascimento">
                                        @error('nascimento')
                                            <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pwd">Senha</label>
                                        <input type="password" value="{{ old('senha') }}" id="pwd" name="senha" class="form-control" placeholder="Senha">
                                        @error('senha')
                                            <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <button type="submit" class="btn-acesso text-white  ">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection