<?php
$endereco = $_POST['ende'];
$cidade = $_POST['cida'];
$estado = $_POST['esta'];
$valor = $_POST['valor'];
    include_once('conexao.php');
    $stmt = $conn->prepare('UPDATE imovel SET endereco = :endereco WHERE idImovel');
    $stmt->execute(['endereco' => $endereco, 'cidade' => $cidade, 'estado' => $estado, 'valor' => $valor]); 
?>