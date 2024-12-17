<?php

//Mostrar erros do PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Configurar essas variáveis de acordo com o seu ambiente
define("DB_HOST", "mysql-server");
define("DB_NAME", "crud_tds");
define("DB_USER", "root");
define("DB_PASSWORD", "root");

//Configurar variáveis para a sessão do usuário (login)
define("SESSAO_USUARIO_ID", "USUARIOID");
define("SESSAO_USUARIO_NOME", "USUARIONOME");

//Configurar a URL base da aplicação
define("BASE_URL", "/crud_alunos_login");