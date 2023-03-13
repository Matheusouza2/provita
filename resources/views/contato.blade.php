@extends('templates.contato')
@section('content')

    <body>

        <!--header-->
        <header>
            <div class="logo">
                <a href="/"><img class="logo-img" src="{{ asset('site/img/logo-white.svg') }}" alt="logo provita"></a>
            </div>
        </header>

        <div class="container-contact100">
            <div class="wrap-contact100">
                <form id="form-contact"></form>
                <form method="POST" action="enviar-sendgrid.php" class="contact100-form validate-form formphp">
                    <span class="contact100-form-title">
                        Contato
                    </span>
                    <label class="label-input100" for="Nome">Seu nome *</label>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Digite o seu Nome">
                        <input id="Nome" class="input100" type="text" name="Nome" placeholder="Nome">
                        <span class="focus-input100"></span>
                    </div>

                    <label class="label-input100" for="E-mail">Seu e-mail *</label>
                    <div class="wrap-input100 validate-input" data-validate="Digite um e-mail: ex@abc.xyz">
                        <input id="e-mail" class="input100" type="text" name="E-mail"
                            placeholder="Digite o seu e-mail">
                        <span class="focus-input100"></span>
                    </div>

                    <label class="label-input100" for="Telefone">Seu telefone </label>
                    <div class="wrap-input100">
                        <input id="Telefone" class="input100" type="text" name="Telefone"
                            placeholder="(xx) Número do telefone">
                        <span class="focus-input100"></span>
                    </div>

                    <label class="label-input100" for="Mensagem">Sua mensagem *</label>
                    <div class="wrap-input100 validate-input" data-validate="Digite uma mensagem">
                        <textarea id="Mensagem" class="input100" name="Mensagem" placeholder="Digite a sua mensagem"></textarea>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-contact100-form-btn">
                        <button id="enviar" type="submit" class="contact100-form-btn">
                            Enviar mensagem
                        </button>
                    </div>
                </form>
                </form>

                <div class="contact100-more flex-col-c-m">
                    <div class="flex-w size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-map-marker"></span>
                        </div>

                        <div class="flex-col size2">
                            <span class="txt1 p-b-20">
                                Endereço
                            </span>

                            <span class="txt2">
                                AV ITABERABA 534 – SL 04 - NOSSA SENHORA DO O – São Paulo – CEP: 02734-000
                            </span>
                        </div>
                    </div>

                    <div class="dis-flex size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>

                        <div class="flex-col size2">
                            <span class="txt1 p-b-20">
                                Telefone
                            </span>

                            <span class="txt3">
                                (11) 2308-2307
                            </span>
                        </div>
                    </div>

                    <div class="dis-flex size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-envelope"></span>
                        </div>

                        <div class="flex-col size2">
                            <span class="txt1 p-b-20">
                                E-mail
                            </span>

                            <span class="txt3">
                                SAC@PROVITA.COM.BR
                            </span>
                        </div>
                    </div>


                    <div class="dis-flex size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-envelope"></span>
                        </div>

                        <div class="flex-col size2">
                            <span class="txt1 p-b-20">
                                CNPJ
                            </span>

                            <span class="txt3">
                                PROVITA GESTAO DE DADOS E SOLUCOES TECNOLOGICAS LTDA<br>
                                CNPJ: 46.299.754/0001-95
                            </span>
                        </div>
                    </div>
                    <div class="dis-flex size1 p-b-47">
                        <a style="color: white; margin-right: 10px;"
                            href="https://www.facebook.com/Provita-100141064824344/" target="_blank">
                            <i class="fab fa-facebook-square fa-2x"></i>
                        </a>

                        <a style="color: white; margin-right: 10px;"
                            href="https://www.instagram.com/invites/contact/?i=1xd1ixvwx8n9z&utm_content=lzg5lm5"
                            target="_blank">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>

                        <a style="color: white; margin-right: 10px;"
                            href="https://api.whatsapp.com/send?phone=551123082307&text=Olá%20Provita%20pode%20me%20ajudar%20?"
                            target="_blank">
                            <i class="fab fa-whatsapp fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
