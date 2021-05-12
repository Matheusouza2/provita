@extends('templates.head')
@section('content')
<body>
    <div id="app">
        @include('templates.menuadmin')
        <!-- End SideBar-->
        <!-- Start Modal Laboratorio -->
        <div class="modal fade text-left" id="lab" tabindex="-1" aria-labelledby="myModalLabel160" style="display: none" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-color">
                        <h5 class="modal-title white" id="myModalLabel160">
                            Cadastrar Laboratório
                        </h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('cadLab')}}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="form-group mb-3 col-lg-8">
                                <label class="form-control-label" for="cnpj">CNPJ</label>
                                <div class="input-group input-group-merge input-group-alternative">
                                  <input class="form-control" name="cnpj" id="cnpj" required>
                                  <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                </div>
                            </div>
                            <input type="hidden" name="razao_social" id="razao_social" value="">
                            <input type="hidden" name="nome_fantasia" id="nome_fantasia" value="">
                            <input type="hidden" name="logradouro" id="logradouro" value="">
                            <input type="hidden" name="bairro" id="bairro" value="">
                            <input type="hidden" name="numero" id="numero" value="">
                            <input type="hidden" name="cidade" id="cidade" value="">
                            <input type="hidden" name="uf" id="uf" value="">
                            <input type="hidden" name="contato" id="contato" value="">
                            <div class="form-group mb-3 ml-0">
                                <label id="dados"></label>
                            </div>

                            <div class="text-right">
                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Cancelar</span>
                                </button>
                                <button type="submit" class="btn btn-light-success ml-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Enviar</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Laboratorio -->
        <!-- Start Modal Exames-->
        <div class="modal fade text-left" id="primary" tabindex="-1" aria-labelledby="myModalLabel160" style="display: none" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-color">
                        <h5 class="modal-title white" id="myModalLabel160">
                            Envio de Exame
                        </h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('envioExame') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3 col-lg-8">
                                <label class="form-control-label" for="paciente">Paciente</label>
                                <div class="input-group">
                                  <select class="form-control" name="paciente" id="paciente" required></select>
                                  <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                </div>
                            </div>
                            <div class="form-group mb-3 col-lg-8">
                                <label class="form-control-label" for="lab">Laboratório</label>
                                <div class="input-group">
                                  <select class="form-control" name="laboratorio" id="laboratorio" required></select>
                                  <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                </div>
                            </div>
                            <div class="form-group mb-3 col-lg-8">
                                <label class="form-control-label" for="customFile">Exame</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="exame" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Procurar Exame</label>
                                    <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                </div>
                            </div>
                            <div>
                                <span class="text-muted" id="archives"></span>
                            </div>
                            
                            <div class="form-group mb-3 col-lg-8">
                                <label class="form-control-label" for="nome">Nome</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nome" name="nomeExame" placeholder="Dê um nome ao exame" required>
                                    <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Cancelar</span>
                                </button>
                                <button type="submit" class="btn btn-light-success ml-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Enviar</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Exames -->
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
                                                <h6 class="font-extrabold mb-0">112.000</h6>
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
                                                <h6 class="font-extrabold mb-0">183.000</h6>
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
                                                <h6 class="font-extrabold mb-0">80.000</h6>
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Últimos Exames</h4>
                                    </div>
                                    <div class="card-body">
                                       <div class="table-responsive">
                                           <table class="table table-hover table-md">
                                                <thead>
                                                    <tr>
                                                        <th>Paciente</th>
                                                        <th>Laboratório</th>
                                                        <th>Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-auto"><i class="fas fa-user"></i> Nome paciente</td>
                                                        <td class="col-auto">Laboratório</td>
                                                        <td><a href="" title="Baixar exame"><i class="fas fa-download"></i></a></td>
                                                    </tr>
                                                </tbody>
                                           </table>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-6 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">{{ Auth::user()->nome }}</h5>
                                    </div>
                                    <div class="col-lg-6">
                                      <a href="javascript:void(0)" class="btn font-bold btn-light-primary btn-sm" data-toggle="modal" data-target="#lab">Cadastrar Laboratório</a>
                                      <a href="javascript:void(0)" class="btn font-bold btn-light-info btn-sm mt-3" data-toggle="modal" data-target="#primary">Enviar Exame</a>
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
<script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script defer>
    $(document).ready(function(){
       $('#cnpj').mask('00.000.000/0000-00');
   });
</script>
@if (session()->has('success'))
<script defer>
    Swal.fire({
        title: 'Tudo OK !!',
        text: '{{ session()->get('success') }}',
        icon: 'success',
    });
</script>
@elseif(session()->has('erro'))
<script defer>
    Swal.fire({
        title: 'Ooops...',
        text: '{{ session()->get('erro') }}',
        icon: 'error',
    });
</script>
@endif
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
			  text: item.nome,
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