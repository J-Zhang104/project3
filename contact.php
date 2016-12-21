<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Form</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Armata|Noticia+Text:400i" rel="stylesheet"> 
	<script type="text/javascript">
   <!--
      function validateEmail()
      {
         var emailID = document.myForm.EMail.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
            document.myForm.EMail.focus() ;
            return false;
         }
         return( true );
      }
   //-->
	</script>
</head>
<body>

<div class="container">

<header>

<h1>Contact Form</h1>

<?php include "inc/nav.inc"; ?>

</header>

<div class="contact-form">

<img id="img5" src="images/747894.jpg" alt="lavender">

<h2>Leave a comment!</h2>

<form action="database-write.php" method="post"> 

<div>
<label for="firstname">Name:</label>
<input type="text" name="name"><br>
</div>

<div>
<label for="email">Email:</label>
<input type="text" name="email"><br>

</div>

<div>
<label for="telephone">Phone Number: </label>
<input type="text" name="phonenumber"><br>
</div>

<div>
<label for="textarea">Message: </label>
<textarea name="comment"></textarea>
</div>

<input type="submit" value="Send">

</form><br>

Or go <a href=".">Back to the Index</a>

</div>

<?php include "inc/footer.inc"; ?>

</div>

</body>
</html>