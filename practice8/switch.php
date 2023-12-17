<!-- Muhammad Reyhan Asshidiq Djajasasmita -->
<!-- 21102126 / MM4 -->

<?php

//* Contoh 1
$favcolor = "red";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

//* Contoh 2
echo ("<br>");

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
    case "blue":
        "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}


//* Contoh 3 Default
$d = 4;
echo ("<br>");
switch ($d) {
    case 6:
        echo "Today is Saturday";
        break;
    case 0:
        echo "Today is Sunday";
        break;
    default:
        echo "Looking forward to the Weekend";
}


//* Contoh 4
echo ("<br>");
$d = 4;

switch ($d) {
    default:
    echo "Looking forward to the Weekend";
    break;
    case 6:
        echo "Today is Saturday";
        break;
        case 0:
            echo "Today is Sunday";
        }
        
        
        
// * Contoh 5
echo ("<br>");
$d = 3;

switch ($d) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "The weeks feels so long!";
        break;
    case 6:
    case 0:
        echo "Weekends are the best!";
        break;
    default:
        echo "Something went wrong";
}

?>