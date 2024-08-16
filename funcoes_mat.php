<?php

    //Nós como desenvolvedores criamos e utilizamos funções  

     //declaração das funções
    function somar(){
        $numero1 = 4;
        $numero2 = 3;
        $soma = $numero1 + $numero2;
        echo "Total da soma: $soma";
    }

    function somarComParametro($numero1,$numero2){
        $soma = $numero1 + $numero2;
        echo "Total da soma com parâmetro: $soma";
    }


?>