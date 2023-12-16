<!-- Muhammad Reyhan Asshidiq Djajasasmita -->
<!-- // 21102126 - MM4 -->

<?php

// Slicing
    // Start the slice at index 6 and end the slice 5 positions later:
$x = "Hello World!";
echo substr($x, 6, 5);

// Slice to the End
    // Start the slice at index 6 and go all the way to the end:
echo"<br>";
$x = "Hello World!";
echo substr($x, 6);

// Slice From the End
    // Get the 3 characters, starting from the "o" in world (index -5):
echo"<br>";
$x = "Hello World!";
echo substr($x, -5, 3);

// Negative Length
    // Get the characters starting from the "W" in "World" (index 5) and continue until 3 characters from the end.
echo"<br>";
$x = "Hello World!";
echo substr($x, 5, -3);


?>