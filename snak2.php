<?php
$emailExist = key_exists("email", $_GET) ? trim($_GET["email"]) : false;


$nameExist = key_exists("name", $_GET) ? trim($_GET["name"]) : false;


$ageExist= key_exists("age", $_GET) ? trim($_GET["age"]) : false;

$lenghtName = strlen($nameExist);

$accessoValido = true;

var_dump( $emailExist);
var_dump( $nameExist);
var_dump( $ageExist, );

// creo condizione in cui se mancano queste key da accesso negato
if(!$emailExist || !$nameExist || !$ageExist){
    $accessoValido = false;
}else{

/*
if($emailExist = false){
    $accessoValido = false;
};
if($nameExist = false){
    $accessoValido = false;
};
if($emailExist = false){
    $accessoValido = false;
};
*/

// creata condizione in cui se il nome e piu corto di 3 caratteri da accesso negato
if($lenghtName < 3 ){
    $accessoValido = false;
    }else{
    $accessoValido = true;
    }
// condizione in cui chiedendo la posizione di un carattere controllo se esiste all interno della stringa
if(strpos($emailExist, "@") && strpos($emailExist, ".")){
    $accessoValido = true;
}else{
    $accessoValido = false;
}
// condizione in cui se la stringa non e di tipo numerico mi da Accesso Negato
if(!is_numeric($ageExist)){
    $accessoValido=false;
}
}

if($accessoValido == false){
    echo "Accesso Negato";
}else{
    echo "Accesso Approvato";
}




// var_dump($accessoValido);




/*if($accessoValido !=true){
    echo "<h2>Acesso Negato</h2>";

};
*/


?>