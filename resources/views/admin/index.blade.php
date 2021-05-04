@extends('templates.head')
@section('content')
<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                        <a href="/admin"><img src="{{ asset('site/img/logo-white.svg') }}" alt="Logo"></a>
                        </div>
                        <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block text-white"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item active">
                        <a href="/admin" class='sidebar-link'>
                            <i class="fas fa-home"></i>
                            <span>Início</span>
                        </a>
                        </li>
                        <li class="sidebar-item">
                        <a href="/admin" class='sidebar-link'>
                            <i class="fas fa-procedures"></i>
                            <span>Pacientes</span>
                        </a>
                        </li>
                        <li class="sidebar-item">
                        <a href="/admin" class='sidebar-link'>
                            <i class="fas fa-vial"></i>
                            <span>Laboratórios</span>
                        </a>
                        </li>
                        <li class="sidebar-item">
                        <a href="/admin" class='sidebar-link'>
                            <i class="fal fa-sign-out"></i>
                            <span>Sair</span>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End SideBar-->
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
                        <form action="/admin" method="get" class="needs-validation" novalidate>
                            <div class="form-group mb-3 col-lg-8">
                                <label class="form-control-label" for="medico">Paciente</label>
                                <div class="input-group input-group-merge input-group-alternative">
                                  <select class="form-control" name="doctor" id="medico" required></select>
                                  <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                </div>
                            </div>
                            <div class="form-group mb-3 col-lg-8">
                                <label class="form-control-label" for="lab">Laboratório</label>
                                <div class="input-group input-group-merge input-group-alternative">
                                  <select class="form-control" name="lab" id="lab" required></select>
                                  <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                </div>
                            </div>
                            <div class="form-group mb-3 col-lg-8">
                                <label class="form-control-label" for="customFile">Exame</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Procurar Exame</label>
                                    <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                  </div>
                            </div>
                            <div>
                                <span class="text-muted" id="archives"></span>
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
                                        <h5 class="font-bold">Usuario Logado</h5>
                                    </div>
                                    <div class="col-lg-6">
                                      <a href="" class="btn btn-block font-bold btn-light-primary btn-sm">Cadastrar Laboratório</a>
                                      <a href="javascript:void(0)" class="btn btn-block font-bold btn-light-info btn-sm" data-toggle="modal" data-target="#primary">Enviar Exame</a>
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