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
                <h3>Publicidades Cadastradas</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Publicidades</h4>
                                        <div class="text-right">
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#publicidadeCad" class="btn btn-sm btn-outline-info">Nova Publicidade</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                       <div class="table-responsive">
                                           <table class="table table-hover table-md">
                                                <thead>
                                                    <tr>
                                                        <th>Descrição</th>
                                                        <th>Data de postagem</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach ($pubs as $pub)
                                                       <tr>
                                                           <td>{{ $pub->descricao }}</td>
                                                           <td>{{ $pub->created_at }}</td>
                                                           <td><a href="{{ route('deletePub', [$pub->id]) }}" class="text-danger" title="Excluir Publicidade"><i class="fas fa-trash"></i></a></td>
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
    <!-- Start Modal Laboratorio -->
<div class="modal fade text-left" id="publicidadeCad" tabindex="-1" aria-labelledby="myModalLabel160" style="display: none" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-color">
                <h5 class="modal-title white" id="myModalLabel160">
                    Cadastrar Laboratório
                </h5>
            </div>
            <div class="modal-body">
                <form action="{{route('cadPub')}}" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="row">
                        <div class="form-group mb-3 col-lg-12">
                            <label class="form-control-label" for="customFile">Imagem</label>
                            <div class="custom-file">
                                <input type="file" accept="image/png, image/jpeg, image/svg" class="custom-file-input" name="publicidade" id="customFile" required>
                                <label class="custom-file-label" for="customFile">Procurar Publicidade</label>
                                <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                            </div>
                        </div>
                        <div>
                            <span class="text-muted" id="archives"></span>
                        </div>
                        <div class="form-group mb-3 col-sm-12 col-md-12 col-lg-12">
                            <label for="descricao">Descrição</label>
                            <input type="text" name="descricao" id="descricao" class="form-control">
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                            <span class="d-sm-block">Cancelar</span>
                        </button>
                        <button type="submit" class="btn btn-light-success ml-1" id="btn-cad-lab">
                            <span class="d-sm-block">Cadastrar</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Laboratorio -->
    @stop

    @section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @endsection