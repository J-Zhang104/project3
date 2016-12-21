<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>Portfolio</title>

<!--
	1 ) Reference to the files containing the JavaScript and CSS.
	These files must be located on your server.
-->

<script src="highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
<link rel="stylesheet" href="css/styles.css">

<!--
	2) Optionally override the settings defined at the top
	of the highslide.js file. The parameter hs.graphicsDir is important!
-->

<script type="text/javascript">
hs.graphicsDir = 'highslide/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.fadeInOut = true;
//hs.dimmingOpacity = 0.75;

// Add the controlbar
hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: .75,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});
</script>

</head>

<body>

<div class="container">

<h1>Portfolio</h1>

<?php include "inc/nav.inc"; ?>

<!--
	3) Put the thumbnails inside a div for styling
-->

<div class="highslide-gallery">
<!--
	4) This is how you mark up the thumbnail image with an anchor tag around it.
	The anchor's href attribute defines the URL of the full-size image.
-->
<a href="images/gallery1.jpg" class="highslide" onclick="return hs.expand(this)">
	<img src="images/gallery1.thumb.jpg" alt="Highslide JS"
		title="Click to enlarge" />
</a>

<!--
	5 (optional). This is how you mark up the caption. The correct class name is important.
-->

<div class="highslide-caption">
	Caption for the first image. This caption can be styled using CSS.
</div>


<!-- Repetionion of the above -->
<a href="images/gallery2.jpg" class="highslide" onclick="return hs.expand(this)">
	<img src="images/gallery2.thumb.jpg" alt="Highslide JS"
		title="Click to enlarge" /></a>

<div class="highslide-caption">
	Caption for the second image.
</div>

<a href="images/gallery3.jpg" class="highslide" onclick="return hs.expand(this)">
	<img src="images/gallery3.thumb.jpg" alt="Highslide JS"
		title="Click to enlarge" /></a>

<div class="highslide-caption">
	Caption for the third image.
</div>

</div>

<?php include "inc/footer.inc"; ?>

</div>

</body>
</html>