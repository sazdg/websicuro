<?php

require("./connDB.php");
require("./functions.php");

if(empty($_GET["nome"]) || empty($_GET["email"]) || empty($_GET["commento"]) || empty($_GET["post"])) {

    $n = $_GET["post"];
    echo "<script>alert('Compila i campi richiesti')</script>";
    echo("<script>window.location = 'post/post" . $n . ".php';</script>");

} else {
    
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

header('Location: ./post/post' . $post . '.php');

}
?>