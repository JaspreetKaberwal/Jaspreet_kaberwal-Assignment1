<!-- Jaspreet Singh Kaberwal-->
<!-- Assignment 1 -->

<!-- Part 1 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment1</title>
</head>
<body>
    <?PHP
    //creating variables
    $base=4.4444;
    $height=4.4444;
    
    //calculating area
    $area=0.5*$base*$height;

    //rounding area to 2 decimal
    $area=round($area,2);
    
    //displaying the area using string concatanaton operator
    echo("The area of the triangle is: ". $area . "<br>");

    //Creating a constant
    define("MY_NAME", "Jaspreet kaberwal"."<br>");
    echo MY_NAME;

    //converting to uppercase using string function
    echo strtoupper(MY_NAME);

    //displaying text using strong tag
    echo ("My first name is "."<strong>".MY_NAME."</strong>");

    ?>
</body>
</html>