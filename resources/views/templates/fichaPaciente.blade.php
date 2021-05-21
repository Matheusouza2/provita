<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Ficha do Paciente</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Nunito);
        @charset "UTF-8";
        :root{
            --font-family-sans-serif: "Nunito", sans-serif;
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }
        body{
            font-family: "Nunito", sans-serif;
            -webkit-print-color-adjust: exact !important; 
            color-adjust: exact !important; 
            background-color: #e2e2e2  !important;
        }
        small{
            font-weight: lighter;
            font-size: 1em;
        }
        .card{
            background: #fff;
            width: auto;
            height: auto;
        }
        .card-header{
            width:765px;
            height:auto;
            background-color:#a966ac;
            color: #fff;
            border-radius: 10px;
            padding-top: 0.2em;
            padding-left: 1em;
            }
        .card-body{
            width:765px;
            height: auto;
            padding-left: 1em;
            padding-top: 0.2em;
            padding-bottom: 0.2em;
            background-color:#cecece;
            color: #000;
            border-radius: 10px;
            margin-top: 1em;
        }
        .img-header{
            width: 150px;
            position: fixed;
            left:80%;
            top: 2%;
        }
        .footer{    
            position:absolute;
            bottom:0; 
            width:765px;
        }
        @page{
            size: auto;
            margin: 0mm;
            }
    </style>
</head>
<body>
    @php
        $data = new DateTime($user->nascimento);
        $resultado = $data->diff( new DateTime( date('Y-m-d') ) );       
        function mascara($mask, $str){
            $str = str_replace(" ","",$str);
            for($i=0;$i<strlen($str);$i++){
                $mask[strpos($mask,"#")] = $str[$i];
            }
            return $mask;
        }
        $user->cpf = mascara('###.###.###-##', $user->cpf);
        $user->cep = mascara('#####-###', $user->cep);
    @endphp
        <div class="">
            <div class="card">
                <div class="card-header">
                    <div class="">
                        <div class="">
                            <h4> Paciente: <small>{{ $user->nome}}</small></h4>
                        </div>
                        <div class="">
                            <h4>CPF: <small>{{ $user->cpf }}</small></h4>
                        </div>
                        <div style="padding-bottom: 0.2em;">
                            <h4>Data de Nascimento: <small>{{date( 'd/m/Y' , strtotime($user->nascimento))}}</small> <strong style="margin-left: 10em;">Idade:</strong> <small>{{$resultado->format( '%Y anos' )}}</small></h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h3 class="">Endereço</h3>
                    <h4 class="">CEP: <small>{{ $user->cep }}</small></h4>
                    <h4 class="">Logradouro: <small>{{ $user->logradouro }}</small>  <strong style="margin-left: 7em;">Numero: </strong> <small>{{ $user->numero }}</small></h4>
                    <h4 class="">Bairro: <small>{{ $user->bairro }}</small>  <strong style="margin-left: 10em;">Cidade: </strong> <small>{{ $user->cidade }}</small> <strong style="margin-left: 10em;">UF: </strong> <small>{{ $user->uf }}</small></h4>
                    <hr style="width: 740px; margin-right: 10em;">
                    <h3 class="">Informações Médicas</h3>
                    <h4 class="">Diabético: <small>{{ $user->diabetico==0?'Não':'Sim' }}</small>  <strong style="margin-left: 10em;">Hipertenso: </strong> <small>{{ $user->hipertensao==0?'Não':'Sim' }}</small></h4>
                </div>
            </div>
        </div>
        <div class="footer">
            <small style="font-size: 0.8em;">Documento emitido através do www.provita.com.br</small>
        </div>
</body>
</html>