<!-- Muhammad Reyhan Asshidiq Djajasasmita -->
<!-- 21102126 / MM4 -->

<?php
// ! To create constant, use the define() function

//* define(name, value, case-insensitive);

// * Case sensitive
// define("GREETING", "Welcome to W3Schools.com!");
// echo GREETING;

//* Case insensitive
// echo("<br>");
// define("GREETING", "Welcome to W3Schools.com!", true);
// echo greeting;

// * PHP const keyword
echo ("<br>");
const MYCAR = "Volvo";
echo MYCAR;

// * PHP const Arrays
echo ("<br>");
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];


// * Constants are Global
echo ("<br>");
define("GREETING", "Welcome to W3Schools.com!");

function myTest()
{
    echo GREETING;
}

myTest();

?>