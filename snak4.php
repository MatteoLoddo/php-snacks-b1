<?php
// creo array vuoto
$listaNumeri = [];
// creo ciclo che mi pusha il numero finche $listaNumeri non raggiunge size =15 
do{
    $casualNumber = rand(0, 15);
    // condizione in cui se il numero esiste nell array $listaNumeri ritorna invece se non esiste lo pusha e continua
    if(in_array($casualNumber , $listaNumeri, true)){
    }else{
    array_push($listaNumeri, $casualNumber);
    }
}while (count($listaNumeri) < 15);
var_dump(count($listaNumeri));
var_dump($listaNumeri)


?>