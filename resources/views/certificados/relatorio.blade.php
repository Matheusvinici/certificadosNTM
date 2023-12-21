<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="refresh" content="5">
	<title>CERTIFICADO</title>
	<link rel="stylesheet" type="text/css" href="css/style-cert.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style-cert-print.css" media="print">
    <script src="js/jquery-2.1.1.js"></script>
	
	
</head>

<style>
	.titulo{

		font-size: 50px;
	}
	.texto{
		font-size: 20px;
	}
</style>
<body>

	  
<div style="position: fixed; left: 0px; top: 0px; right: 0px; bottom: 0px; text-align: center;z-index: -5000;">
	<img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path("/images/certificadoAtualizado.png"))) }}" style="width: 1050px;  margin-bottom: 50%; margin-top: -2%; padding: -1000px;">
  </div>
  

		<div class="conc-cert">
		<br><br>
		<h2 align="center">
			<br>
		</h2>
		<h3 align="center">
			<br>
		</h3>
		<br>



		<h1 align="center" class="titulo">
			CERTIFICADO
		</h1>
		<br>
		
			<p class="text-cert texto">
				Certifico que 
			<b>{{ $user->name }}</b>, participou do curso <b>{{ $curso->nome }}</b>
			como <b>{{ $curso->tipo }}</b> no período de <b>{{ date('d/m/Y', strtotime($curso->periodo_inicial)) }}</b> a 
			<b>{{ date('d/m/Y', strtotime($curso->data_conclusao))  }}</b>,
			com Carga Horária de  <b>{{ $curso->carga_horaria }}.</b>  
			</p>
		</div>	
			<br>
			
			
			<div class="sz-asdg">
				<p><center>Juazeiro-BA, {{ date('d/m/Y', strtotime($curso->data_conclusao)) }}</center></p>
				</div>
				<br><br>
			<div class="sz-asdg">
				<p><i><center>Assinado de forma digital por: {{ $nome_responsavel }}, {{ date('d/m/Y', strtotime($curso->data_conclusao)) }}  </center></i>
				<i><center>Instituido pela Lei - Nº: 2.218/2011, CNPJ: 45.941.478/0001-54 </center></i></p>
			</div>
			<br>
</body>
<body>
	
	<div class="conc-cert">
		<br>
		<br>
		<br>
		<br>
		<br>


		<h1 align="center">
			CONTEÚDOS
		</h1>
		
		
			<p class="text-cert">
			<b>-> {{ $curso->conteudo_1 }}</b> 
			<br>
			<br>
			@if(isset($curso->conteudo_2))

			<b>-> {{ $curso->conteudo_2 }}</b> 

			@endisset
			<br>
			<br>
			@if(isset($curso->conteudo_3))

			<b>-> {{ $curso->conteudo_3 }}</b> 
			@endisset

			<br>
			<br>
			@if(isset($curso->conteudo_4))

			<b>-> {{ $curso->conteudo_4 }}</b> 
			<br>
			<br>
			@endisset
			@if(isset($curso->conteudo_5))

			<b>-> {{ $curso->conteudo_5 }}</b> 
			<br>
			<br>
			@endisset
			@if(isset($curso->conteudo_6))

			<b>-> {{ $curso->conteudo_6 }}</b> 
			<br>
			<br>
			@endisset
			@if(isset($curso->conteudo_7))

			<b>-> {{ $curso->conteudo_7 }}</b> 
			<br>
			<br>
			@endisset
			@if(isset($curso->conteudo_8))

			<b>-> {{ $curso->conteudo_8 }}</b> 
			<br>
			<br>
			@endisset
			@if(isset($curso->conteudo_9))

			<b>-> {{ $curso->conteudo_9 }}</b> 
			<br>
			<br>
			@endisset
			@if(isset($curso->conteudo_10))

			<b>-> {{ $curso->conteudo_10 }}</b> 
			@endisset
			
			
		</div>	
			
		<div style="position: fixed; left: 0px; top: 0px; right: 0px; bottom: 0px; text-align: center;z-index: -5000;">
			<img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path("/images/assinatura2.png"))) }}" style="width: 400px;  margin-bottom: 50%; margin-top: -2%; padding: 550px;">
		  </div>

			</div>
			<br>


</body>
</html>