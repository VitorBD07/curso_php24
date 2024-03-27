<?php

    $salario = 1412;
    $desconto = 5;
    $aumento = 10;

    function porcentagem ($salario, $porcentagem){
        $resultado = $salario * ($porcentagem/100);
        return $resultado;
    }

    echo "porcentagem" . porcentagem (1412,10) . "<br>";

    function aumento ($salario, $percent){
        $resultado = $salario + porcentagem($salario, $percent);
        return $resultado;
    }

    echo "seu salário é:" . aumento  (1412,10) ." <br>";

    function desconto ($salario, $percent){
        $resultado = $salario - porcentagem($salario, $percent);
        return $resultado;
    }
    
    echo "seu salário é:" . desconto (1412,5) ." <br>";

    function salario_final($salario, $aumento, $desconto){
        $salario_aumento = aumento ($salario, $aumento);
        $salario_final_com_desconto = desconto ($salario_aumento, $desconto);
        return "seu salario:" . $salario_final_com_desconto . "<br>";

    }
    echo salario_final($salario,$aumento, $desconto);
