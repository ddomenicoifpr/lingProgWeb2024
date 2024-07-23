<?php

class Livro {
    private $titulo;
    private $autor;
    private $genero;
    private $qtdPaginas;

    //Criado construtor para instanciar o objeto com todos os campos preechidos
    public function __construct($titulo, $autor, $genero, $qtdPaginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->qtdPaginas = $qtdPaginas;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of qtdPaginas
     */ 
    public function getQtdPaginas()
    {
        return $this->qtdPaginas;
    }

    /**
     * Set the value of qtdPaginas
     *
     * @return  self
     */ 
    public function setQtdPaginas($qtdPaginas)
    {
        $this->qtdPaginas = $qtdPaginas;

        return $this;
    }
}

//Execução
echo "<h2>Exercício 2 - Classes</h2>";
$l1 = new Livro("Vidas Secas", "Graciliano Ramos", "Drama", 150);
$l2 = new Livro("Diva", "José de Alencar", "Romance", 180);
$l3 = new Livro("O Alienista", "Machado de Assis", "Drama", 85);

$livros = array($l1, $l2, $l3);

echo "<table border=1>";

echo "<tr>";
echo "<th>Título</th>";
echo "<th>Autor</th>";
echo "<th>Gênero</th>";
echo "<th>Páginas</th>";
echo "</tr>";

foreach($livros as $liv) {
    echo "<tr>";
        echo "<td>" . $liv->getTitulo() . "</td>";
        echo "<td>" . $liv->getAutor() . "</td>";
        echo "<td>" . $liv->getGenero() . "</td>";
        echo "<td>" . $liv->getQtdPaginas() . "</td>";
    echo "</tr>";
}

echo "</table>";
