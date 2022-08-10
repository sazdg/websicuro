<?php

require("./connDB.php");
$nome = $_GET["nome"];
$email = $_GET["email"];
$commento = $_GET["commento"];
$post = $_GET["post"];

$database = new Database();
$db = $database->connessione();

$query = "INSERT INTO commenti (commento, nome_utente, email_utente, post) VALUES ('$commento', '$nome', '$email', '$post');";

$x = $db->prepare($query);
$x->execute();

if($x){
        echo "You sent successfully your review! Thank you!";
    } else {
        echo "smth went wrong ugh (commento.php)";
    }

?>