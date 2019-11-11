<?php

$host = "localhost";
$banco = "imobiliaria";
$usr = "root";
$pass = "root";
$conn = new PDO("mysql:host=".$host.";dbname=".$banco, $usr, $pass);
if(!$conn){
    echo 'Erro ao conectar no banco de dados';
}
?>