@extends('templates.head')
@section('content')
<body>
    <div id="app">
        @include('templates.menuadmin')
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
                <h3>Pacientes Cadastrados</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Pacientes</h4>
                                    </div>
                                    <div class="card-body">
                                       <div class="table-responsive">
                                           <table class="table table-hover table-md">
                                                <thead>
                                                    <tr>
                                                        <th>Nome</th>
                                                        <th>CPF</th>
                                                        <th>Data de Nascimento</th>
                                                        <th>Diabetes</th>
                                                        <th>Hipertensão</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($pacientes as $paciente)
                                                        <tr>
                                                            <td class="col-auto">{{ $paciente->nome }}</td>
                                                            <td class="col-auto">{{ $paciente->cpf }}</td>
                                                            <td class="col-auto">{{  date( 'd/m/Y' , strtotime($paciente->nascimento)) }}</td>
                                                            @if($paciente->diabetico)
                                                                <td class="col-auto">Sim</td>
                                                            @else
                                                                <td class="col-auto">Não</td>
                                                            @endif
                                                            @if($paciente->hipertensao)
                                                                <td class="col-auto">Sim</td>
                                                            @else
                                                                <td class="col-auto">Não</td>
                                                            @endif
                                                            <td><a href="" title="Baixar exame"><i class="fas fa-download"></i></a></td>
                                                        </tr>
                                                    @endforeach
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
                                      <a href="" class="btn btn-block font-bold btn-light-primary btn-sm">Cadastrar Laboratório</a>
                                      <a href="javascript:void(0)" class="btn btn-block font-bold btn-light-info btn-sm" data-toggle="modal" data-target="#primary">Enviar Exame</a>
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