<?php
require("../connDB.php");
require("../functions.php");
$database = new Database();
$db = $database->connessione();

$query= "SELECT * FROM commenti WHERE post= :post " ;

$x = $db->prepare($query);
$x->bindParam(":post", $post);
$x->execute();

    while($row = $x->fetch(PDO::FETCH_ASSOC)){
        $commento = array(
            "nome_utente" => $row["nome_utente"],
            "commento" => $row["commento"],
            "data_ora" => $row["data_ora"]
        );
        $nome = sanifica_valida($row["nome_utente"]);
        $commento = sanifica_valida($row["commento"]);
        echo "<b>". $nome."</b>:";

        echo " ". $commento;
        echo " (". substr($row["data_ora"],0,10).")<br>";
    }
    
?>