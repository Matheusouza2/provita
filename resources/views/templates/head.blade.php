<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Provita</title>
		<meta name="description" content="A Provita facilita você a se conectar e ter acesso a todos os seus documentos na área da saúde">
		<meta name="autor" content="matheus-souza">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="{{ asset('site/img/favicon.png') }}">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('adm/css/style.css') }}">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
</head> 
<body>
@yield('content')

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('adm/js/script.js') }}"></script>

@yield('script')
@if(session('icon'))
	<script>
		Swal.fire({
			title: '{{ session()->get('title') }}',
			text: '{{ session()->get('text') }}',
			icon: '{{ session()->get('icon') }}',
		});
	</script>
@endif
</body>
</html>