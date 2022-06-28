<?php



$nomecliente = $_POST['nomecliente'];
$sobrenomecliente = $_POST['sobrenomecliente'];
$cpfcliente = $_POST['cpfcliente'];
$celularcliente = $_POST['celularcliente'];
$emailcliente = $_POST['emailcliente'];
$usernamecliente = $_POST['usernamecliente'];
$passwordcliente = $_POST['passwordcliente'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];


$nomecliente = $conn->escape_string($nomecliente);
$sobrenomecliente = $conn->escape_string($sobrenomecliente);
$cpfcliente = $conn->escape_string($cpfcliente);
$celularcliente = $conn->escape_string($celularcliente);
$emailcliente = $conn->escape_string($emailcliente);
$usernamecliente = $conn->escape_string($usernamecliente);
$passwordcliente = $conn->escape_string($passwordcliente);
$logradouro = $conn->escape_string($logradouro);
$numero = $conn->escape_string($numero);
$complemento = $conn->escape_string($complemento);
$bairro = $conn->escape_string($bairro);
$cidade = $conn->escape_string($cidade);
$estado = $conn->escape_string($estado);




$sql = "INSERT INTO $tblname (nomecliente, sobrenomecliente, cpfcliente, celularcliente, emailcliente, usernamecliente, passwordcliente, logradouro, numero, complemento, bairro, cidade, estado) VALUES (
    '$nomecliente',
    '$sobrenomecliente',
    '$cpfcliente',
    '$celularcliente',
    '$emailcliente',
    '$usernamecliente ',
    '$passwordcliente',
    '$logradouro',
    '$numero',
    '$complemento',
    '$bairro',
    '$cidade',
    '$estado')";


$conn->query($sql);