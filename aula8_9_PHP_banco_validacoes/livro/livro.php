<?php
//Configuração para mostrar os erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("conexao.php");

$conn = Conexao::getConexao();
//Teste de conexão... deve aparecer PDO Object()
//print_r($conn);

$msgErro = "";

$titulo = "";
$qtdPaginas = "";
$genero = "";

//Verifica se o usuário já clicou no gravar
if(isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $qtdPaginas = $_POST['qtdPaginas'];

    //Validar os dados
    $erros = array();
    if($titulo == '')
        array_push($erros, "Informe o título do livro!");
    
    if($genero == '')
        array_push($erros, "Informe o gênero do livro!");
    
    if($qtdPaginas == '')
        array_push($erros, "Informe a quantidade de páginas do livro!");
    
    if(empty($erros)) {
        //Se todas as validações foram atendidas, insere o livro na base de dados
        $sql = "INSERT INTO livros (titulo, genero, qtd_paginas)
                VALUES (?, ?, ?)";
        $stm = $conn->prepare($sql);
        $stm->execute([$titulo, $genero, $qtdPaginas]);  
        
        //Redirecionar para a página desejada
        header("location: livro.php");
    } else
        $msgErro = implode("<br>", $erros);
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
    <!--form method="POST" onsubmit="return validarCampos();" -->
    <form method="POST" >

        <input type="text" name="titulo" id="titulo"
            placeholder="Informe o título" 
            value="<?php echo $titulo; ?>" />

        <br><br>

        <select name="genero" id="genero">
            <option value="">---Selecione o gênero---</option>
            <option value="A" <?= ($genero == 'A' ? 'selected' : '') ?> >Aventura</option>
            <option value="D" <?= ($genero == 'D' ? 'selected' : '') ?> >Drama</option>
            <option value="F" <?= ($genero == 'F' ? 'selected' : '') ?> >Ficção</option>
            <option value="R" <?= ($genero == 'R' ? 'selected' : '') ?> >Romance</option>
            <option value="O" <?= ($genero == 'O' ? 'selected' : '') ?> >Outro</option>
        </select>

        <br><br>

        <input type="number" name="qtdPaginas" id="qtdPaginas"
            placeholder="Informe a quantidade de páginas"
            value="<?= $qtdPaginas ?>" />

        <br><br>

        <input type="submit" value="Gravar" />
        <input type="reset" value="Limpar" />
    </form>

    <span id="msg" style="color: red;"><?= $msgErro ?></span>

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
                <td>
                    <?php 
                        switch($l['genero']) {
                            case "A":
                                echo "Aventura";
                                break;

                            case "D":
                                echo "Drama";
                                break;

                            case "F":
                                echo "Ficção";
                                break;

                            case "R":
                                echo "Romance";
                                break;
                            
                            case "O":
                                echo "Outro";
                                break;
                        }
                    ?>
                </td>
                <td><?= $l["qtd_paginas"]; ?></td>
                <td>
                    <a href="livro_del.php?id=<?= $l['id'] ?>" 
                        onclick="return confirm('Confirma a exclusão?')">
                        Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <script src="validacao.js"></script>
    
</body>
</html>