<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/site.css">
</head>
<body>
    <?php

    //https://www.php.net/manual/pt_BR/control-stuctures.switch.php

    $mes = 3;

    switch($mes){
        case 1: //se (estrutura de condição q roda mais rápido)
            echo "Janeiro";
        break;
        case 2:
            echo "Fevereiro";
        break;
        case 3: 
            echo "Março";
        break;
        default:  //senao 
            echo "Mês inválido";
    }

    /*3 laços for; while; do while (estrutura ENQUANTO ou FOR)

    $i++ $i= $i+1 ou $i+=2

    
    for($i;$i<=10;$i++){
        echo "$i <br />";
    }

    $i = 1;
    while($i<=10){
        echo "$i <br />";
        $i++;
    }
    

    $i=11;
    do{
        echo "$i <br />";
        $i++;
    }while($i<=10);

*/
    
/* EXERCÍCIO 1:
    Escreva os números de 0 a 100 pares 

    for($i=0; $i<=100; $i+=2){
        echo "$i <br />"
    }

    EXERCÍCIO 2:
    Escreva os números pares com a cor azul, e os ímpares com vermelho
*/

    for($i=0; $i<=100; $i++){
        if ($i % 2 == 0 ){ //% se o resto da divisão por 2 for 0 
            echo "<p class='par'> $i </p>";
        }
        else {
            echo "<p class='impar'> $i </p> ";
        }
    }

    ?>
</body>
</html>