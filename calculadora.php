<?php
include ("./index.html");
    
$n1 = $_POST["v1"];
$n2 = $_POST["v2"];
$op = $_POST["operacao"];

echo $_POST["operacao"];

function validar ($n1, $n2){
    return is_numeric($n1) && is_numeric($n2);
}

function multiplicar ($n1,$n2){
    if(validar($n1,$n2))  return $n1 * $n2;
    else echo "valor Invalido";
}

function subtrair($n1,$n2){
    if(validar($n1,$n2))  return $n1 - $n2;
    else echo "valor Invalido";
}

function somar($n1,$n2){
    if(validar($n1,$n2))  return $n1 + $n2;
    else echo "valor Invalido";
}

function dividir($n1,$n2){
    if(validar($n1,$n2))  return $n1 / $n2;
    else echo "valor Invalido";
}
    


switch ($op){
    
    case 'subtração ';
        echo subtrair($n1, $n2);
        break;
    case 'multiplicação ';
        echo multiplicar ($n1, $n2);
        break;
    case 'divisão ';
        echo dividir ($n1, $n2);
        break;
        case 'soma ';
        echo somar($n1, $n2);
        break;
}
?>