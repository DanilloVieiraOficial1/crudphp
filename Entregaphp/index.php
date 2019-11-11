<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body class="corpo">
<div class="all-container">
    <h1>Cadastro de Imóveis</h1>
    <form action="cadastro.php" method="POST">
        <label for="" class="l1">Endereço : <input type="text" name="ende" id="nm" required></label>        
        <label for="">Cidade : <input type="text" name="cida" id="sn" required></label>        
        <label for="">Estado : <input type="text" name="esta" id="em" required></label>        
        <label for="">Valor : <input type="number" name="valor" id="vl" required></label>      
        <input type="submit" value="CADASTRAR">
        <a href="atualizar.php"><input type="button" value="ATUALIZAR"></a>
    </form>
</div>
</body>
</html>