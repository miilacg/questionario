<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Petrona&display=swap" rel="stylesheet">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/globals.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/assay.css') }}">

     <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" type="image/png">

    <title>SCADA-E | Resultado</title>     

		<style>
			h1 {				
				margin: auto;
				font-family: 'Exo 2', sans-serif;
				text-align: center;
				font-size: 4.5rem;
				font-weight: 500;
			}

			main {
				display: flex;
				height: calc(100vh - 2.5rem - var(--alturaBars));
				padding: 0;
			}

			footer.bars {
				position: sticky;
				bottom: 0;
				margin-bottom: 2.5rem;
			}
		</style>
  </head>
	<body class="assay">
    <div class="header">
			<div>
				<img id="logo" src="{{ asset('assets/img/logo.svg') }}">
				<div class="text">	</div>
				<img id="triangles" src="{{ asset('assets/img/trianglesHeader.svg') }}">   
			</div>
		 
			<div class="bars">
				<div class="red"></div>
				<div class="yellow"></div>
				<div class="black"></div>
			</div>
		</div>

		<main>     

			<h1> Obrigada! </h1>   
			
		</main> 
		 
		<footer class="bars">          
			<div class="black"></div>
			<div class="yellow"></div>
			<div class="red"></div>
		</footer>      
	</body>
</html>