<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sito web non sicuro">
    <meta name="author" content="sdg, sgc">
    <link rel="stylesheet" href="../style.css">
    <title>Progetto Web Sicuro</title>
</head>

<body>
    <nav>
        <span><a href="../index.html">HOMEPAGE</a></span>
        <span><a href="../login.html">LOGIN</a></span>
    </nav>
    <img src="../images/music.png" class="titolo">
    <h2 class="txtTitolo">CURRENTS</h2>
    <div class="txtPost">
    <p>After two Tame Impala albums that centered on Kevin Parker's withdrawal from society, he has entered the stream of life
    on Currents. And he's lonelier than ever. The bemused, occasionally melancholy isolation that defined Innerspeaker and
    Lonerism has metastasized into heartbreak, bitterness, regret—feelings that can actually kill you if left untended. This
    is a breakup record on a number of levels—the most obvious one being the dissolution of a romantic relationship, but
    also a split with the guitar as a primary instrument of expression and even the end of the notion that Tame Impala is
    anything besides Kevin Parker and a touring band of hired guns. Because of these shifts, the question of whether
    Currents is better than his first two albums is beside the point: it stands completely apart.
</p>
    <p>Parker has never minced words about his intentions, and there's a song here called "Yes I'm Changing". The music
    communicates even more clearly: Currents' opening salvo "Let It Happen" has barely any audible guitars and makes
    ingenious use of a passage where it sounds like a half-second loop is accidentally stuck on repeat. It's a despairing,
    open-ended psych-disco hybrid whose closest modern analog is Daft Punk's Random Access Memories—a record that cast
    disco, yacht rock, and dance pop as shared founts of old-school, hands-on music-making. In this sense, the album
    reimagines and expands Tame Impala's relationship to album rock—like Loveless or Kid A or Yankee Hotel Foxtrot, it's the
    result of a supernaturally talented obsessive trying to perfect music while redefining their relationship to
    album-oriented rock. There's more care and nuance put into the drum filtering on "Let It Happen" than most bands manage
    in an entire career of recording.</p>
</div>
<div class="frmComment">
    <form method="GET" action="../commento.php">
        <input type="hidden" name="post" value="2"></input>
        <label>Nome: </label><input type="text" name="nome" id="nome" required><br>
        <label>Email: </label><input type="email" name="email" id="email" required><br>
        <label>Commento</label><textarea name="commento" id="commento" placeholder="Leave a comment" required></textarea><br>
        <input type="submit" value="Submit">
    </form>
    </div>
    <div class="txtPost">
<h2>COMMENTI</h2>
<?php
$post=2;
  require("get_comments.php");
?>


</div>
    <footer>
        <p>Progetto Web Sicuro <br> CIME 2021/2022</p>
    </footer>
</body>

</html>