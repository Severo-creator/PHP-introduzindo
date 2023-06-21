<?php


//croando variaveis
$nome = 'guilherme';

$guilherme = 'frufru';


//concatenação no PHP
echo ' meu nome é ' .$nome;

//variavel de variavel

echo ' meu nome é ' .$$nome;


// condicional

if($nome == 'guilherme'){
  echo 'verdadeiro';
} else {
  echo 'falso';
}

$idade = 26 ;

// igualdade direta
if($idade === '26'){
  echo 'verdadeiro';
}else{
  echo 'falso';
}


//loopings

for($i = 0; $i < 10 ; $i++){
  echo $i;
  echo '<hr>'; // quebra de linha
}

$i = 0;

while($i < 10){
  echo $i;
  echo '<hr>';
  $i++;
}


//funções

printnumero(30);
echo '<br>'; // pula linha
printnumero(29);
function printnumero($n){
  echo $n;
}


//orientação a objetos
class Pessoa{
  public $nome;
  public $idade;

  public function __construct($nome, $idade)
  {
    $this->nome = $nome;
    $this->idade = $idade;
  }

  public function getNome(){
    echo $this->nome;
  }

  public function getIdade(){
    echo $this->idade;
  }

}


$pessoa1  = new Pessoa('guilherme', '26');

$pessoa1->getNome();

$pessoa1->getIdade();

echo '<br>';

$pessoa2  = new Pessoa('guilherme', '21');

$pessoa2->getNome();

$pessoa2->getIdade();

echo '<br>';


//containers

$arr = ['guilherme', 'joao', 'felipe'];

echo $arr[1];
echo $arr[2];
echo $arr[3];

?>