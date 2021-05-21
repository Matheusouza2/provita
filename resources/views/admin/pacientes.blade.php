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
                                                            <td><a href="{{ route('fichaPaciente',[$paciente->id]) }}" title="Baixar Ficha"><i class="fas fa-download"></i></a></td>
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
                        @include('templates.card-cads')
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