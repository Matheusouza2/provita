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
                <h3>Laboratórios Cadastrados</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Laboratórios</h4>
                                    </div>
                                    <div class="card-body">
                                       <div class="table-responsive">
                                           <table class="table table-hover table-md">
                                                <thead>
                                                    <tr>
                                                        <th>Nome Fantasia</th>
                                                        <th>CNPJ</th>
                                                        <th>Logradouro</th>
                                                        <th>Cidade</th>
                                                        <th>UF</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($labs as $lab)
                                                        <tr>
                                                            <td class="col-auto">{{ $lab->nome_fantasia }}</td>
                                                            <td class="col-auto">{{ $lab->cnpj }}</td>
                                                            <td class="col-auto">{{ $lab->logradouro }}</td>
                                                            <td class="col-auto">{{ $lab->cidade }}</td>
                                                            <td class="col-auto">{{ $lab->uf }}</td>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="{{ mix('js/sweetalert.min.js') }}"></script>
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