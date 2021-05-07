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
                <h3>Início</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-4">
                                @if(count($image) >= 2)
                                    <div class="card collapse">
                                @else
                                <div class="card">
                                @endif
                                    <div class="card-header">
                                        <h4>Envio da foto</h4>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('uploadImage') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-12">
                                                    <div class="custom-file mt-4">
                                                        <input type="file" class="custom-file-input" id="customFile" name="image" required>
                                                        <label class="custom-file-label" for="customFile">Procurar Imagem</label>
                                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <span class="text-muted" id="archives"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row juntify-contente-center align-items-center">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="nickname"></label>
                                                        <select name="apelido" class="form-control" id="nickname">
                                                            <option value="carteira-vacina-frente">Frente</option>
                                                            <option value="carteira-vacina-verso">Verso</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-right">
                                                    <button type="submit" class="btn btn-light-success" data-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Enviar</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @if ($image != null)
                                @foreach ($image as $item)
                                    @if ($item->apelido == 'carteira-vacina-frente')
                                        <div class="col-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Carteira de Vacinação (Frente)</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row justify-content-center align-items-center mt-4">
                                                        <a href="javascript:void(0)" onclick="downloadArchive('{{ asset('storage/images/'.Auth::user()->id.'/'.$item->nome) }}', '{{ $item->apelido }}')">
                                                            <img src="{{ asset('storage/images/'.Auth::user()->id.'/'.$item->nome) }}" width="400px" height="400px" alt="Img não encontrada">
                                                        </a>
                                                    </div>
                                                    <div class="row justify-content-center align-items-center">
                                                        <a href="javascript:void(0)" onclick="downloadArchive('{{ asset('storage/images/'.Auth::user()->id.'/'.$item->nome) }}', '{{ $item->apelido }}')" class="btn btn-info mt-4">Download do arquivo</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    @else
                                        <div class="col-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Carteira de Vacinação (Verso)</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row justify-content-center align-items-center mt-4">
                                                        <a href="javascript:void(0)" onclick="downloadArchive('{{ asset('storage/images/'.Auth::user()->id.'/'.$item->nome) }}', '{{ $item->apelido }}')">
                                                            <img src="{{ asset('storage/images/'.Auth::user()->id.'/'.$item->nome) }}" width="400px" height="400px" alt="Img não encontrada">
                                                        </a>
                                                    </div>
                                                    <div class="row justify-content-center align-items-center">
                                                        <a href="javascript:void(0)" onclick="downloadArchive('{{ asset('storage/images/'.Auth::user()->id.'/'.$item->nome) }}', '{{ $item->apelido }}')" class="btn btn-info mt-4">Download do arquivo</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    @endif
                                @endforeach
                            @else
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Nenhuma carteira anexada</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center align-items-center mt-4">
                                                <a href="javascript:void(0)">
                                                    <img src="{{ asset('images/noimage.gif') }}" width="400px" height="400px" alt="Img não encontrada">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-6 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">Usuario Logado</h5>
                                    </div>
                                    <div class="col-lg-6">
                                      <a href="/logout" class="btn btn-block font-bold btn-light-primary btn-sm">Sair</a>
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
@endsection