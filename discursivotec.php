<?php
    session_start();

    $cpf = $_SESSION['cpf'];
    $curso = $_SESSION['curso'];

    if ($curso == 'Administrador'){
        $valor = isset($_SESSION['cpf']) ? 's' : 'n';

        if ($valor == 'n'){
            header("Location: index.php");
        }
    }else{
       header("Location: index.php"); 
    } 

    include 'acessobancotec.php';

    $consulta = sprintf("SELECT questao, id_perguntas FROM `pergunta` WHERE id_perguntas not in (SELECT pergunta.id_perguntas FROM pergunta NATURAL JOIN pergunta_has_alternativa UNION SELECT pergunta.id_perguntas FROM pergunta NATURAL JOIN subpergunta_has_pergunta NATURAL JOIN subpergunta NATURAL JOIN subpergunta_has_alternativa)");
    $dados = mysqli_query($conn, $consulta);// transforma os dados em um array
    $linha = mysqli_fetch_assoc($dados);// calcula quantos dados retornaram
    $total = mysqli_num_rows($dados);
?>

<script language = javascript type = "text/javascript">          
    function voltar(){
        window.location.assign ("selecaoopcaotec.php");
    }
</script>

<!DOCTYPE HTML>
<html lang="pt-br">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    
    <title>Questionario</title>
    
	<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">        
        <link rel = "stylesheet" href = "estilo.css">
        
		<style>	
            #botao{
                width:200;
                height:40;
            } 
            .questao{
                color: black;
                font-family: arial;
                font-size: 17px;
                font-weight: bolder;
            }
		</style>
	</head>	
	<body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<form method = "POST" action = "discursivotecnico.php"><br>
			<div class = "corpo">
                <div class = "card text-center">
                    <div class = "card-header"> 
                        <br><h1>Selecione as questões para visualizar as repostas</h1><br>
                    </div> 	
        
                    <div class= "card-body">
                        <br><br>
                        <?php
                            if($total > 0) {// inicia o loop que vai mostrar todos os dados
                                do {
                        ?>
                        <div class= "form-check">
                            <input id = "questao" class= "form-check-input" type = "checkbox" name = "questao[]" value = "<?=$linha['id_perguntas']?>"/><?=$linha['questao']?><br>
                        </div>
                        <?php
                                // finaliza o loop que vai mostrar os dados
                                }while($linha = mysqli_fetch_assoc($dados));
                            }
                        ?>
                    </div>
                    
                    <br><div class = "botao">
                        <input id = "botao" type = "button" class= "btn btn-primary" value = "Voltar" onClick = "voltar();"/>
                        <input id = "botao" type = "submit" class= "btn btn-primary" name = "constuir" value = "Ver respostas"/>
                    </div><br>
                    
                    <div class= "card-footer">  </div>
                    
                </div>    
            </div>
		</form>        
	</body>
</html>