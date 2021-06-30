@extends('templates.headuser')
@section('content')
<body>
    <div id="app">
        @include('templates.menu')
        <!-- End SideBar-->
        <!-- Start Main div -->
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="fal fa-align-right fa-2x"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Perfil</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Informações</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('alteruser',[Auth::user()->id]) }}" method="post" class="needs-validation mt-4" novalidate>
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="" id="customFile">
                                            <div class="row align-items-center">
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nome">Nome</label>
                                                        <input type="text" value="{{ $user->nome }}" id="nome" name="nome" class="form-control" placeholder="Nome completo" required>
                                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                                    </div>
                                                </div>
                                            
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="doc">CPF</label>
                                                        <input type="text" value="{{ $user->cpf }}" id="doc" name="cpf" class="form-control" placeholder="CPF" readonly>
                                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                                        @error('cpf')
                                                            <div class="alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="rg">RG</label>
                                                        <input type="text" value="{{ $user->rg }}" id="rg" name="rg" class="form-control" placeholder="Digite o numero do seu RG" required>
                                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                                    </div>
                                                </div>
                
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="born">Data de nascimento</label>
                                                        <input type="text" value="{{ date( 'd/m/Y' , strtotime($user->nascimento))}}" id="born" name="nascimento" class="form-control" placeholder="Data de Nascimento" required>
                                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                                        @error('nascimento')
                                                            <div class="alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="email">E-mail</label>
                                                        <input type="text" value="{{ $user->email }}" id="email" name="email" class="form-control" placeholder="Email" required>
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
                                                            <option value="m" {{ $user->sexo == 'm'?'Selected':'' }}>Masculino</option>
                                                            <option value="f" {{ $user->sexo == 'f'?'Selected':'' }}>Feminino</option>
                                                            <option value="i" {{ $user->sexo == 'i'?'Selected':'' }}>Prefiro não dizer</option>
                                                        </select>
                                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                                    </div>
                                                </div>
                
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="diabetes">Diabetes</label>
                                                        <select name="diabetico" class="form-control" id="diabetes" required>
                                                            <option value="">Selecione</option>
                                                            <option value="1" {{ $user->diabetico == 1?'Selected':'' }}>Possuo</option>
                                                            <option value="0" {{ $user->diabetico == 0?'Selected':'' }}>Não possuo</option>
                                                        </select>
                                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                                    </div>
                                                </div>
                
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="hipertensao">Hipertensão</label>
                                                        <select name="hipertensao" class="form-control" id="hipertensao" required>
                                                            <option value="">Selecione</option>
                                                            <option value="1" {{ $user->hipertencao == 1?'Selected':'' }}>Possuo</option>
                                                            <option value="0" {{ $user->hipertencao == 0?'Selected':'' }}>Não possuo</option>
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
                                                        <input type="text" value="{{ $user->cep }}" id="cep" name="cep" class="form-control" placeholder="CEP" required>
                                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                                    </div>
                                                </div>
                
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="logradouro">Logradouro</label>
                                                        <input type="text" value="{{ $user->logradouro }}" id="logradouro" name="logradouro" class="form-control" placeholder="Logradouro" required>
                                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                                    </div>
                                                </div>
                
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="numero">Numero</label>
                                                        <input type="text" value="{{ $user->numero }}" id="numero" name="numero" class="form-control" placeholder="Nº" required>
                                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="complemento">Complemento</label>
                                                        <input type="text" value="{{ $user->complemento }}" id="complemento" name="complemento" class="form-control" placeholder="Complemento">
                                                    </div>
                                                </div>
                
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="bairro">Bairro</label>
                                                        <input type="text" value="{{ $user->bairro }}" id="bairro" name="bairro" class="form-control" placeholder="Bairro" required>
                                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                                    </div>
                                                </div>
                
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="cidade">Cidade</label>
                                                        <input type="text" value="{{ $user->cidade }}" id="cidade" name="cidade" class="form-control" placeholder="Cidade" required>
                                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                                    </div>
                                                </div>
                
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="uf">UF</label>
                                                        <input type="text" value="{{ $user->uf}}" id="uf" name="uf" class="form-control" placeholder="UF" required>
                                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                                    </div>
                                                </div>
                                                <div class="col-12"><hr></div>
                                                <div class="col-sm-12 col-md-12 col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pwd">Senha</label>
                                                        <input type="password" id="pwd" name="password" minlength="8" class="form-control" placeholder="Senha" readonly>
                                                        <div class="invalid-feedback">A senha deve ter no minimo 8 caracteres</div>
                                                        @error('password')
                                                            <div class="alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div> 
                                                <div class="col-sm-4 col-md-4 col-lg-4">
                                                    <button type="button" class="btn btn-warning" style="color: black" onclick="$('#pwd').attr('readonly',false);">Alterar Senha</button>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row text-right">
                                                <button type="submit" class="btn btn-primary text-white">Salvar Modificações</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="align-items-center">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-8">
                                            <h5 class="font-bold">{{ Auth::user()->nome }}</h5>
                                            @php
                                                $mask = '###.###.###-##';
                                                $str = Auth::user()->cpf;
                                                $str = str_replace(" ","",$str);
                                                for($i=0;$i<strlen($str);$i++){
                                                    $mask[strpos($mask,"#")] = $str[$i];
                                                }
                                            @endphp     
                                            <small>CPF:{{ $mask }}</small>
                                        </div>
                                        <div class="col-sm-2 col-md-2 col-lg-4 ">
                                            <div class="text-right">
                                                <a href="/logout" class="btn font-bold btn-light-primary">Sair</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Laboratórios Parceiros</h4>
                            </div>
                            <div class="card-body">
                              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="5000">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('site/img/logo.svg') }}" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('site/img/doutora.png') }}" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('site/img/favicon.png') }}" alt="Third slide">
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <footer style="position: fixed;  bottom: 0;">
                <div class="footer clearfix mb-0 text-muted">
                    <div class="row">
                        <div class="float-start">
                            <p>2021 &copy; Provita  </p>
                        </div>                        
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
@stop

@section('script')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
    $(document).ready(function(){
        $('#doc').mask('000.000.000-00');
        $('#born').mask('00/00/0000');
        $('#cep').mask('00000-000')
   });
</script>
@endsection