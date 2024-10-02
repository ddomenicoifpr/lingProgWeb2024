<?php 
//Teste de conexão com a base de dados
/*
include_once(__DIR__ . "/../../util/Connection.php");
$conn = Connection::getConnection();
print_r($conn);
*/

//Carregando a lista de alunos
include_once(__DIR__ . "/../../controller/AlunoController.php");

$alunoCont = new AlunoController();
$alunos = $alunoCont->listar();
print_r($alunos);


//Inclusão do HTML do header
include_once(__DIR__ . "/../include/header.php");
?>
<h2>Listagem de Alunos</h2>

<table border="1">
    <!-- Cabeçalho da tabela -->
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Estrangeiro</th>
        <th>Curso</th>
    </tr> 

    <!-- Dados da tabela -->

</table>

<?php
    include_once(__DIR__ . "/../include/footer.php");
?>
    

