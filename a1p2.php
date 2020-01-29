<!-- Jaspreet Singh Kaberwal-->
<!-- Assignment 1 -->

<!-- Part 2 -->

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {  

  $fne = $_POST["firstname"]; 
  $lne = $_POST["lastname"];
  $age = $_POST["age"];

  // empty field validation
  if (empty($fne) || empty($lne) || empty($age)) { 
    echo "<p>Blank entry not allowed</p>";
  }
  // radio button validation
  elseif(!isset($_POST['newsletter']))
  { 
	  echo "No radio buttons checked."; 
  }
  else{
	  	echo "<p>User Details</p>";
		echo "<br>First Name: ".$fne;
		echo "<br>Last Name: ".$lne;
		echo "<br>Age: ".$age;;   		
  }
		
}
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
		label {
			font-weight: bold;
			color: #300ACC;
		}
	</style>
</head>

<body>

	<form action="a1p2.php" method="post">

		<fieldset>
			<legend>Account Creation:</legend>

			<!-- making First Name field sticky form -->
			<p><label>First Name: <input type="text" name="firstname" size="20" maxlength="40"
						value="<?php if (isset($fne)) echo $fne ?>"></label></p>

			<p><label>Last Name: <input type="text" name="lastname" size="20" maxlength="40"></label></p>

			<p><label>Age: <input type="text" name="age" size="20" maxlength="40"></label></p>

			<p><label for="newsletter">Subscribe to newsletter: </label><input type="radio" name="newsletter" value="Y">
				Yes <input type="radio" name="newsletter" value="N"> No</p>

		</fieldset>

		<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

	</form>

</body>

</html>