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
    <h1>Atualizar Imóveis</h1>
    <form action="update.php" method="POST">
        <label for="">Endereço : <input type="text" name="ende" id="nm"></label>
        <label for="">Cidade : <input type="text" name="cida" id="sn"></label>
        <label for="">Estado : <input type="text" name="esta" id="em"></label>        
        <label for="">Valor : <input type="number" name="valor" id="vl"></label>        
        <input type="submit" value="ATUALIZAR">
        <a href="index.php"><input type="button" value="CADASTRAR"></a>
        <a href="lista.php"><input type="button" value="LISTA"></a>
    </form>
 </div>   
</body>
</html>