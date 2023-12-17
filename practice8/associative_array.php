<!-- Muhammad Reyhan Asshidiq Djajasasmita -->
<!-- 21102126 / MM4 -->

<?php
//* Associative Array
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";
echo ("<br>");


//* Looping Associative Array
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

?>