<?php
    require_once "ProdutoCrud.php";



    if ($_GET['rota'] == "exibir"){
        header ('Location: viewP.php');
    }

    if ($_GET['rota'] == "exibirP" AND isset($_GET['id'])){
        header ('Location: show.php?id='.$_GET['id']);
    }