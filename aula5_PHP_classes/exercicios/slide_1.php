<?php

class Pessoa {
    private $nome;
    private $sobrenome;

    public function getNomeCompleto() {
        return $this->nome . " " . $this->sobrenome;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
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
     *
     * @return  self
     */ 
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }
}

//Execução
echo "<h2>Exercício 1 - Classes</h2>";

$pessoa1 = new Pessoa();
$pessoa1->setNome("Daniel");
$pessoa1->setSobrenome("Di Domenico");
echo $pessoa1->getNomeCompleto();
echo "<br><br>";

$p2 = new Pessoa();
$p2->setNome("Carla");
$p2->setSobrenome("Manhago");
echo $p2->getNomeCompleto();
echo "<br><br>";

$p3 = new Pessoa();
$p3->setNome("José");
$p3->setSobrenome("Pereira");
echo $p3->getNomeCompleto();
echo "<br><br>";
