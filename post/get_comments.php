<?php
require("../connDB.php");
$database = new Database();
$db = $database->connessione();

$query= "SELECT * FROM commenti WHERE post='$post' " ;


$x = $db->prepare($query);
$x->execute();

    while($row = $x->fetch(PDO::FETCH_ASSOC)){
        $commento = array(
            "nome_utente" => $row["nome_utente"],
            "commento" => $row["commento"],
            "data_ora" => $row["data_ora"]
        );
        
        echo "<b>". $row["nome_utente"]."</b>".":";

        echo " ". $row["commento"];
        echo " (". substr($row["data_ora"],0,10).")<br>";
    }
    
?>