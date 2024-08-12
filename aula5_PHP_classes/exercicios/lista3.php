<?php

echo "<h2>Exercício 3 - Classe Filme</h2>";

class Filme {
    private $titulo;
    private $diretor;
    private $ano;
    private $link;

    public function __construct($t, $d, $a, $l) {
        $this->titulo  = $t;
        $this->diretor = $d;
        $this->ano     = $a;
        $this->link    = $l;
        
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
     * Get the value of diretor
     */
    public function getDiretor()
    {
        return $this->diretor;
    }

    /**
     * Set the value of diretor
     */
    public function setDiretor($diretor): self
    {
        $this->diretor = $diretor;

        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno($ano): self
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get the value of link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     */
    public function setLink($link): self
    {
        $this->link = $link;

        return $this;
    }
}


//Programa principal
$f1 = new Filme("Poderoso Chefão", "Francis Coppola", 1972, 
                "https://www.cineplayers.com/sites/default/files/posters/2020/08/god.jpg");
$f2 = new Filme("Bastardos Inglórios", "Quentin Tarantino", 2009, 
                "https://upload.wikimedia.org/wikipedia/pt/c/c2/Inglourious_basterds_ver9.jpg");
$f3 = new Filme("60 segundos", "Dominic Senna", 2000, 
                "https://upload.wikimedia.org/wikipedia/pt/9/93/60segundosposter.jpg");
$f4 = new Filme("Jurasic Park", "Steven Spielberg", 1993, 
                "https://upload.wikimedia.org/wikipedia/pt/b/bc/Jurassic_Park_logo.png");
$f5 = new Filme("O Auto da Compadecida", "Guel Arraes", 2000, 
                "https://upload.wikimedia.org/wikipedia/pt/thumb/b/bf/O_auto_da_compadecida.jpg/230px-O_auto_da_compadecida.jpg");

$filmes = array($f1, $f2, $f3, $f4, $f5);

foreach($filmes as $f) {
    echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>";
    echo $f->getTitulo() . "<br>";
    echo $f->getDiretor() . "<br>";
    echo $f->getAno() . "<br>";
    echo "<img style='width: 100%; height: auto;' src='" . $f->getLink() . "' /><br>";
    echo "</div>";
}