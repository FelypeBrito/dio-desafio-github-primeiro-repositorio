<?php

$funcionario = "Felype Brito Rocha";
$salario = 1200;
$aumento = "41%";

switch($aumento){
    case '0%':
        $resultado = $salario * 1;
        break;
    case '10%':
        $resultado = $salario * 1.1;
        break;
    case '25%':
        $resultado = $salario * 1.25;
        break;
    case '33%':
        $resultado = $salario * 1.33;
        break;
    case '41%':
        $resultado = $salario * 1.41;
        break;
    case '50%':
        $resultado = $salario * 1.50;
        break;               
}

    echo "Funcionário: $funcionario</br>";
    echo "Salário atual: R$$salario</br>";
    echo "Aumento: $aumento</br>";
    echo "Novo salário: R$$resultado</br>";



?>