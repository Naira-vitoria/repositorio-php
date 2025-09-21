<?php
function verificaParOuImpar($numero) {
    if ($numero % 2 == 0) {
        return "$numero é PAR";
    } else {
        return "$numero é ÍMPAR";
    }
}


echo verificaParOuImpar(10); 
echo "<br>";
echo verificaParOuImpar(7); 
?>