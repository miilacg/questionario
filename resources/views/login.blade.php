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
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

     <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" type="image/png">

    <title>SCADA-E | Login</title>     
  </head>

  <body>
    <div id="background">
      <img id="triangles" src="{{ asset('assets/img/triangulos.png') }}">   
      <img id="brasao" src="{{ asset('assets/img/brasao.svg') }}">
    </div> 

    <form role="form" method="POST" action="{{ route('login.authenticate') }}">
      {{ csrf_field() }}

      <main>
        <img id="logo" src="{{ asset('assets/img/logo.svg') }}" alt="logo scada-e">

        <div class="formulario">                        
          <div class="form-group">
            <label>CPF</label>
            <input id="number" class="form-control" type="number" min="1" name="cpf" placeholder="Digite apenas os números" required>
          </div>

          <div class="form-group">
            <label>Modalidade</label>
            <select id="modality" class="form-control" name="modality" required>
              <option value="">Escolha a modalidade</option>
              <option value="Informática">Técnico em Informática</option> 
              <option value="Ciência da Computação">Ciência da Computação</option> 
              <option value="Administrador">Gerente</option>
            </select>
          </div> 
        </div>                    
        <input id="button" class="btn" type="submit" name="entrar" value="Entrar"/>
      </main>    
    </form>    


    <!-- Mensagens de erro -->
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" type="text/javascript"></script>

    @if(session('error'))
      <script type="text/javascript">
        Swal.fire({
          title: "Acesso negado", 
          text: "{{ session('error') }}",
          icon: 'error',
          buttonsStyling: false, 
        });
      </script>
    @endif

    @if(session('warning'))
      <script type="text/javascript">
        Swal.fire({
          title: "Você já respondeu a pesquisa",
          text: "Deseja responder novamente?",
          icon: 'warning', 
          reverseButtons: true,
          showCancelButton: true,
          cancelButtonText: 'Não',   
          showConfirmButton: true,
          confirmButtonText: 'Sim',
          buttonsStyling: false, 
        }).then((result) => {
          if (result.isConfirmed) {
            <?php if (session('respondidoSup')) { 
              ?> window.location.href = "https://google.com.br"; <?php 
            } else { 
              ?> window.location.href = "https://twitter.com.br"; <?php
            } ?>
          } else {
            window.location.href = "https://globoplay.globo.com"; 
          } 
        })
      </script>
    @endif
    
    @if($errors->any())
      <?php 
          $error_list = "<ul>";

          foreach($errors->all() as $error){
              $error_list .= "<li>".$error.'</li>';
          } 

          $error_list .= "</ul>";
      ?>

      <script type="text/javascript">
          Swal.fire("Erro de validação", "{!! $errors->first() !!}", 'error');
      </script>
    @endif
	</body>
</html>