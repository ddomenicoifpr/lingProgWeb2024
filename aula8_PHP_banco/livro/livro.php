<?php
//Configuração para mostrar os erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("conexao.php");

$conn = Conexao::getConexao();
print_r($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
</head>
<body>

    <h3>Formulário do livro</h3>
    <form method="POST">

        <input type="text" name="titulo"
            placeholder="Informe o título" />

        <br><br>

        <select name="genero">
            <option value="">---Selecione o gênero---</option>
            <option value="A">Aventura</option>
            <option value="D">Drama</option>
            <option value="F">Ficção</option>
            <option value="R">Romance</option>
            <option value="O">Outro</option>
        </select>

        <br><br>

        <input type="number" name="qtdPaginas" 
            placeholder="Informe a quantidade de páginas" />

        <br><br>

        <input type="submit" value="Gravar" />
        <input type="reset" value="Limpar" />
    </form>

    <h3>Listagem dos livros</h3>
    
</body>
</html>