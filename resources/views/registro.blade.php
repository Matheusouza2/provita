@extends('templates.site')
@section('content')
<body class="login-provita">
    <div class="row justify-content-center align-items-center">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h3>Publicidade.</h3>
                    <!--<img class="d-block" src="{{ asset('site/img/logo.svg') }}" width="700px" height="150px" alt="First slide"> -->
                </div>
                <div class="carousel-item">
                    <h3>Publicidade..</h3>
                </div>
                <div class="carousel-item">
                    <h3>Publicidade...</h3>
                </div>
            </div>
        </div>
    </div>
    <a href="/" class="logo-login"><img class="logo-img" src="{{asset('site/img/logo.svg')}}" alt="logo-provita" style="justify-content: center;"></a>
    <p class="subtitulo">
        A Provita facilita você a se conectar e ter acesso a todos 
        os seus documentos na área da saúde
    </p>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-8 col-md-12 col-sm-12 order-xl-1">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="post" class="needs-validation" novalidate>
                            @csrf
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="form-control-label" for="nome">Nome</label>
                                        <input type="text" value="{{ old('nome') }}" id="nome" name="nome" class="form-control" placeholder="Nome completo" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>
                            
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="doc">CPF</label>
                                        <input type="text" value="{{ old('cpf') }}" id="doc" name="cpf" class="form-control" placeholder="CPF" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                        @error('cpf')
                                            <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="rg">RG</label>
                                        <input type="text" value="{{ old('rg') }}" id="rg" name="rg" class="form-control" placeholder="Digite o numero do seu RG" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="born">Data de nascimento</label>
                                        <input type="text" value="{{ old('nascimento') }}" id="born" name="nascimento" class="form-control" placeholder="Data de Nascimento" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                        @error('nascimento')
                                            <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">E-mail</label>
                                        <input type="text" value="{{ old('email') }}" id="email" name="email" class="form-control" placeholder="Email" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                        @error('email')
                                            <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="sexo">Sexo</label>
                                        <select name="sexo" class="form-control" id="sexo" required>
                                            <option value="">Selecione</option>
                                            <option value="h">Homem</option>
                                            <option value="m">Mulher</option>
                                            <option value="i">Prefiro não dizer</option>
                                        </select>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="diabetes">Diabetes</label>
                                        <select name="diabetico" class="form-control" id="diabetes" required>
                                            <option value="">Selecione</option>
                                            <option value="1">Possuo</option>
                                            <option value="0">Não possuo</option>
                                        </select>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="hipertensao">Hipertensão</label>
                                        <select name="hipertensao" class="form-control" id="hipertensao" required>
                                            <option value="">Selecione</option>
                                            <option value="1">Possuo</option>
                                            <option value="0">Não possuo</option>
                                        </select>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <hr>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="cep">CEP</label>
                                        <input type="text" value="{{ old('cep') }}" id="cep" name="cep" class="form-control" placeholder="CEP" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="logradouro">Logradouro</label>
                                        <input type="text" value="{{ old('logradouro') }}" id="logradouro" name="logradouro" class="form-control" placeholder="Logradouro" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="numero">Numero</label>
                                        <input type="text" value="{{ old('numero') }}" id="numero" name="numero" class="form-control" placeholder="Nº" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="bairro">Bairro</label>
                                        <input type="text" value="{{ old('bairro') }}" id="bairro" name="bairro" class="form-control" placeholder="Bairro" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="cidade">Cidade</label>
                                        <input type="text" value="{{ old('cidade') }}" id="cidade" name="cidade" class="form-control" placeholder="Cidade" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="uf">UF</label>
                                        <input type="text" value="{{ old('uf') }}" id="uf" name="uf" class="form-control" placeholder="UF" required>
                                        <div class="invalid-feedback">Campo de preenchimento obrigatório</div>
                                    </div>
                                </div>
                                <div class="col-12"><hr></div>
                                <div class="col-sm-12 col-md-12 col-lg-5">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pwd">Senha</label>
                                        <input type="password" value="{{ old('senha') }}" id="pwd" name="password" class="form-control" placeholder="Senha" required>
                                        @error('password')
                                            <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div> 
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <label class="checkbox">
                                        <input type="checkbox" required/>
                                        <svg viewBox="0 0 21 18">
                                            <symbol id="tick-path" viewBox="0 0 21 18" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.22003 7.26C5.72003 7.76 7.57 9.7 8.67 11.45C12.2 6.05 15.65 3.5 19.19 1.69" fill="none" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" />
                                            </symbol>
                                            <defs>
                                                <mask id="tick">
                                                    <use class="tick mask" href="#tick-path" />
                                                </mask>
                                            </defs>
                                            <use class="tick" href="#tick-path" stroke="currentColor" />
                                            <path fill="white" mask="url(#tick)" d="M18 9C18 10.4464 17.9036 11.8929 17.7589 13.1464C17.5179 15.6054 15.6054 17.5179 13.1625 17.7589C11.8929 17.9036 10.4464 18 9 18C7.55357 18 6.10714 17.9036 4.85357 17.7589C2.39464 17.5179 0.498214 15.6054 0.241071 13.1464C0.0964286 11.8929 0 10.4464 0 9C0 7.55357 0.0964286 6.10714 0.241071 4.8375C0.498214 2.39464 2.39464 0.482143 4.85357 0.241071C6.10714 0.0964286 7.55357 0 9 0C10.4464 0 11.8929 0.0964286 13.1625 0.241071C15.6054 0.482143 17.5179 2.39464 17.7589 4.8375C17.9036 6.10714 18 7.55357 18 9Z" />
                                        </svg>
                                        <svg class="lines" viewBox="0 0 11 11">
                                            <path d="M5.88086 5.89441L9.53504 4.26746" />
                                            <path d="M5.5274 8.78838L9.45391 9.55161" />
                                            <path d="M3.49371 4.22065L5.55387 0.79198" />
                                        </svg>
                                    </label>
                                    <span style="float:left; margin: -1.65em 0em 0em 1.8em; min-width:70vw;">Declaro que li e aceito os <a href="javascript:void(0)" data-toggle="modal" data-target="#termos" style="display: inline-block">Termos de uso.</a></span>
                                </div> 
                            </div>
                            <br>
                            <div class="row justify-content-center align-items-center">
                                <button type="submit" class="btn-acesso text-white">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Start Modal Exames-->
