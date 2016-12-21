<?php

$firstname = Trim(stripslashes($_POST['firstname']));
$lastname = Trim(stripslashes($_POST['lastname']));
$phone = Trim(stripslashes($_POST['phone']));

$dbhost = "localhost";
$dbuser = "urcscon3_yzh167";
$dbpass = "coffee1N/!";
$dbname = "urcscon3_yzh167";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$query = "INSERT INTO friends (first_name, last_name, phone) VALUES ('$firstname', '$lastname', '$phone')";

$result = mysqli_query($connection, $query);

$NumberOfRowsAffected = mysqli_affected_rows($connection);
if($NumberOfRowsAffected < 1 ) {
die('No records were written to the database. Waaaa!');
}

mysqli_close($connection);

header("Location: database-read.php");

?>