<?php
//Página que verifica se o usuário está logado

include_once(__DIR__ . "/../../controller/UsuarioController.php");

$usuarioCont = new UsuarioController();
$estaLogado = $usuarioCont->estaLogado();

if(! $estaLogado) {
    header("location: " . BASE_URL . "/view/login/login.php");
    exit;
}