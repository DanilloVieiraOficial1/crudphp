<?php
$endereco = $_POST['ende'];
$cidade = $_POST['cida'];
$estado = $_POST['esta'];
$valor = $_POST['valor'];
    include_once('conexao.php');
    $stmt = $conn->prepare('INSERT INTO imovel(endereco, cidade, estado, valor) VALUES (:endereco, :cidade, :estado, :valor)');
    $stmt->execute(['endereco' => $endereco, 'cidade' => $cidade, 'estado' => $estado, 'valor' => $valor]); 
?>