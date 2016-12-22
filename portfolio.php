<!DOCTYPE html>
<html lang="en">
<head>
	<title>Portfolio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Armata|Noticia+Text:400i" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="galleria/galleria-1.5.1.min.js"></script>         
</head>
<body>

<div class="container">

<header>

<h1>Portfolio</h1>

<?php include "inc/nav.inc"; ?>

<div class="galleria">
    <img src="images/tide.jpg" alt="Tidal flats">
    <img src="images/star-trails.jpg" alt="Star trails">
    <img src="images/nightsky.jpg" alt="Night sky">
</div>

<article id="links">

<a href="http://www.urcsc170.org/jzhang/lab01/">Lab 1</a>

<h2>This was an introductory lab to CSC 174.</h2>

<a href="http://www.urcsc170.org/jzhang/lab02/">Lab 2</a>

<h2>Lab 2 covered PHP includes.</h2>

<a href="http://www.urcsc170.org/jzhang/lab07/">Lab 7</a>

<h2>Lab 7 covered web fonts. We used Google custom fonts.</h2>

</article>

<script>
(function() { 
    Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
    Galleria.run('.galleria');
}());
</script>

<?php include "inc/footer.inc"; ?>

</div>

</body>
</html>