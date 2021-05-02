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
                        <div class="wrap-input100 validate-input" data-validate = "Digite um e-mail: ex@abc.xyz">
                            <input id="e-mail" class="input100" type="text" name="E-mail" placeholder="Digite o seu e-mail">
                            <span class="focus-input100"></span>
                        </div>

                        <label class="label-input100" for="Telefone">Seu telefone </label>
                        <div class="wrap-input100">
                            <input id="Telefone" class="input100" type="text" name="Telefone" placeholder="(xx) Número do telefone">
                            <span class="focus-input100"></span>
                        </div>

                        <label class="label-input100" for="Mensagem">Sua mensagem *</label>
                        <div class="wrap-input100 validate-input" data-validate = "Digite uma mensagem">
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
                                Rua Beatriz, 132 - Vila Madalena - São Paulo - CEP: 05445-040
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
                                (11) 94730-3098 / (11) 2614-2775
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
                                contato@provita.com.br
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
                                Provita – Tecnologia<br>
                                CNPJ: 27.376.991/0001-68
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	<div id="dropDownSelect1"></div>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
    </script>
    <script src="./js/simple-form.js"></script>
    <script src="./js/script.js"></script>

</body>
@endsection