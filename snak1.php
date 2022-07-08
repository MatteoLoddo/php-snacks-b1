<?php
$team = [ 
    "Oklahoma City Thunder",
    "Charlotte Hornets",
    "Chicago Bulls",
    "Cleveland Cavaliers",
    "Denver Nuggets",
    "Milwaukee Bucks",
    "Washington Wizards",
    "Oklahoma City Thunder",
    "Portland Trail Blazers",
    "Utah Jazz",
];
$team2 = [ 
    "Indiana Pacers",
    "Los Angeles Lakers	",
    "San Antonio Spurs",
    "Boston Celtics",
    "Miami Heat",
    "Sacramento Kings",
    "Orlando Magic",
    "Philadelphia 76ers",
    "Toronto Raptors",
    "Phoenix Suns",
    ];

$partita = [
];

$campionato = [];

// creo un ciclo che mi pushi l array $partita nell array $campionato
do {
    $listNumber = [];

// genero 2 numeri casuali e li pusho in un array vuoto
for($i=0 ; $i < 2 ; $i++){
    $randomNumber = rand(0, 10);
    $listNumber[] = $randomNumber;
}
// dichairo le mie due key nell array partita utilizzando la lista dei numeri generati random
$partita["casa"] = $listNumber[0];
$partita["ospite"] = $listNumber[1];

$campionato[] = $partita;
// ciclo che si ripete finche la lunghezza di $campionato non e pari a 10
}while (count($campionato) < 10);







// var_dump( $campionato, );



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
    <?php for($i = 0 ; $i < count($campionato) ; $i++){?>
    <div>
        <span><?php echo $team[$i] . " - "?>  </span>
        <span><?php echo $team2[$i] . " | "?> </span>
        <span><?php echo ($campionato[$i]["casa"]) . " - "?>  </span>
        <span><?php echo ($campionato[$i]["ospite"])?></span>
    </div>
    <?php } ?>
</body>
</html>