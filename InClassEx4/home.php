<?php session_start(); ?>
<!DOCTYPE html>
<html>
 <head>
  <title>In-Class Exercise 4</title>
 </head>
 <body>
<?php
	if (!isset($_SESSION["username"])):
		$_SESSION["error"] = "You have not logged in. Please log in first.";
		header("Location: login.php");
	endif;
	$derp = $_SESSION["username"];	
	echo "Welcome $derp!";
	unset($_SESSION["username"]);
?>
 </body>
</html>
