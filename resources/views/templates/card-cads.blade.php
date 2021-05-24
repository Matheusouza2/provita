<!-- Start Modal Laboratorio -->
<div class="modal fade text-left" id="laboratorioCad" tabindex="-1" aria-labelledby="myModalLabel160" style="display: none" aria-modal="true" role="dialog">
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
                    <div class="row">
                        <div class="form-group mb-3 col-sm-8 col-md-8 col-lg-8">
                            <label class="form-control-label" for="cnpj">CNPJ</label>
                            <div class="input-group input-group-merge input-group-alternative">
                            <input class="form-control" name="cnpj" id="cnpj" required>
                            <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 mt-4">
                            <a href="javascript:void(0)" class="btn btn-primary"><i class="fal fa-search"></i></a>
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

                    <div class="text-right" id="buttons-modal-cad" style="visibility: hidden;">
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
<!-- Start Modal Exames-->
<div class="modal fade text-left" id="primary" aria-labelledby="myModalLabel160" style="display: none" aria-modal="true" role="dialog">
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
                    <div class="row align-itens-center">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label class="form-control-label" for="paciente">Paciente</label>
                                <div class="input-group">
                                <select class="form-control" name="paciente" id="paciente" required></select>
                                <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 col-lg-12">
                            <label class="form-control-label" for="lab">Laboratório</label>
                            <div class="input-group">
                            <select class="form-control" name="laboratorio" id="laboratorio" required></select>
                            <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                            </div>
                        </div>
                        <div class="form-group mb-3 col-lg-12">
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
                        
                        <div class="form-group mb-3 col-lg-12">
                            <label class="form-control-label" for="nome">Nome</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nome" name="apelido" placeholder="Dê uma breve descrição ao exame" required>
                                <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn btn-light-secondary ml-4" data-dismiss="modal">
                                <span class="d-sm-block">Cancelar</span>
                            </button>
                            <button type="submit" class="btn btn-light-success ml-1">
                                <span class="d-sm-block">Enviar</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Exames -->

<div class="card">
    <div class="card-body py-6 px-5">
        <div class="d-flex align-items-center">
            <div class="ms-3 name">
                <h5 class="font-bold">{{ Auth::user()->nome }}</h5>
            </div>
            <div class="col-lg-6">
              <a href="javascript:void(0)" class="btn font-bold btn-light-primary btn-sm" data-toggle="modal" data-target="#laboratorioCad">Cadastrar Laboratório</a>
              <a href="javascript:void(0)" class="btn font-bold btn-light-info btn-sm mt-3" data-toggle="modal" data-target="#primary">Enviar Exame</a>
            </div>
        </div>
    </div>
</div>