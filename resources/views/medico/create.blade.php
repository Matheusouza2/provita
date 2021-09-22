@extends('templates.head')

@section('content')
<div id="app">
    @include('templates.menuadmin')
    
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="fal fa-align-right fa-2x"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Cadastrar Novo Médico</h3>
        </div>

        <div class="page-content">
            <section class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('medicoStore') }}" method="POST">
                                @csrf
                                <input type="hidden" name="customFile" id="customFile">
                                <div class="row align-items-center">

                                    <div class="col-lg-2 col-md-6 col-sm-12 form-group">
                                        <label for="especialidade" class="form-control-label">UF do CRM</label>
                                        <input type="text" class="form-control" name="uf_crm" id="uf_crm">
                                    </div>

                                    <div class="col-lg-2 col-md-4 col-sm-12 form-group">
                                        <label class="form-control-label" for="crm">CRM</label>
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <input class="form-control" name="crm" id="crm" required>
                                            <button type="button" onclick="buscaCrm()" class="btn btn-primary"><i class="fal fa-search"></i></button>
                                            <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                        <label for="especializacao" class="form-control-label">Especializacao</label>
                                        <input type="text" class="form-control" name="especializacao" id="especializacao">
                                    </div>

                                    <div class="col-lg-6 col-md-4 col-sm-12 form-group">
                                        <label class="form-control-label" for="nome">Nome</label>
                                        <input type="text" name="nome" id="nome" class="form-control">
                                    </div>

                                    <div class="col-lg-2 col-md-4 col-sm-12 form-group">
                                        <label class="form-control-label" for="cep">CEP</label>
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <input class="form-control" name="cep" id="cep" required>
                                            <a href="javascript:void(0)" class="btn btn-primary"><i class="fal fa-search"></i></a>
                                            <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                                        <label class="form-control-label" for="logradouro">Logradouro</label>
                                        <input type="text" name="logradouro" id="logradouro" class="form-control">
                                    </div>

                                    <div class="col-lg-2 col-md-4 col-sm-12 form-group">
                                        <label class="form-control-label" for="numero">Numero</label>
                                        <input type="text" name="numero" id="numero" class="form-control">
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                                        <label class="form-control-label" for="bairro">Bairro</label>
                                        <input type="text" name="bairro" id="bairro" class="form-control">
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                                        <label class="form-control-label" for="cidade">Cidade</label>
                                        <input type="text" name="cidade" id="cidade" class="form-control">
                                    </div>

                                    <div class="col-lg-1 col-md-4 col-sm-12 form-group">
                                        <label class="form-control-label" for="uf">UF</label>
                                        <input type="text" name="uf" id="uf" class="form-control">
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                                        <label class="form-control-label" for="contato">Telefone</label>
                                        <input type="text" name="contato" id="contato" class="form-control">
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                        <label for="senha" class="form-control-lavel">Senha de Acesso</label>
                                        <input type="text" name="password" id="senha" class="form-control" readonly>
                                        <span class="text-danger">Anote a senha e repasse para o responsavel pela farmácia, a mesma não poderá ser vista depois do cadastro.</span>
                                    </div>

                                </div>
                                <div class="row mt-4">
                                    <button type="submit" id="#btn-cad-lab" class="btn btn-sm btn-success">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@stop

@section('script')
<script>
    var randomstring = Math.random().toString(36).slice(-8);
    $('#senha').val(randomstring);
    function buscaCrm(){
        var crm = $('#crm').val();
        var uf = $('#uf_crm').val();
        $.getJSON("https://www.consultacrm.com.br/api/index.php?tipo=crm&uf="+uf+"&q="+crm+"&chave=8355247303&destino=json", function(dados){
            if (dados.item.length != 0) {
                //Atualiza os campos com os valores da consulta.
                $("#nome").val(dados.item[0].nome);
                $("#especializacao").val(dados.item[0].profissao);
            }
            else {
                Swal.fire('Erro ao identificar o CRM', 'CRM não encontrado para o estado informado !', 'error')
            }
        });
        
    }
</script>
@endsection