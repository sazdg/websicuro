<?php
require("../connDB.php");
$database = new Database();
$db = $database->connessione();

$query= "SELECT * FROM commenti WHERE post='$post' " ;


$x = $db->prepare($query);
$x->execute();

$esiste = $x->rowCount();
$commenti=array();



if($esiste >= 1){
    while($risulato = $x->fetch(PDO::FETCH_ASSOC)){
        $commento = array(
            "nome_utente" => $x["nome_utente"],
            "commento" => $x["commento"],
            "data_ora" => $x["data_ora"]
        );
        array_push($commenti, $commento);
    }

   echo $commenti; 

} else {
    echo "errore";
}










?>