<?php

$server = "localhost";
$user = "admin";
$password = "qw";
$dbname = "imobiliariumj";
$tblname = "cliente";
$port = "3306";

$conn = new mysqli($server, $user, $password);

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

$conn->query($sql) OR exit($conn-error);

$conn->select_db($dbname);

$conn->set_charset("utf8");


