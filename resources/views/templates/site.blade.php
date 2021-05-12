<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Provita - Armazém de dados</title>
		<meta name="description" content="A Provita facilita você a se conectar e ter acesso a todos os seus documentos na área da saúde">
		<meta name="autor" content="matheus-souza">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="{{ asset('site/img/favicon.png') }}">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head> 
@yield('content')

<script async src="{{ asset('js/app.js') }}"></script>
<script async src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
	(function () {
    'use strict'
    
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
    
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
    })()
</script>
@error('erro')
    <script>
        Swal.fire({
            title: 'Erro',
            text: '{{ session('errors')->first('erro') }}',
            icon: 'error',
        });
    </script>
@enderror
@if(session()->has('success'))
	<script>
		Swal.fire({
			title: 'Tudo OK !!',
			text: '{{ session()->get('success') }}',
			icon: 'success',
		});
	</script>
@endif
<script defer>
	 $(document).ready(function(){
        $('#doc').mask('000.000.000-00');
		    $('#born').mask('00/00/0000');
    });
</script>

</html>