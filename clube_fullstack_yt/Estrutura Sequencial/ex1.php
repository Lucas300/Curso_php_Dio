



//se a intenção for imprimir 100 vezes apenas um while ja basta
<?php
    $quantidade = 100;
    $i = 0;
    while($i < 100){
        echo "imprimindo...";
        $i++;
    }
?>
// agora se a intenção for imprimir mil vezes 
<?php

$quantidade = 100;
for($i = 0; $i < $quantidade; $i++){
    for($j = 0; $j < $quantidade; $j++){
          echo "imprimindo...";
    }
}
?>
