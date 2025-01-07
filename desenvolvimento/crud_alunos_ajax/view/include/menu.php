<?php
include_once(__DIR__ . "/../../controller/UsuarioController.php");

$nomeUsuario = "[Não logado]";

//Chamar o controller para acessar o nome do usuário logado
$usuarioCont = new UsuarioController();
$usuarioLogado = $usuarioCont->getNomeUsuarioLogado();
if($usuarioLogado)
    $nomeUsuario = $usuarioLogado;

?>

<nav class="navbar navbar-expand-md bg-success px-3">
    <a class="navbar-brand" href="<?= BASE_URL ?>">Alunos</a>
    
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>">Home</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#"
                id="navDropDown" data-bs-toggle="dropdown">Cadastros</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" 
                    href="<?= BASE_URL ?>/view/alunos/listar.php">
                    Alunos</a>
                <a class="dropdown-item" 
                    href="<?= BASE_URL ?>/view/turmas/listar.php">Turmas</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#"
                id="navDropDown2" data-bs-toggle="dropdown">
                <?= $nomeUsuario ?></a>
            <div class="dropdown-menu">
                <a class="dropdown-item" 
                    href="<?= BASE_URL ?>/view/login/login_sair.php">
                    Sair</a>
            </div>
        </li>        
    </ul>
</nav>