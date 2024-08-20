<?php
//Capturar os valores da superglobal

$nome = $_POST['nome'];
$diretor = $_POST['diretor'];
$ano = $_POST['ano'];
$link = $_POST['link_foto'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme card</title>
</head>

<body>

    <div style='border: solid 1px; width: 300px; margin-top: 20px;'>
        <?= $nome; ?><br> <!-- Saída utilizando a short tag do PHP -->
        <?php echo $diretor; ?><br>
        <?php echo $ano; ?><br>
        <img style='width: 100%; height: auto;' src='<?php echo $link; ?>' /><br>
    </div>

    <br><br>
    <a href="filme_formulario.php">Gerar novo card</a>

</body>

</html>