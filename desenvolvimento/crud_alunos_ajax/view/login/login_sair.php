<?php
//Página para deslogar do sistema

include_once(__DIR__ . "/../../controller/UsuarioController.php");

$usuCont = new UsuarioController();
$usuCont->deslogar();

header("location: " . BASE_URL . "/view/login/login.php");