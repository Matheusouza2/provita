@extends('templates.head')
@section('content')
    <div id="app">
        @include('templates.menuadmin')
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
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                  <i class="far fa-users-medical"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold text-capitalize">Pacientes cadastrados</h6>
                                                <h6 class="font-extrabold mb-0">{{ $pacientes->pacientes }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                  <i class="fad fa-clinic-medical"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold text-capitalize">Laboratórios cadastrados</h6>
                                                <h6 class="font-extrabold mb-0">{{ $laboratorios->laboratorios }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                  <i class="fas fa-diagnoses"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Exames enviados</h6>
                                                <h6 class="font-extrabold mb-0">{{ $exames->exames }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Bloco a pensar</h6>
                                                <h6 class="font-extrabold mb-0">112</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($exames2 as $exame)
                                <div class="col-sm-6 col-md-6 col-lg-3">
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
                                                <a href="javascript:void(0)" onclick="downloadArchive('{{ asset('storage/images/'.$exame->paciente.'/'.$exame->nome) }}', '{{ $exame->apelido }}')" class="btn btn-info">Download</a>
                                                <a href="{{ route('exameDel', [$exame->id]) }}" class="btn btn-danger ml-4">Excluir Exame</a>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <strong>Laboratorio:</strong> {{ $exame->nome_fantasia}} <br>
                                            <strong>Data de Envio:</strong> {{ date( 'd/m/Y' , strtotime($exame->data)) }} <br>
                                            <strong>Paciente: </strong> {{ $exame->nome_paciente }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        @include('templates.card-cads')
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
@stop

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script defer>
    $(document).ready(function(){
       $('#cnpj').mask('00.000.000/0000-00');
   });
</script>
<script defer>
    $('#paciente').select2({
	language: "pt-BR",
	placeholder: 'Digite o Nome do Paciente ou o CPF',
	ajax:{
	  url: "{{ route('showPaciente') }}",
	  dataType: "json",
	  processResults: function (data) {
		return {
		  results:  $.map(data, function (item) {
			return {
			  text: item.nome+' | '+item.cpf,
			  id: item.id
			}
		  })
		};
	  },
	  cache: true,
	}
  });
  $('#laboratorio').select2({
	language: "pt-BR",
	placeholder: 'Digite o Nome Fantasia do Laboratório',
	ajax:{
	  url: "{{ route('showLabs') }}",
	  dataType: "json",
	  processResults: function (data) {
		return {
		  results:  $.map(data, function (item) {
			return {
			  text: item.nome_fantasia,
			  id: item.id
			}
		  })
		};
	  },
	  cache: true,
	}
  });
</script>
@endsection