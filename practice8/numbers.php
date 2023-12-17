<!-- Muhammad Reyhan Asshidiq Djajasasmita -->
<!-- 21102126 / MM4 -->

<!-- //! There are three main numeric type in PHP : -->
<!-- //* integer
//* float
//* number string -->


<!-- Contoh 1 -->
<?php
$a = 5;
$b = 5.34;
$c = "25";

var_dump($a, $b, $c);
?>

<br>
<?php
//* integer
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

?>

<br>
<?php
//* float

$x = 10.365;
var_dump(is_float($x));

?>

<br>
<?php
//* Infinite

$x = 1.9e411;
var_dump($x);

?>

<br>
<?php
//* Numerical Strings
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

?>

<br>
<?php
//* Casting Strings and Float to Integers

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

?>