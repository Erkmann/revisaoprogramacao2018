<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>exe</title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	ul li {
		display: inline;
	}
</style>
<body>

<?php

    //verifica se existe a $_SESSION na posicao "usuario"

    if (!isset($_SESSION['usuario'])){
    require_once ('login.php');}

    elseif(isset($_SESSION['usuario'])){
    $nome = $_SESSION['usuario'];
        echo "Olá $nome";
        require_once ('sair.php');
        require_once ('linkperfil.php');
       }
?>



<ul>
    <a href="produtos.php?nome=Eletro&linha=link"><li>ELETRO</li></a>
    <a href="produtos.php?nome=Moveis&linha=link"><li>MÓVEIS</li></a>
    <a href="produtos.php?nome=Esportes&linha=link"><li>ESPORTES</li></a>
    <a href="produtos.php?nome=Roupas&linha=link"><li>ROUPAS</li></a>
</ul>

<!-- formulario POST com um action que passaq uma rota pela URL -->

<form method="POST" action="produtos.php?linha=post">
    <input type="search" name="BUSCA">
    <input type="submit" value="Buscar">
</form>

<a href="controladorCategoria.php?rota=exibir">View Categoria</a>
<a href="controladorProduto.php?rota=exibir">View Produto</a>


</body>
</html>