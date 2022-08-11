<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sito web non sicuro">
    <meta name="author" content="sdg, sgc">
    <link rel="stylesheet" href="../style.css">
    <title>Progetto Web NON Sicuro</title>
</head>
<body>
    <nav>
        <span><a href="../index.html">HOMEPAGE</a></span>
        <span><a href="../login.html">LOGIN</a></span>
    </nav>
    <img src="../images/music.png" class="titolo">
<h2 class="txtTitolo">THE SLOW RUSH</h2>
<div class="txtPost">
<p>For Kevin Parker, perfectionism is a lonely thing. The fastidious Tame Impala mastermind often copes with his self-isolation and doubt through stonerisms, highly portable mantras like “let it happen” and “yes I’m changing” and “gotta be above it” (said three times fast to ward off bad vibes). Their inverse is the negativity Parker’s trying to keep at bay in his head: “It feels like we only go backwards,” “But you’ll make the same old mistakes,” “You will never come close to how I feel.” It is easy to get lost in all the layers of groovy, time-traveling technicolor surround sound, particularly because Parker isn’t really trying to be clever or literary, but the internal tug of war within the Australian musician’s lyrics—between trying to better yourself and stay present, or succumbing to your own worst thoughts—is part of what keeps fans faithfully returning to Tame’s three albums, perhaps subconsciously. The repetition of phrases pairs well with the dubby, trance-like aspects of the music. Think of it as psychedelia for people with meditation apps and vape pens: Instead of opening your mind, you’re just trying to silence it.</p>
<p>On Tame Impala’s fourth album, Parker addresses the eternal enemy of perfectionists everywhere: time. He struggled with it himself, considering The Slow Rush arrives five years after Currents, the album that made his one-man band more famous than he could’ve imagined. Parker has toured arenas, headlined mega-festivals, worked with Travis Scott and Kanye West, more or less ditched the skinny scarves, and had the rare honor of being covered by Rihanna (and making her dance like this). He intended to release The Slow Rush just before headlining Coachella last April, but he didn’t feel like it was ready yet. You could sense that flux in the album rollout: First single “Patience” hinted at a yacht-rock direction but ultimately didn’t make the cut; second single “Borderline” was trimmed and beefed up for the LP; and the whole thing was remastered following a November 2019 listening party, where he couldn’t stop noticing things he wanted to tweak. Given time, Parker will tinker.</p>
</div>
<div class="frmComment">
<form method="GET" action="../commento.php">
    <input type="hidden" name="post" value="1"></input>
    <label>Nome: </label><input type="text" name="nome" id="nome"><br>
    <label>Email: </label><input type="email" name="email" id="email"><br>
    <label>Commento</label><textarea name="commento" id="commento" placeholder="Leave a comment"></textarea><br>
    <input type="submit" value="Submit">
</form>
</div>
<div class="txtPost">
<h2>COMMENTI</h2>
<?php
    $post=1;
    require("get_comments.php");
?>


</div>
<footer>
    <p>Progetto Web Sicuro <br> CIME 2021/2022</p>
</footer>
<?php






?>
</body>
</html>