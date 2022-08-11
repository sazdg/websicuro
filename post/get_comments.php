<?php
require("../connDB.php");
$database = new Database();
$db = $database->connessione();

$query= "SELECT * FROM commenti WHERE post='$post' " ;


$x = $db->prepare($query);
$x->execute();

//$esiste = $x->rowCount();
$commenti=array();

//if($esiste > 0){
    while($row = $x->fetch(PDO::FETCH_ASSOC)){
        $commento = array(
            "nome_utente" => $row["nome_utente"],
            "commento" => $row["commento"],
            "data_ora" => $row["data_ora"]
        );
        array_push($commenti, $commento);
    }
    if($commenti){

    echo json_encode($commenti);

    } else {
        echo "errore";
    }
        



?>