@extends('templates.headuser')
@section('content')
<body>
    <div id="app">
        @include('templates.menu')
        <!-- End SideBar-->
        <!-- Start Main div -->
        <div id="main">
            <header class="mb-3">
                <a href="javascript:void(0)" class="burger-btn d-block d-xl-none">
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
                            @foreach ($exames as $exame)
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>{{ $exame->apelido }}</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-center align-items-center">
                                            <a href="javascript:void(0)" onclick="downloadArchive('{{ asset('storage/images/'.$exame->paciente.'/'.$exame->nome) }}', '{{ $exame->apelido }}')">
                                                <img src="{{ asset('site/img/pdf-icon.png') }}" width="100em;" alt="">
                                            </a>
                                        </div>
                                        <div class="row justify-content-center align-items-center">
                                            <a href="javascript:void(0)" onclick="downloadArchive('{{ asset('storage/images/'.$exame->paciente.'/'.$exame->nome) }}', '{{ $exame->apelido }}')" class="btn btn-info"><i class="fas fa-download"></i> Download do Exame</a>
                                            <a href="{{ asset('storage/images/'.$exame->paciente.'/'.$exame->nome) }}" target="_blank" class="btn btn-warning ml-3" style="color: #000"><i class="fas fa-eye"></i> Vizualizar</a>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <strong>Laboratório: </strong>{{ $exame->nome_fantasia }} <br>
                                        <strong>Data: </strong> {{ date( 'd/m/Y' , strtotime($exame->data)) }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
                                                <a href="/logout" class="btn font-bold btn-light-primary btn-sm">Sair</a>
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
@endsection