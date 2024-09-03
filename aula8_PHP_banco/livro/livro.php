<?php
//Configuração para mostrar os erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("conexao.php");

$conn = Conexao::getConexao();
//Teste de conexão... deve aparecer PDO Object()
//print_r($conn);

//Verifica se o usuário já clicou no gravar
if(isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $qtdPaginas = $_POST['qtdPaginas'];

    $sql = "INSERT INTO livros (titulo, genero, qtd_paginas)
            VALUES (?, ?, ?)";
    $stm = $conn->prepare($sql);
    $stm->execute([$titulo, $genero, $qtdPaginas]);  
    
    //Redirecionar para a página desejada
    header("location: livro.php");
}
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
    <form method="POST" >

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

    <?php
        $sql = "SELECT * FROM livros";
        $stm = $conn->prepare($sql);
        $stm->execute();
        $livros = $stm->fetchAll();
    ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Gênero</th>
            <th>Páginas</th>
            <th></th>
        </tr>

        <?php foreach($livros as $l): ?>
            <tr>
                <td><?php echo $l["id"]; ?></td>
                <td><?php echo $l["titulo"]; ?></td>
                <td><?php echo $l["genero"]; ?></td>
                <td><?= $l["qtd_paginas"]; ?></td>
                <td>
                    <a href="livro_del.php?id=<?= $l['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>