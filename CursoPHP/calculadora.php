<?php
    //CRiação de variáveis
 
    $v1 = 10;
    $v2 = 5;
    $operador = '/';

    echo "Os números são: $v1 e $v2";
    echo "</br></br>"; 

    switch($operador){//Váriavel de teste
        case '+':
            $resultado = $v1 + $v2;
            break;  //quebra ou para o código
        case '-':
            $resultado = $v1 - $v2;
            break;
        case '*':
            $resultado = $v1 * $v2;
            break;  
        case '/':
            $resultado = $v1 / $v2;
            break;  
    }

    echo "O resultado é $resultado"

?>