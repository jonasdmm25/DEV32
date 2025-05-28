<?php

isset


$nome = null;
$sobrenome = null;
$idade=null;
// acontece após clicar no ação
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 $nome = $_POST['txtnome'];
 $sobrenome = $_POST['txtsobrenome'];
 $idade = $_POST['txtidade'];
}

$mensagem = "NOME: $nome $sobrenome<br> IDADE: $idade"; 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>
<body>
    <!-- Formulario usa action para chamar um script php e o método de envio-->
    <form class="formulario" action="formulario.php" method="post"> 
        <br>
    <label>NOME</label>
     <br>
     <input type="text" name="txtnome" placeholder="Insira seu nome" required>
     <br>
     <br>
     <label>SOBRENOME</label>
     <br>
     <input type="text" name="txtsobrenome" placeholder="Insira seu Sobrenome" required>
     <br>
     <br>
     <label>IDADE</label>
     <br>
     <input type="number" name="txtidade" placeholder="Apenas números" disabled required>
     <br>
     <br>

     <!-- Bora pra action -->
      <input type="submit" value="Ação">
    </form>
    <h3><?php echo "$mensagem";?><h3>
    
</body>
</html>