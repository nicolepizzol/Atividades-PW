<?php

    function Soma($arg1, $arg2){
        $resul= $arg1 + $arg2;
        return $resul;
    }

    $valor = Soma(111, 330);
    echo Soma (34, 234);
    echo "<br>";
    echo $valor;

    function Subtracao($arg1, $arg2){
        $resul= $arg1 - $arg2;
        return $resul;
    }

    $valor = Subtracao(100, 50);
    echo "<br>";
    echo $valor;

    function Divisão($arg1, $arg2){
        $resul= $arg1 / $arg2;
        return $resul;
    }

    $valor = Divisão(500, 25);
    echo "<br>";
    echo $valor;

    function Multiplicacao($arg1, $arg2){
        $resul= $arg1 * $arg2;
        return $resul;
    }

    $valor = Multiplicacao(200, 4);
    echo "<br>";
    echo $valor;

?>