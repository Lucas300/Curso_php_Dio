<?php 
 function imprimirPosicao($posicao) {
        if ($posicao == 1) {
            echo "Primeira posição";
        }
        else if($posicao == 2){
            echo "Segunda posição";
        }
        else if($posicao == 3){
            echo "Terceira posição";
        }
        else if($posicao == 4){
            echo "Quarta posição";
        }
        else if($posicao == 5){
            echo "Quinta posição";
        }else {
            echo "Utilize uma posição valida";
        }
    }
    $posicao = 5;
    imprimirPosicao($posicao);
?>


<?php
/*
$posicao = 1;
function imprimirPosicao($posicao)
{
    switch ($posicao) {
        case 1:
            echo "Primeira posição";
        break;
        case 2:
            echo "Segunda posição";
        break;
        case 3:
            echo "Terceira posição";
        break;
        case 4:
            echo "Quarta posição";
        break;
        case 5:
            echo "Quinta posição";
        break;
        default:
            echo "Utilize uma posição valida";
    }
}
//chamando a função
imprimirPosicao($posicao);
*/
?>