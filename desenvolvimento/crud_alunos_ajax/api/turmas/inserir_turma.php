<?php

include_once(__DIR__ . "/../../model/Turma.php");

$ano = is_numeric($_POST["ano"]) ? $_POST["ano"] : null;
$idCurso = is_numeric($_POST["idCurso"]) ? $_POST["idCurso"] : null;
$idDisciplina = is_numeric($_POST["idDisciplina"]) ? 
                        $_POST["idDisciplina"] : null;

/*
echo "Ano: " . $ano;
echo " - Curso: " . $idCurso;
echo " - Disc: " . $idDisciplina;
*/
$turma = new Turma();
$turma->setAno($ano);

$disc = new Disciplina($idDisciplina);
$turma->setDisciplina($disc);

print_r($turma);

//Chamar o controller para inserir a turma