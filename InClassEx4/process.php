<?php session_start(); ?>
<!DOCTYPE html>
<html>
 <head>
  <title>In-Class Exercise 4</title>
 </head>
 <body>
<?php
	$fileptr = file("users.txt");
	$allusers = array();
	foreach($fileptr as $oneuserpasswd):
		$ol = strip_tags($oneuserpasswd);
		$oneline = explode(":", $ol);
		var_dump($oneline);
		$allusers[$oneline[0]] = rtrim($oneline[1]);
	endforeach;
	if (array_key_exists($_POST["username"], $allusers)):
		if ($allusers[$_POST["username"]] == $_POST["password"]):
			$_SESSION["username"] = $_POST["username"];
			header("Location:home.php");
		else:
			$_SESSION["error"] = "Your id or password is incorrect. Please try again.";
			header("Location:login.php");
		endif;
	else:
		$_SESSION["error"] = "Your id or password is incorrect. Please try again.";
		header("Location:login.php");
	endif;
?>
 </body>
</html>
