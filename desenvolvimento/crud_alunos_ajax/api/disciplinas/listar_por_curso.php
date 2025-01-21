<?php

include_once(__DIR__ . "/../../controller/DisciplinaController.php");

//sleep(3);

//Receber o id do curso por método GET
$id = 0;
if(isset($_GET['id']))
    $id = $_GET['id'];

//Chamar o DisciplinaController
$discCont = new DisciplinaController();
$disciplinas = $discCont->listarPorCurso($id);

//print_r($disciplinas);
echo json_encode($disciplinas, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

//listar_por_curso.php?id=3