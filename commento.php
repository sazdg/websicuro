<?php

require("./connDB.php");
require("./functions.php");


$nome = sanifica_valida($_GET["nome"]);
$email = sanifica_valida($_GET["email"]);
$commento = sanifica_valida($_GET["commento"]);
$post = sanifica_valida($_GET["post"]);

$database = new Database();
$db = $database->connessione();

$query = "INSERT INTO commenti (commento, nome_utente, email_utente, post) VALUES (:commento, :nome, :email, :post)";

$x = $db->prepare($query);
$x->bindParam(":commento", $commento);
$x->bindParam(":nome", $nome);
$x->bindParam(":email", $email);
$x->bindParam(":post", $post);
$x->execute();



if($x){
    switch($post) {
        case 1:
            header('Location: ./post/post1.php');
        break;
        case 2:
            header('Location:./post/post2.php');
        break;
        case 3:
            header('Location: ./post/post3.php');
        break;
     }
    } else {
        echo "smth went wrong ugh (commento.php)";
    }

?>