<?php

include_once(__DIR__ . "/../../model/Aluno.php");
include_once(__DIR__ . "/../../model/Curso.php");
include_once(__DIR__ . "/../../controller/AlunoController.php");

if(isset($_POST['nome'])) {
    //Capturando os dados do formulário
    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : null;
    $idade = is_numeric($_POST['idade']) ? $_POST['idade'] : null;
    $estrang = trim($_POST['estrang']) ? trim($_POST['estrang']) : null;;
    $curso = $_POST['curso'];

    //Criando o objeto aluno para inserir
    $aluno = new Aluno();
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrang);

    $cursoObj = new Curso();
    $cursoObj->setId($curso);
    $aluno->setCurso($cursoObj);

    //print_r($aluno);

    //Chamando a rotina do controller para inserir o aluno
    $alunoCont = new AlunoController();
    $alunoCont->inserir($aluno);

    //Redirecionando para a listagem
    header("location: listar.php");
} else
    echo "Usuário ainda não clicou em gravar";


include("form.php");

