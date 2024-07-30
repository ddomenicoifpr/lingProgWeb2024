<?php

echo "<h2>Exercício 2 - Classes Cidade e Estado</h2>";

class Estado {
    private $nome;
    private $sigla;

    public function __toString() {
        return $this->nome . "-" . $this->sigla;
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
     * Get the value of sigla
     */ 
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set the value of sigla
     *
     * @return  self
     */ 
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;

        return $this;
    }
}

class Cidade {
    private $nome;
    private $qtdHabitantes;
    private $areaTerritorial;
    private $altitude;
    private $estado;

    public function __construct($nome, $habit, $area, $alt, $estado) {
        $this->nome = $nome;
        $this->qtdHabitantes = $habit;
        $this->areaTerritorial = $area;
        $this->altitude = $alt;
        $this->estado = $estado;
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
     * Get the value of qtdHabitantes
     */ 
    public function getQtdHabitantes()
    {
        return $this->qtdHabitantes;
    }

    /**
     * Set the value of qtdHabitantes
     *
     * @return  self
     */ 
    public function setQtdHabitantes($qtdHabitantes)
    {
        $this->qtdHabitantes = $qtdHabitantes;

        return $this;
    }

    /**
     * Get the value of altitude
     */ 
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set the value of altitude
     *
     * @return  self
     */ 
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get the value of areaTerritorial
     */ 
    public function getAreaTerritorial()
    {
        return $this->areaTerritorial;
    }

    /**
     * Set the value of areaTerritorial
     *
     * @return  self
     */ 
    public function setAreaTerritorial($areaTerritorial)
    {
        $this->areaTerritorial = $areaTerritorial;

        return $this;
    }

     /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }
}

//Execução
$pr = new Estado();
$pr->setSigla("PR");
$pr->setNome("Paraná");

$sc = new Estado();
$sc->setSigla("SC");
$sc->setNome("Santa Catarina");

$cid1 = new Cidade("Foz do Iguaçu", 250000, 500, 145, $pr);
$cid2 = new Cidade("Cascavel", 300000, 420, 320, $pr);
$cid3 = new Cidade("Chapecó", 240000, 120, 620, $sc);
$cid4 = new Cidade("Blumenau", 330000, 200, 85, $sc);
$cid5 = new Cidade("Curitiba", 1500000, 300, 850, $pr);

$cidades = array($cid1, $cid2, $cid3, $cid4, $cid5);

echo "<table border=1>";

//Cabecalho
echo "<tr>";
echo "<td><b>Nome</b></td>";
echo "<td><b>Habitantes</b></td>";
echo "<td><b>Área</b></td>";
echo "<td><b>Altitude</b></td>";
echo "<td><b>Estado</b></td>";
echo "</tr>";

foreach($cidades as $cid) {
    echo "<tr>";
    echo "<td>" . $cid->getNome() . "</td>";
    echo "<td>" . $cid->getQtdHabitantes() . "</td>";
    echo "<td>" . $cid->getAreaTerritorial() . "</td>";
    echo "<td>" . $cid->getAltitude() . "</td>";
    echo "<td>" . $cid->getEstado() . "</td>"; //Funciona se implementar o toString na classe Estado
    //echo "<td>" . $cid->getEstado()->getNome() . "-" . $cid->getEstado()->getSigla() . "</td>"; //Outra opção possível
    echo "</tr>";
}

echo "</table>";
