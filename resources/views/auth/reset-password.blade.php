@extends('templates.site')
@section('content')
<body class="login-provita">
    <div class="row justify-content-center align-items-center">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h3>Publicidade.</h3>
                    <!--<img class="d-block" src="{{ asset('site/img/logo.svg') }}" width="700px" height="150px" alt="First slide"> -->
                </div>
                <div class="carousel-item">
                    <h3>Publicidade..</h3>
                </div>
                <div class="carousel-item">
                    <h3>Publicidade...</h3>
                </div>
            </div>
        </div>
    </div>
    <a href="/" class="logo-login"><img class="logo-img" src="{{asset('site/img/logo.svg')}}" alt="logo-provita" style="justify-content: center;"></a>
    <p class="subtitulo">
        Digite sua nova senha.
    </p>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-4 order-xl-1">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('password.update') }}" method="post" novalidate class="needs-validation">
                            @csrf
                            <input type="hidden" name="token" value="{{$token}}">
                            <div class="row justify-content-center align-items-center">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">Digite seu E-mail</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required>
                                        <div class="invalid-feedback">
                                            O campo E-mail é obrigatório
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">Digite a nova Senha</label>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required>
                                        <div class="invalid-feedback">
                                            O campo senha é obrigatório
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password_confirmation">Confirme a senha</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Senha" required>
                                        <div class="invalid-feedback">
                                            O campo de confirmação de senha é obrigatório
                                        </div>
                                    </div>
                                </div>
                                @error('password')
                                    <div class="alert-danger">{{ $message }}</div>
                                @enderror
                                @error('email')
                                    <div class="alert-danger">{{ $message }}</div>
                                @enderror
                                @error('token')
                                    <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 mb-4">
                                    <button type="submit" class="btn-acesso text-white">Alterar Senha</button>
                                </div>
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