<?php 

function CalcularMedia ($nota1,$nota2,$nota3){

    return ($nota1 + $nota2 + $nota3)/3; 
}
$valor = CalcularMedia(5,8,10);
echo " A media do aluno é:$valor";