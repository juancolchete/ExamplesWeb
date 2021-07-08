<?php
$caio=360;
$listaNomes = ["Juan","Caio","Gilberto","Joana"];
$listaTamanho = count($listaNomes);
//Imprimindo arrais com for
for ($i=0;$i < $listaTamanho;$i++){
    echo $listaNomes[$i]."<br>";
}
//Imprimindo arrais com while
$j=0;
while($j < $listaTamanho){
    echo $listaNomes[$j]."<br>";
    $j = $j + 1;
}