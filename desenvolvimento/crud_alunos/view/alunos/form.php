<?php

//Buscar os cursos para exibir no select
include_once(__DIR__ . "/../../controller/CursoController.php");
$cursoCont = new CursoController();
$cursos = $cursoCont->listar();
//print_r($cursos);


include_once(__DIR__ . "/../include/header.php");
?>

<h3>Cadastrar aluno</h3>

<form id="formAluno" method="POST">

    <div>
        <label for="txtNome">Nome:</label>
        <input type="text" placeholder="Informe o nome"
            name="nome" id="txtNome" maxlength="70">
    </div>

    <div>
        <label for="txtIdade">Idade:</label>
        <input type="number" placeholder="Informe a idade"
            name="idade" id="txtIdade" >
    </div>

    <div>
        <label for="selEstrang">Estrangeiro:</label>
        <select name="estrang" id="selEstrang">
            <option value="">----Selecione----</option>
            <option value="S">Sim</option>
            <option value="N">Não</option>
        </select>
    </div>

    <div>
        <label for="selCurso">Curso:</label>
        <select name="curso" id="selCurso">
            <option value="">----Selecione----</option>
            
            <?php foreach($cursos as $c): ?>
                <option value="<?= $c->getId() ?>"><?= $c ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <input type="submit" value="Gravar"/>
    </div>

</form>

<div>
    <a href="listar.php">Voltar</a>
</div>


<?php
include_once(__DIR__ . "/../include/footer.php");
?>