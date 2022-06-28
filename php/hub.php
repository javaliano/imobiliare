<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUB File - Includes</title>
</head>
<body>

    <?php
    require_once  "conexao.inc.php";

    
    require_once  "criar-tabela.inc.php";

    if(isset($_POST['cadastro'])){
        require_once  "cadastrar.inc.php";
        echo "<p> Dados cadastrados com sucesso. </p>";
    }

    ?>
</body>
</html>