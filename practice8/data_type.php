<!-- Muhammad Reyhan Asshidiq Djajasasmita -->
<!-- 21102126 - MM4 -->

<?php
$x = 5;
var_dump($x);
echo"<br>";

// PHP String
$a = "Hello World!";
$b = "Hello Reyhan!";

var_dump($a);
echo"<br>";
var_dump($b);
echo"<br>";

// PHP Integer
$c = 5985;
var_dump($c);
echo"<br>";

// PHP Float
$d = 10.365;
var_dump($d);
echo"<br>";

// PHP Boolean
$e = true;
var_dump($e);
echo"<br>";

// PHP Array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo"<br>";

// PHP Object
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a". $this->color ."". $this->model. "!";
    }
}

$myCar = new Car("red","Volvo");
var_dump($myCar);
echo"<br>";

// End of PHP Object


// PHP NULL Value
$x = "Hello world!";
$x = null;
var_dump($x);
echo"<br>";

// Change Data Type
$i = 5;
var_dump($i);
echo"<br>";

$i = "Hello";
var_dump($i);
echo"<br>";

$y = 5;
$y = (string) $y;
var_dump($y);

?>