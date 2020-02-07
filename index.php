<?php
	session_start();
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
		<title>Questionário</title>
		<style>
			body{
                background: #dff0f6;
                font-family: 'Varela Round', sans-serif;
            }
            .corpo{
                color: #434343;
                border-radius: 1px;
                background: #fff;
                border: 1px solid #f3f3f3;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
                width: 400px;
                margin: 0 auto;
            }
            .botao{
                margin: 0 auto;
                overflow: hidden;
                padding: 10px 0;
                align-items: center;
                justify-content: center;
                display: flex;
                float: none;
            }
            #botao{
                width: 330px;
            }
            .display-4{
                font-size: 25px;
                text-align: center;
            }
            .form-control{
                box-shadow: none;
                border-color: #ddd;
            }
            .form-control:focus{
                border-color: #4aba70;
            }
            .login-form{
                width: 330px;                
                padding: 30px 0;
            }
            .login-form form{
                color: #434343;
                border-radius: 1px;
                margin-bottom: 15px;
                background: #fff;
                border: 1px solid #f3f3f3;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h4{
                text-align: center;
                font-size: 22px;
            }
            .login-form .form-group{
                margin-bottom: 20px;
            }
            .login-form .form-control, .login-form .btn {
                min-height: 40px;
                border-radius: 2px;
                transition: all 0.5s;
            }
            .cabecalho{
                color: #434343;
                border-radius: 1px;
                margin-bottom: 15px;
                background: #fff;
                border: 1px solid #f3f3f3;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 20px;
            }
		</style>
	</head>
	
	<body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		<form method = "POST" action = "tratamentologin.php">
            <br>
            <div class="cabecalho">
                <h1 class="display-4">PESQUISA COM EGRESSOS - UFV</h1>
            </div><br>
			
			<?php
                if (isset ($_SESSION['msg'])){
    				echo $_SESSION['msg'];
    				unset ($_SESSION['msg']);
				}	
    		?>
    			
            <div class = "corpo">                 
                <div class = "login-form"> 
                    <h4 class="modal-title">Entre com seu CPF e modalidade</h4><br><br>
                        
                    <div class="form-group">
                        <input type = "number" min="1" name = "cpf" placeholder = "Digite apenas os numeros do seu CPF" id = "number" class = "form-control" required = "required">
                    </div>

                    <div class="form-group">
                        <select class= "form-control" name = "curso" id = "curso" required>
                            <option value="">Escolha a modalidade</option>
                            <option value = "Tecnico">Técnico</option> 
                            <option value = "Superior">Superior</option> 
                            <option value = "Administrador">Administrador</option>
                        </select>
                    </div>                   
                    
                </div>
                
                <div class = "botao">
                    <input id = "botao" type = "submit" class= "btn btn-primary" name = "entrar" value = "Entrar"/>
                </div>   
            </div>
            
    	</form>
        
        <script src= "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity= "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin= "anonymous" ></script> 
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity= "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin= "anonymous" ></script> 
        <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity= "sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin= "anonymous" ></script>
        
	</body>
</html>