 <!-- Muhammad Reyhan Asshidiq Djajasasmita -->
 <!-- 21102126 - MM4 -->

<?php
$doa = "Bismillah";
$name = "Reyhan Asshidiq";
$dream = "Full Stack Developer";

echo "$doa, <br> saya $name berjuang menjadi $dream <br>";
$a = 5;
$b = 4;
echo $a + 4 * $b;


// Contoh Variabel Global
$y = 5; // global scope
function myTest()
{
    $x = 5; // global scope
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable y outside function is: $y</p>";


// Contoh Variabel Lokal
function myTest2() {
    $i = 9; // local scope
    echo "<p>Variable i inside function is: $i</p>";
  }
  
  myTest2();
  
  // Akan error karena i berada di dalam function
  echo "<p>Variable i outside function is: $i</p>";

// Contoh Variabel Global di dalam Array
$c = 5;
$d = 10;

function myTest3() {
    $GLOBALS['d'] = $GLOBALS['c'] + $GLOBALS['d'];
}

myTest3();
echo $d; // Output nya akan 15


?>