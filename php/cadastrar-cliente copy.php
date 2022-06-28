<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imobiliarium - Cadastro de Clientes</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Berkshire+Swash&family=Days+One&family=Fira+Sans&family=Oswald&family=Share+Tech+Mono&family=Source+Serif+Pro&family=Ubuntu&display=swap');
</style> 
<!-- <link rel="stylesheet" href="../css/select.css">  -->
 <link rel="stylesheet" href="../node_modules/bootstrap/imobiliare-compilados/style.css">
</head>
<body>

<script src="js/jquery.js"></script>
<script src="node_modules/bootstrap/js/bootstrap.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>

    <div id="container1" align="center">
        <form action="hub.php" method="POST" class="form-cliente" id="id-form-cliente"> 
            <fieldset>
                <div class="container2" id="container2" align="center">   
                    <legend> 
                    <hr>
                    <h3 id="h3" class="h3">Imobiliarium</h3>
                    
                    <h2 id="h1m">Cadastro de clientes</h2> 
                    <hr>
                    </legend><br></div>
         <br>
        
            <input type="text" name="nomecliente"  id="id-nomecliente" placeholder="nome"><br>
            
            <input type="text" name="sobrenomecliente"  id="id-sobrenomecliente" placeholder="sobrenome"><br>
          
            <input type="text" name="cpfcliente" id="id-cpfcliente" placeholder="cpf"><br>
           
            <input type="text" name="celularcliente" id="id-celularcliente" placeholder="celular"><br>
       
            <input type="email" name="emailcliente" id="id-emalcliente" placeholder="email"><br>
         
            <input type="text" name="usernamecliente" id="id-usernamecliente" placeholder="nome de usuário"><br>
         
            <input type="password" name="passwordcliente" id="id-senhacliente" placeholder="senha"><br>
            
      
            <input type="text" name="logradouro" id="id-logradouro" placeholder="logradouro"><br>
     
            <input type="text" name="numero" id="id-numero" placeholder="número"><br>
   
            <input type="text" name="complemento" id="id-complemento" placeholder="complemento"><br>
        
            <input type="text" name="bairro" id="id-bairro" placeholder="bairro"><br>
          
            <input type="text" name="cidade" id="id-cidade" placeholder="cidade"><br><br>
            <label>Selecione seu Estado:</label><br>

              
 <div class="div-select" align-content-sm-center>
    <select name="estado" class="sel-estado">
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
   
            </select>
            </div>
            </fieldset>
            <br>

            <button type="submit" name="cadastro" class="btncli">enviar</button>

          
      
            
        </form>   
    </div>
         
</body>
</html>








