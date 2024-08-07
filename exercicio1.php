<?php
// Crie uma classe chamada 'Livro' com propriedades privadas 'titulo' e 'autor'.
// Implemente um método construtor para inicializar essas propriedades.
// Em seguida, crie um objeto da classe 'Livro' e exiba suas propriedades.

class Livro{
    public $titulo;
    public $autor;

    public function __construct($autor,$titulo){
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function exibirLivro(){
        echo"Autor:{$this->autor}      Titulo:{$this->titulo}";
    }
}

$livro1 = new Livro("J. K. Rolling","Harry Potter");

$livro1->exibirLivro();
?>