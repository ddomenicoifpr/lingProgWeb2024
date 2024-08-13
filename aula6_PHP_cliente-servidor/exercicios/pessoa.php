<?php

//1- Declarar a classe pessoa
class Pessoa {
    private $nome;
    private $sobrenome;
    private $idade;

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}


//2- Receber o parâmetros
$tipo = "";
if(isset($_POST["tipo"]))
	$tipo = $_POST["tipo"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$idade = $_POST["idade"];


//3- De acordo com o tipo, gerar a saída
if($tipo == 'A') {
    //Array associativo
    $pessoa = array("nome" => $nome, 
                    "sobrenome" => $sobrenome,
                    "idade" => $idade);
    echo "A - Nome completo: " . $pessoa["nome"] . " " . $pessoa["sobrenome"];
    echo "<br>";
    echo "Idade: " . $pessoa["idade"];

} else if($tipo == 'C') {
    //Objeto da classe Pessoa
    $pessoa = new Pessoa();
    $pessoa->setNome($nome)->setSobrenome($sobrenome);
    $pessoa->setIdade($idade);

    echo "C - Nome completo: " . $pessoa->getNome() . " " . 
                                $pessoa->getSobrenome();
    echo "<br>";
    echo "Idade: " . $pessoa->getIdade();

} else 
    echo "O tipo deve ser A ou C!";
