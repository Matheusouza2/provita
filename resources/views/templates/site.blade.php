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
		<link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head> 
@yield('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script>
	 $(document).ready(function(){
        $('#doc').mask('000.000.000-00');
		$('#born').mask('00/00/0000');
    });
</script>

</html>