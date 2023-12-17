<!-- Muhammad Reyhan Asshidiq Djajasasmita -->
<!-- 21102126 / MM4 -->

<?php

//* Contoh Function
function myMessage()
{
    echo "Hello Reyhan !";
}

myMessage();
echo ("<br>");

//* Function Arguments
echo ("<br>");
function familyName($fname)
{
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

//* Function Arguments 2
echo ("<br>");
function family($fname, $year)
{
    echo "$fname Refsnes. Born in $year <br>";
}

family("Hege", "1975");
family("Stale", "1978");
family("Kai Jim", "1983");


//* Function Default Arguments Value
echo ("<br>");
function setHeight($minheight = 50)
{
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);


//* Function - Returning Values
echo ("<br>");
function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

//* Function - Returning Values Contoh 2
echo ("<br>");

function add_five(&$value)
{
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;


//* Function - Variable Number of Arguments
echo ("<br>");
function sumMyNumbers(...$x)
{
    $n = 0;
    $len = count($x);
    for ($i = 0; $i < $len; $i++) {
        $n += $x[$i];
    }
    return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;


//* Function - Variable Number of Arguments Contoh 2
echo ("<br>");
function myFamily($lastname, ...$firstname)
{
    $txt = "";
    $len = count($firstname);
    for ($i = 0; $i < $len; $i++) {
        $txt = $txt . "Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;


//* Function - Strict
echo ("<br>");
function addNumbers(int $a, int $b)
{
    return $a + $b;
}
echo addNumbers(6, "6 days");


//* Function - Return Type Declarations
echo ("<br>");

?>