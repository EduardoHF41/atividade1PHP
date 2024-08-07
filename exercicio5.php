<?php
// Crie uma classe chamada 'Calculadora' com um método estático chamado 'soma' que recebe dois números e retorna a soma.
// Não é necessário instanciar a classe para utilizar o método 'soma'.
// Demonstre a utilização deste método.

class Calculadora{
  public static function soma ($a, $b){
    return $a + $b;
  }
}

$resultado = Calculadora::soma(2,2);

echo "a soma dos dois numero é: {$resultado}"

?>