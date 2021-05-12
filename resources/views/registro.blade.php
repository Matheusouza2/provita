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
        A Provita facilita você a se conectar e ter acesso a todos 
        os seus documentos na área da saúde
    </p>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-8 col-md-12 col-sm-12 order-xl-1">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="post" class="needs-validation" novalidate>
                            @csrf
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="form-control-label" for="nome">Nome</label>
                                        <input type="text" value="{{ old('nome') }}" id="nome" name="nome" class="form-control" placeholder="Nome completo" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>
                            
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="doc">CPF</label>
                                        <input type="text" value="{{ old('cpf') }}" id="doc" name="cpf" class="form-control" placeholder="CPF" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                        @error('cpf')
                                            <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="rg">RG</label>
                                        <input type="text" value="{{ old('rg') }}" id="rg" name="rg" class="form-control" placeholder="Digite o numero do seu RG" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="born">Data de nascimento</label>
                                        <input type="text" value="{{ old('nascimento') }}" id="born" name="nascimento" class="form-control" placeholder="Data de Nascimento" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                        @error('nascimento')
                                            <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">E-mail</label>
                                        <input type="text" value="{{ old('email') }}" id="email" name="email" class="form-control" placeholder="Email" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                        @error('email')
                                            <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="sexo">Sexo</label>
                                        <select name="sexo" class="form-control" id="sexo" required>
                                            <option value="">Selecione</option>
                                            <option value="h">Homem</option>
                                            <option value="m">Mulher</option>
                                            <option value="i">Prefiro não dizer</option>
                                        </select>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="diabetes">Diabetes</label>
                                        <select name="diabetico" class="form-control" id="diabetes" required>
                                            <option value="">Selecione</option>
                                            <option value="1">Possuo</option>
                                            <option value="0">Não possuo</option>
                                        </select>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="hipertensao">Hipertensão</label>
                                        <select name="hipertensao" class="form-control" id="hipertensao" required>
                                            <option value="">Selecione</option>
                                            <option value="1">Possuo</option>
                                            <option value="0">Não possuo</option>
                                        </select>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <hr>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="cep">CEP</label>
                                        <input type="text" value="{{ old('cep') }}" id="cep" name="cep" class="form-control" placeholder="CEP" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="logradouro">Logradouro</label>
                                        <input type="text" value="{{ old('logradouro') }}" id="logradouro" name="logradouro" class="form-control" placeholder="Logradouro" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="numero">Numero</label>
                                        <input type="text" value="{{ old('numero') }}" id="numero" name="numero" class="form-control" placeholder="Nº" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="bairro">Bairro</label>
                                        <input type="text" value="{{ old('bairro') }}" id="bairro" name="bairro" class="form-control" placeholder="Bairro" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="cidade">Cidade</label>
                                        <input type="text" value="{{ old('cidade') }}" id="cidade" name="cidade" class="form-control" placeholder="Cidade" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="uf">UF</label>
                                        <input type="text" value="{{ old('uf') }}" id="uf" name="uf" class="form-control" placeholder="UF" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>
                                <div class="col-12"><hr></div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pwd">Senha</label>
                                        <input type="password" value="{{ old('senha') }}" id="pwd" name="password" class="form-control" placeholder="Senha" required>
                                        @error('password')
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