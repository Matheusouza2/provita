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
        Digite seu e-mail para receber um link de redefinição de senha.
    </p>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-4 order-xl-1">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('password.email') }}" method="post" novalidate class="needs-validation">
                            @csrf
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">E-mail</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required>
                                        <div class="invalid-feedback">
                                            O campo senha é obrigatório
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 mb-4">
                                    <button type="submit" class="btn-acesso text-white">Enviar link</button>
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