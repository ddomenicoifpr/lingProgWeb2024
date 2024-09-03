<?php

include_once("conexao.php");

$id = 0;
if(isset($_GET['id']))
    $id = $_GET['id'];

if($id) {
    //Se encontrou o ID do livro, procede com a exclusão
    $conn = Conexao::getConexao();
    $sql = "DELETE FROM livros WHERE id = ?";
    $stm = $conn->prepare($sql);
    $stm->execute([$id]);

    //Redireciona para a página livro.php
    header("location: livro.php");
} else {
    //Caso não receba o ID, mostra a mensagem de ID inválido
    echo "ID do livro inválido.<br>";
    echo '<a href="livro.php">Voltar</a>';
}