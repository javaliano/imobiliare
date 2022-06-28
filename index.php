<?php
include('php/conexao.inc.php');

if(isset($_POST['usernamecliente']) || isset($_POST['passwordcliente'])) {

    if(strlen($_POST['usernamecliente']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['passwordcliente']) == 0) {
        echo "Preencha sua senha";
    } else {

        $usernamecliente = $conn->real_escape_string($_POST['usernamecliente']);
        $passwordcliente = $conn->real_escape_string($_POST['passwordcliente']);

        $sql_code = "SELECT * FROM cliente WHERE usernamecliente = '$usernamecliente' AND passwordcliente = '$passwordcliente'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            //$_SESSION['idadmin'] = $usuario['idadmin'];
            $_SESSION['usernamecliente'] = $usuario['usernamecliente'];

            header("Location: php/painel.php");

        } else {
          

            
            echo "<p>Falha ao logar! E-mail ou senha incorretos 
            <script>
            window.alert('Nome de usuário e/ou senha inválidos')
            </script>;
                 </p>";
        }

    }



}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/imobiliare-compilados/style.css">

<style>
@import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Berkshire+Swash&family=Days+One&family=Fira+Sans&family=Oswald&family=Share+Tech+Mono&family=Source+Serif+Pro&family=Ubuntu&display=swap');
</style> 
    <title>Imobiliare Login</title>
</head>
<body>
    <script src="node_modules/bootstrap/js/bootstrap.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>


<div class="flex-box container-box">
  <div class="content-box" id="body-form">
    
   <h1 class="title">Imobiliare</h1> <br>
    <br>
   <br>
  
<br><br>
 
<div id="div-form-index">


<form action="" method="POST" class="form-index">
    <fieldset class="fieldset-index">
        <legend>  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> Login</legend><br><br>
    <label><input type="text" required="required" name="usernamecliente" placeholder="usuário"></label>
    <label> <input type="password" required="required" name="passwordcliente" placeholder="senha"></label><br><br>
    
    <button type="submit" name="entrar" class="btnindex"><strong>acessar</strong></button><br><br><br>
    <a href="php/cadastrar-cliente.php" class="acad"><strong>Não possui cadastro? Cadastre-se</strong></a>

    </fieldset>
    
</form>
</div></div></div>
</body>
</html>