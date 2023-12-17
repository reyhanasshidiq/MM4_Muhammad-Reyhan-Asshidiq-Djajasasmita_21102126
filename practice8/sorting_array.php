<!-- Muhammad Reyhan Asshidiq Djajasasmita -->
<!-- 21102126 / MM4 -->

<!-- 
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key    
 -->

<?php
//* Sort Array in Ascending Order - sort()
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
echo ("<br>");


//* Sort Array in Descending Order - rsort()
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
echo ("<br>");

//* Sort Array Ascending Order, According to Value = asort()
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
asort($age);
echo ("<br>");

//* Sort Array Ascending Order, According to Key = ksort()
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
ksort($age);
echo ("<br>");

//* Sort Array (Ascending Order), According to Value = arsort()
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
arsort($age);
echo ("<br>");

//* Sort Array (Descending Order), According to Key = krsort()
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
krsort($age);
echo ("<br>");


?>