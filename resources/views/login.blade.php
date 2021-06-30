@extends('templates.site')
@section('content')
<body class="login-provita">
    <div class="row justify-content-center align-items-center">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
                @if (!empty($pubs))
                    <div class="carousel-item active">
                        <img class="d-block" src="{{ asset('storage/images/publicidade/'.$pubs[0]->nome) }}" alt="{{$pubs[0]->descricao}}">
                    </div>
                    @for ($i = 1; $i < count($pubs); $i++)
                        <div class="carousel-item">
                            <img class="d-block" src="{{ asset('storage/images/publicidade/'.$pubs[$i]->nome) }}" alt="{{$pubs[$i]->descricao}}">
                        </div>
                    @endfor
                @endif
            </div>
        </div>
    </div>
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
                        <form action="{{ route('login') }}" method="post" novalidate class="needs-validation">
                            @csrf
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="doc">CPF</label>
                                        <input type="text" value="{{ old('cpf') }}" id="doc" name="cpf" class="form-control" placeholder="CPF" required>
                                        <div class="invalid-feedback">
                                            O campo senha é obrigatório
                                        </div>
                                        @error('cpf')
                                            <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pwd">Senha</label>
                                        <input type="password" value="{{ old('senha') }}" id="pwd" name="password" class="form-control" placeholder="Senha" required>
                                        <div class="invalid-feedback">
                                            O campo senha é obrigatório
                                        </div>
                                        @error('password')
                                            <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 mb-4">
                                    <button type="submit" class="btn-acesso text-white">Entrar</button>
                                </div>
                                <small><a href="{{ route('password.request') }}">Esqueci minha Senha</a></small>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <pre class="text-muted text-sm-center">Ainda não possui uma conta?</pre>
                        <a class="text-muted text-sm-center" title="Clique para se cadastrar no sistema" href="/cadastrar">Faça o seu cadastro.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection