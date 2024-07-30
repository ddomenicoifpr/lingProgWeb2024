<?php 

class Livro {
    private $titulo;
    private $genero;
    private $autor;
    private $qtdPaginas;

    //Método para retornar os dados do livro como uma linha de tabela
    public function getLinhaTabela() {
        $linha = "<tr>";
        $linha = $linha . "<td>" . $this->titulo . "</td>";
        $linha = $linha . "<td>" . $this->genero . "</td>";
        $linha = $linha . "<td>" . $this->autor . "</td>";
        $linha = $linha . "<td>" . $this->qtdPaginas . "</td>";
        $linha = $linha . "</tr>";
        return $linha;
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
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

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
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

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
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

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
     */
    public function setQtdPaginas($qtdPaginas): self
    {
        $this->qtdPaginas = $qtdPaginas;

        return $this;
    }
}

//Programa principal
$livro1 = new Livro();
$livro1->setTitulo("Crepusculo");
$livro1->setAutor("Stephenie Meyer");
$livro1->setGenero("Drama");
$livro1->setQtdPaginas(345);

$livro2 = new Livro();
$livro2->setTitulo("1984")->setAutor("George Orwell")
       ->setGenero("Ficção")->setQtdPaginas(565);

$livro3 = new Livro();
$livro3->setTitulo("O Alquimista")->setAutor("Paulo Coelho")
        ->setGenero("Ficção")->setQtdPaginas(454);

$livros = array($livro1, $livro2, $livro3);

echo "<table border=1>";

//Cabeçalho
echo "<tr>";
echo "<th>Título</th>";
echo "<th>Autor</th>";
echo "<th>Gênero</th>";
echo "<th>Páginas</th>";
echo "</tr>";

//Dados
foreach($livros as $l) { //$l é um objeto da classe Livro
    echo $l->getLinhaTabela();    
    
    /*
    echo "<tr>";
    echo "<td>" . $l->getTitulo() . "</td>";
    echo "<td>" . $l->getAutor() . "</td>";
    echo "<td>" . $l->getGenero() . "</td>";
    echo "<td>" . $l->getQtdPaginas() . "</td>";
    echo "</tr>";
    */
}

echo "</table>";
