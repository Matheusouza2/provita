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
            <h3>Médicos Cadastrados</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Médicos</h4>
                                </div>
                                <div class="card-body">
                                   <div class="table-responsive">
                                       <table class="table table-hover table-md">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>CRM</th>
                                                    <th>Especialização</th>
                                                    <th>Contato</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($medicos as $medico)
                                                    <tr>
                                                        <td>{{ $medico->nome }}</td>
                                                        <td>{{ $medico->crm }}</td>
                                                        <td>{{ $medico->especializacao }}</td>
                                                        <td>{{ $medico->contato }}</td>
                                                        <td></td>
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
                        <div class="card-body py-6 px-8">
                            <div class="d-flex align-items-center">
                                <div class="ms-3 name">
                                    @php
                                        $div = explode(' ', Auth::user()->nome);
                                        Auth::user()['nome'] = count($div) > 1?$div[0].' '.$div[1] : $div[0];
                                    @endphp 
                                    <h5 class="font-bold"><i class="fas fa-user"></i> {{ Auth::user()->nome }} </h5>
                                </div>
                                <div class="col-lg-6">
                                  <a href="{{ route('medicoCreate') }}" class="btn font-bold btn-light-primary btn-sm">Cadastrar Médico</a>
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

@endsection