<?php
// Modifique a classe 'Cachorro' do exercício anterior.
// Torne as propriedades 'nome' e 'idade' protegidas e utilize métodos getters e setters para acessá-las e modificá-las.

class Animal
{
    protected $nome;
    protected $idade;
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
    public function setIdade($idade)
    {
        parent::setIdade($idade);
    }
    public function getNome(){
        return parent::getNome();
    }
    public function setNome($nome){
        parent::setNome($nome);
    }
}
$cachorro = new Cachorro("Rex", 3);
// Exibindo as propriedades
echo "Nome: {$cachorro->getNome()} <br> Idade: {$cachorro->getIdade()}<br>";

$cachorro = new Cachorro("bisteca", 6);

echo "Nome: {$cachorro->getNome()} <br> Idade: {$cachorro->getIdade()}";


?>