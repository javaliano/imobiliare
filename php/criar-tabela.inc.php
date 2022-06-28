<?php

$sql = "CREATE TABLE IF NOT EXISTS $tblname(
    idcliente INT(11) NOT NULL AUTO_INCREMENT UNIQUE,
    nomecliente VARCHAR(30),
    sobrenomecliente VARCHAR(45),
    cpfcliente VARCHAR(11) UNIQUE NOT NULL,
    celularcliente VARCHAR(15),
    emailcliente VARCHAR(30),
    usernamecliente VARCHAR(20),
    passwordcliente VARCHAR(12),
    logradouro VARCHAR(45),
    numero VARCHAR(5),
    complemento VARCHAR(30),
    bairro VARCHAR(30),
    cidade VARCHAR(30),
    estado VARCHAR(2),
    primary key(idcliente)
    )";

$conn->query($sql);