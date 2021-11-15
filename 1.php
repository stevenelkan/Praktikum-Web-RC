<?php

    $A=10;
    $B=5;
    
    echo "Bilangan 1 = $A <br>";
    echo "Bilangan 2 = $B <br>";
    echo "<br> Berikut merupakan hasil dari setiap operasi <br>";
    
    function penjumlahan($a, $b){
        $hasil = $a + $b;
        echo "<br> PENJUMLAHAN <br>";
        echo "Operator : + <br>";
        echo "Hasil : $hasil <br>";
    }

    function pengurangan($a, $b){
        $hasil = $a - $b;
        echo "<br> PENGURANGAN <br>";
        echo "Operator : - <br>";
        echo "Hasil : $hasil <br>";
    }

    function perkalian($a, $b){
        $hasil = $a * $b;
        echo "<br> PERKALIAN <br>";
        echo "Operator : * <br>";
        echo "Hasil : $hasil <br>";
    }

    function pembagian($a, $b){
        $hasil = $a / $b;
        echo "<br> PEMBAGIAN <br>";
        echo "Oerator : / <br>";
        echo "Hasil : $hasil <br>";
    }

    function modulo($a, $b){
        $hasil = $a % $b;
        echo "<br> MODULO <br>";
        echo "Operator : % <br>";
        echo "Hasil : $hasil <br>";
    }

    penjumlahan($A, $B);
    pengurangan($A, $B);
    perkalian($A, $B);
    pembagian($A, $B);
    modulo($A, $B);
    
?>