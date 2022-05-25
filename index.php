<?php

require __DIR__ . "/src/funcoes.php";

use SRC\Funcoes;

$funcao = new Funcoes();

echo $funcao->seculoAno(2021);

echo '</br></br>';

echo $funcao->PrimoAnterior(10);

echo '</br></br>';

$array = array (
    array(25,22,18),
    array(10,15,13),
    array(24,5,2),
    array(80,17,15)
);

echo $funcao->SegundoMaior($array);

$arr = [123, -17, -5, 1, 2, 3, 12, 43, 45];
var_dump($funcao->SequenciaCrescente($arr));

