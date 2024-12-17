<?php
#Arquivo com a declaração da classe service para Usuario

include_once(__DIR__ . "/../model/Usuario.php");
include_once(__DIR__ . "/../util/config.php");

class UsuarioService {

    public function validarDadosLogin(string $login, string $senha) {
        $erros = array();

        //Validar login
        if(! $login)
            array_push($erros, "O campo [Login] é obrigatório.");

        //Validar senha
        if(! $senha)
            array_push($erros, "O campo [Senha] é obrigatório.");

        return $erros;
    }

    public function salvarUsuarioSessao(Usuario $usuario) {
        session_start();
        $_SESSION[SESSAO_USUARIO_ID] = $usuario->getId();
        $_SESSION[SESSAO_USUARIO_NOME] = $usuario->getNome();
    }

    public function removerSessao() {
        session_start();
        session_unset();
        session_destroy();
    }

}