<div class="modal fade text-left" id="termos" aria-labelledby="myModalLabel160" style="display: none" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-color">
                <h4 class="modal-title white">
                    Termos de Uso
                </h4>
                <div class="text-right">
                    <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-danger btn-sm"><i class="fal fa-times"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <small>O presente Termos de Uso e demais documentos nela referenciados, tem como principais valores a transparência e a proteção à privacidade dos seus usuários e é destinada ao esclarecimento sobre a coleta, tratamento e o compartilhamento dos dados pessoais dos usuários da PROVTA e de terceiros que acessem o site PROVITA.COM.BR Todas as informações fornecidas pelos usuários em seu cadastro e coletadas durante o seu acesso e utilização do site serão de uso exclusivo da PROVITA, sendo incorporadas à sua base de dados para operacionalizar a prestação de seus serviços, ou seja, upload, download, armazenamento, envio e recebimento, nada mais. O presente Termos de Uso está de acordo com a legislação relativa à privacidade e proteção de dados pessoais no Brasil, tais como as leis e normas setoriais, Lei no 12.965/2014 e o Decreto no 8771/16, que é aplicável independentemente da localização que os usuários se encontrarem. Ao se registrar em PROVITA, o usuário deve concordar o presente Termos de Uso pelo qual consente de forma livre, expressa e informada para a coleta, tratamento e compartilhamento dos seus dados nos termos abaixo. Com relação aos usuários que apenas utilizem o site da PROVITA o seu consentimento decorre da mera utilização e do acesso ao site, pelo qual também autorizam a coleta, tratamento e compartilhamento de dados nos termos abaixo.</small>
                <h4>1. Dos dados pessoais coletados:</h4>
                    <small>1.1 - As informações pessoais são fornecidas pelo usuário no momento do seu cadastro para o uso do site da PROVITA;</small>
                <br>
                    <small>1.2 - Poderá haver a coleta automatizada de informações quando do acesso do usuário ao site da PROVITA, através de ferramentas como cookies que é um pequeno texto enviado ao navegador do usuário;</small>
                <br>
                    <small>1.3 - O usuário poderá configurar o seu navegador para que recuse os cookies e outras ferramentas de coleta automatizada de dados. No entanto, alguns recursos ou serviços disponíveis no site da PROVITA não funcionaram adequadamente sem tais ferramentas;</small>
                <br>
                <h4>2. Dos demais dados coletados:</h4>
                    <small>2.1 - Arquivos, incluindo sub-arquivos, que sejam informados pelos solicitantes das informações de delegação para fins de diagnósticos de problemas, elaboração de análises estatísticas, análises de segurança e combate a fraudes, além de atividades de pesquisa científica e tecnológica.</small>
                <br>
                    2.2 - Dados de tráfego do site para atividades de diagnóstico de problemas, elaboração de análises estatísticas ou de segurança, decorrentes da prestação de serviço de upload, download, armazenamento, envio e recebimento de arquivos.</small>
                <br>
                <h4>3. Do tratamento dos dados:</h4>
                    <small>3.1 - Os dados coletados servem para o diagnóstico de problemas, elaboração de análises estatísticas, de segurança e combate à fraudes com a finalidade de garantir e melhorar as atividades de upload, download, armazenamento, envio e recebimento de arquivos;</small>
                    <br>
                    <small>3.2 - Os dados coletados através de cookies são utilizados para fins de:</small>
                    <br>
                    <small>3.2.1 - Autenticação de um usuário no site da PROVITA, em particular para identificá-lo em futuros acessos (logins);</small>
                    <br>
                    <small>3.2.2 - Evitar a utilização fraudulenta de credenciais e proteger os dados do usuário de terceiros não autorizados;</small>
                    <br>
                    <small>3.3 - Os dados das características do navegador dos usuários servem para garantir a sua compatibilidade com o site da PROVITA e, assim, o uso de todas as suas funcionalidades;</small>
                    <br>
                <h4>4. Do Compartilhamento dos Dados:</h4>
                    <small>4.1 - Os dados coletados não serão, em hipótese alguma, compartilhados com terceiros para fins comerciais e publicitários;</small>
                    <br>
                    <small>4.2 - Os dados coletados poderão ser compartilhados com terceiros para que haja uma melhor performance na resolução e a operação do sistema. Nesses casos, os dados compartilhados não identificarão diretamente um usuário;</small>
                    <br>
                <h4>5. Do armazenamento e padrões de segurança da informação:</h4>
                    <small>5.3 - Como padrão de segurança da informação prescrito na Legislação brasileira (Decreto no 8771/16), o Registro.br mantém controle estrito, com mecanismos de autenticação, sobre o acesso aos dados de seus usuários, inclusive com a criação de inventário para assegurar a individualização do responsável pelo acesso;</small>
                    <br>
                    <small>5.4 - Os dados coletados referidos nas cláusulas 3.1 e 3.2 desta "Política de Privacidade" são armazenados por tempo indeterminado, observando a sua utilidade apenas para a identificação de qualquer problema.</small>
                    <br>
                <h4>6. Da exclusão dos dados:</h4>
                    <small>6.1 - As informações do usuário são mantidas por tempo determinado. Após 90 dias em que uma conta de usuário não tenha mais serviços e/ou é excluída pelo mesmo e não seja acessada, não haverá mais a disponibilização dos dados no Diretório.</small>
                    <br>
                    <small>6.2 - Em observância à legislação aplicável ou cumprimento de ordem judicial, PROVITA poderá manter determinados dados dos usuários por um período não inferior a 6 (seis) meses, mesmo após o seu pedido de exclusão.</small>
                    <br>
                    7. Disposições Gerais:
                    <small>7.1 - Os "Termos de Uso" são parte integrante do presente documento, sendo todos eles aplicados e interpretados conjuntamente;</small>
                    <br>
                    <small>7.2 - A PROVITA reserva-se o direito de alterar este presente Termos de Uso para adaptá-la à legislação aplicável ou às melhores práticas de Segurança, cujo texto será disponibilizado no site da PROVITA;</small>
                    <br>
                    <small>7.3 - Caso o usuário não concorde com o teor desta política, ele não deverá utilizar os serviços e o site da PROVITA.</small>
                    <br>
                <h4>8. Alterações às Declarações do Termo de Uso PROVITA:</h4>
                    <small>8.1 A PROVITA poderá atualizar periodicamente o presente Termos de Uso para refletir as alterações nas suas práticas de governação de dados. Se a Provita efetuar alterações, a nova versão será disponibilizada com uma nova data do início da Politica de Privacidade. Encorajamos os Utilizadores a consultarem a os Termos de Uso periodicamente para verificarem alterações ou atualizações à mesma. Após as alterações o presente Termos de Uso, será publicado um aviso no topo da página no site www.provita.com.br por 30 dias. Se o Utilizador continuar a utilizar o site da Web da PROVITA após as alterações estarem em vigor, a nós consideraremos que o Utilizador leu e compreendeu as alterações.</small>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Exames -->
</html>
@endsection