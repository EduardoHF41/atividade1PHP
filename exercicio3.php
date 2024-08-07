<?php
class Animal
{
    private $nome;
    private $idade;
    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
}
class Cachorro extends Animal
{
    public function getIdade()
    {
        return parent::getIdade() * 7;
    }
}
$cachorro = new Cachorro("Rex", 3);
// Exibindo as propriedades
echo "Nome: {$cachorro->getNome()} <br> Idade: {$cachorro->getIdade()}";
?>