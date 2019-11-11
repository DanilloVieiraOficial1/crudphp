<?php 
include_once('conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <title>Lista</title>
</head>
<body>
<div class="all-container">
    <h1>Lista de Imóveis</h1>
    <?php     
    $stmt = $conn->prepare('SELECT * FROM imovel ORDER BY idImovel ASC');
    $stmt->execute();
    while($row_imovel = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<br>";
        echo "<hr>";
        //echo "<a href=\"atualizar.php\"><input type=\"button\" value=\"Editar\"></a> ID: " . $row_imovel['idImovel'] . "<br>";
        echo "<a href=\"atualizar.php\"><input type=\"button\" value=\"Editar\" class=\"inp\"></a> Endereço: " . $row_imovel['endereco'] . "<br>";
        echo "<a href=\"atualizar.php\"><input type=\"button\" value=\"Editar\" class=\"inp\"></a> Cidade : " . $row_imovel['cidade'] . "<br>";
        echo "<a href=\"atualizar.php\"><input type=\"button\" value=\"Editar\" class=\"inp\"></a> Estado : " . $row_imovel['estado'] . "<br>";
        echo "<a href=\"atualizar.php\"><input type=\"button\" value=\"Editar\" class=\"inp\"></a> Valor : " . $row_imovel['valor'] . "<br>";
    }    
    ?>
</div>
</body>
</html>