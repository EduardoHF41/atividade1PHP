<?php
// Modifique a classe 'Livro' do exercício anterior.
// Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)' que permitem modificar as propriedades.
// Use esses métodos para alterar o título e o autor do objeto criado.
class Livro
{
    private $titulo;
    private $autor;

    public function __construct($autor, $titulo)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getAutor()
    {
        return $this->autor;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
    public function exibirLivro()
    {
        echo "Autor:{$this->autor}      Titulo:{$this->titulo} <br>";
    }
}

$livro = new Livro("J. K. Rolling", "Harry Potter");

$livro->exibirLivro();

$livro->setAutor("J. R. R. Tolkien");
$livro->setTitulo("Senhor dos Aneis");

$livro->exibirLivro();


?>