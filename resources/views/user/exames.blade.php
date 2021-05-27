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
                <h3>Exames</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <th class="col-auto">Laboratorio</th>
                                                <th class="col-auto">Nome do Exame</th>
                                                <th class="col-auto">Data</th>
                                                <th class="col-auto">Download</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($examesList as $exame)
                                                    <tr>
                                                        <td>{{ $exame->nome_fantasia }}</td>
                                                        <td>{{ $exame->apelido }}</td>
                                                        <td>{{ date( 'd/m/Y' , strtotime($exame->data)) }}</td>
                                                        <td><a href="javascript:void(0)" onclick="downloadArchive('{{ asset('storage/images/'.$exame->paciente.'/'.$exame->nome) }}', '{{ $exame->apelido }}')" title="Baixar Exame"><i class="fa fa-download"></i></a>
                                                            <a href="{{ asset('storage/images/'.$exame->paciente.'/'.$exame->nome) }}" target="_blank" class="ml-3" title="Vizualizar Exame"><i class="fas fa-eye"></i></a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
@endsection