<?php
//comentario de uma linha 
/*
comentario de 
mais de uma linha
*/

/*
VARIAVEIS
INTEIROS (int) - qualquer número sem decimais positivo ou negativo
PONTO FLUTUANTE (float, double ou real) - número com decimais
STRING - texto
BOOLEANOS - verdadeiro (TRUE) ou falso (FALSE)
ARARYS - variaveis multidimensionais, vetores
OBJETOS - instância de uma classe
RESCURSOS - variaveis especiais do PHP que referenciam recursos externos
NULO (null) - variavel sem valor, porèm é diferente de ""
*/

$idade = 17;
$altura = 1.60;
$nome = "Bianca Becker";
$solteira = true;

$numero = 50;

define('CONFIG', 1500);

//echo CONFIG;

function calc(){
    global $numero;
    echo $numero;
}

//calc();

/*
MOSTRAR NA TELA 
print($idade);
echo $idade;
*/

/*
MOSTRAR O TIPO DE VARIAVEL
echo gettype($idade);
*/

/*
$cadastro = array('Cliente 1', 'Cliente 2', 'Cliente 3');
$cadastro[] = 'Cliente 1';
$cadastro[] = 'Cliente 2';
$cadastro = array('cliente1' => 'Bianca', 'cliente2' => 'Rafaela');
*/

$cadastro = array(
    'cliente1' => array(
        'nome' => 'Bianca',
        'idade' => '17',
    ),
    'cliente2' => array(
        'nome' => 'Rafaela',
        'idade' => '18',
    ),
);

var_dump(get_defined_vars());

//var_dumb($cadastro);

//echo $cadastro['cliente1']['nome'];

//echo "Olá, meu nome é $nome e eu tenho $idade anos.";

?>