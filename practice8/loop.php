<!-- Muhammad Reyhan Asshidiq Djajasasmita -->
<!-- 21102126 / MM4 -->

<?php

//* While loop
$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
}
echo ("<br>");

//* While loop break
$i = 1;
while ($i < 6) {
    if ($i == 3)
        break;
    echo $i;
    $i++;
}
echo ("<br>");

//* While loop continue
$i = 0;
while ($i < 6) {
    $i++;
    if ($i == 3)
        continue;
    echo $i;
}
echo ("<br>");

//* While loop continue alternative
$i = 1;
while ($i < 6):
    echo $i;
    $i++;
endwhile;
echo ("<br>");

//* While loop step 10
$i = 0;
while ($i < 100) {
    $i += 10;
    echo $i;
    echo ("<br>");
}
echo ("<br>");

//* Do While loop 1
echo ("<br>");
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

//* Do While loop 2
echo ("<br>");
$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

//* For loop 1
echo ("<br>");
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

//* For loop 2
echo ("<br>");
for ($x = 0; $x <= 100; $x += 10) {
    echo "The number is: $x <br>";
}

//* Foreach loop 1
echo ("<br>");
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}

//* Foreach loop 2
echo ("<br>");
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $val) {
    echo "$x = $val<br>";
}

//* Break
echo ("<br>");
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "The number is: $x <br>";
}

//* Continue
echo ("<br>");
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>";
}

//* Break and Continue in While loop 1
echo ("<br>");
$x = 0;

while ($x < 10) {
    if ($x == 4) {
        break;
    }
    echo "The number is: $x <br>";
    $x++;
}

//* Break and Continue in While loop 2
echo ("<br>");
$x = 0;

while ($x < 10) {
    if ($x == 4) {
        $x++;
        continue;
    }
    echo "The number is: $x <br>";
    $x++;
}

?>