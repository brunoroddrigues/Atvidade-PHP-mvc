<?php
    if($_GET)
    {
        // TODAS AS OUTRAS ROTAS EX:HTTP://LOCALHOST/cursoMVC/index.php?controle=cursoController&metodo=listar
        $controle = $_GET["controle"];
        $metodo = $_GET["metodo"];
        require_once "Controller/" .$controle . ".php";
        $obj = new $controle();
        $obj->$metodo();
    }
    else
    {
        // rota inicial onde acessa http://localhost/cursoMVC/INDEX.PHP
    require_once "Controller/inicioController.php";
    $obj = new inicioController();
    $obj->inicio();
    }
?>