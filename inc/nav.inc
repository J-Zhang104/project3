<nav>
	<ul id="menu">
		<li><a href="index.php">Home</a></li>
		<li><a href="portfolio.php">Portfolio</a></li>
		<li><a href="contact.php">Contact Form</a></li>
	</ul>
</nav>

<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script>
$(function(){
  $('a').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).addClass('current');
    }
  });
});
</script>