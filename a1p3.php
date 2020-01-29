<!-- Jaspreet Singh Kaberwal-->
<!-- Assignment 1 -->

<!-- Part 3(A) -->

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>
<?php

	$text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
	Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
	Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";

	echo $text;
	
	$str_array = explode(' ',$text);
	sort($str_array);

	echo "<p> Sorted List: </p><br>";
	echo implode(' ',$str_array);
	echo "<br><br>";

	// Part 3(B)

	function uniqueChar($str){
		//for loop
		for($i = 0; $i < strlen($str); $i++)
		{
			for($j = $i + 1; $j < strlen($str); $j++)
			{
				if($str[$i]== $str[$j]){
					return true;
				}
			}
		}
		return false;
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(!empty($_POST['firstname'])){

			$match = uniqueChar($_POST['firstname']);

			if($match == true){
				echo"<strong>String has duplicate character</strong>";
			}else{
				echo"<strong>String has no duplicate character</strong>";
			}
		}else{
			echo "</strong>Enter String</strong>";
		}
	}

?>
