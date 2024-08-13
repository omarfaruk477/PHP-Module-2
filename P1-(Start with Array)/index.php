<?php
if (file_exists( __DIR__ .'/autoload.php')){
    require_once __DiR__ .'/autoload.php';
}

echo "Array-1";
echo "<pre>";
print_r ($foods);
echo "</pre><br><br>";

// Indextd array  
echo "<br><br>Indextd Array"; 
echo "<pre>";    
print_r($cars1);
echo "</pre>";


// Associative Array
echo "<br><br>Associative Array<br>"; 
echo "</pre>";
print_r($car2);
echo "</pre><br><br>";
// or
echo "</pre>";
echo $car2['brand'];
echo "</pre>";


// Multidimensional Arrays
echo "<br><br>Multidimensional Arrays<br>";
echo "</pre>";
echo $cars3[0][1];
echo "</pre>";


?>