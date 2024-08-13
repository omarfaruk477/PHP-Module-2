## Playing with Data Part 01 ( Start with Array )

    - In PHP, there are three types of arrays:
        1. - Indexed arrays - Arrays with a numeric index
        2. - Associative arrays - Arrays with named keys
        3. - Multidimensional arrays - Arrays containing one or more arrays

### Indexed arrays

    - In indexed arrays each item has an index number.
    - By default, the first item has index 0, the second item has item 1, etc.
    - Example:
       $cars = array("Volvo", "BMW", "Toyota");
       var_dump($cars);

### Associative Arrays

    - Associative arrays are arrays that use named keys that you assign to them.
    - Example:
      $car = array(
      "brand"   =>  "Ford",
      "model"   =>  "Mustang",
      "year"    =>  1964
      );

      var_dump($car);
        // or
      echo $car['brand'];

### Multidimensional Arrays

    - A multidimensional array is an array containing one or more arrays.
    - PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.
    - Example:
        $cars = array (
        array ("Volvo",22,18),
        array ("BMW",15,13),
        array ("Saab",5,2),
        array ("Land Rover",17,15)
        );

        echo $cars3[0][1];
