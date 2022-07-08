<?php
$partita = [
    "casa" => "",
    "ospite" => "",
];
$campionato = [
];

do {
    $listNumber = [];
// genero 2 numeri casuali e li pusho in un array vuoto
for($i=0 ; $i < 2 ; $i++){
    $randomNumber = random_int(0, 10);
    $listNumber[] = $randomNumber;
}
// dichairo le mie due key nell array partita utilizzando la lista dei numeri generati random
$partita["casa"] = $listNumber[0];
$partita["ospite"] = $listNumber[1]; 
$campionato[] = $partita;

}while (count($campionato) < 10);







var_dump( $campionato, )


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    
</body>
</html>