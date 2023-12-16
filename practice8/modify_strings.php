<!-- Muhammad Reyhan Asshidiq Djajasasmita -->
<!-- // 21102126 - MM4 -->

<?php

// Upper Case
$x = "Hello World!";
echo strtoupper($x);
echo "<br>";

// Lower Case
echo "<br>";
$x = "Hello World!";
echo strtolower($x);

// Replace String
echo "<br>";
$x = "Hello World!";
echo str_replace("World","Reyhan", $x);

// Reverse a String
echo "<br>";
$x = "Hello World!";
echo strrev($x);

// Remove Whitespace
echo "<br>";
$x = " Hello World! ";
echo trim($x);


// Convert String into Array
echo "<br>";
$x = "Hello World!";
$y = explode(" ", $x);
    // use the print_r() function to display the result
    print_r($y);




?>