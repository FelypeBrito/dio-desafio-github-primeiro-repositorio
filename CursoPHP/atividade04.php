<?php

    $peso = 100;
    $altura = 1.52;

    echo "Peso: $peso</br>";
    echo "Altura: $altura</br> ";

    $massa = $peso / ($altura * $altura);
    
    echo "Massa: $massa</br> ";


    $massa = $peso / ($altura * $altura);

    if($massa < 17){
        echo "Muito abaixo do peso";
    }
        else if($massa >= 17 & $massa <= 18.49){
            echo "Abaixo do peso";
        }
            else if($massa >= 18.5 & $massa <= 24.99){
                echo "Peso normal";
            }
                else if($massa >= 25 & $massa <= 29.99){
                    echo "Acima do peso";
                }
                    else if($massa >= 30 & $massa <= 34.99){
                        echo "Obesidade l";
                    }
                        else if($massa >= 35 & $massa <= 39.99){
                            echo "Obesidade ll (Severa)";
                        }
                            else{
                                echo "Obesidade lll (Mórbida)";
                            }

?>