<?php
//veiculo_exec.php

//Classe veículo
class Veiculo {
    //Atributos
    private $modelo;
    private $marca;
    private $combustivel;

    //Métodos
    public function getCombutivelDesc() {
        switch($this->combustivel) {
            case "A":
                return "Álcool";

            case "G":
                return "Gasolina";

            case "F":
                return "Flex";

            default:
                return "";
        }
    }    

    //GETs e SETs
    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of combustivel
     */
    public function getCombustivel()
    {
        return $this->combustivel;
    }

    /**
     * Set the value of combustivel
     */
    public function setCombustivel($combustivel): self
    {
        $this->combustivel = $combustivel;

        return $this;
    }

} //FIM classe Veiculo

$modelo = $_POST["modelo"];
$marca = $_POST["marca"];
$combust = $_POST["combustivel"];

$veiculo = new Veiculo();
$veiculo->setModelo($modelo)
        ->setMarca($marca)
        ->setCombustivel($combust);

echo "<h1>Dados informados para o veículo</h1>";

echo "Modelo: " . $veiculo->getModelo() . "<br>";
echo "Marca: " . $veiculo->getMarca() . "<br>";
echo "Combustível: " . $veiculo->getCombutivelDesc() . "<br>";

echo "<br><br>";
echo "<a href='veiculo_form.php'>Cadastrar outro veículo</a>";