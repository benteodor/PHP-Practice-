<?php
# 4 Scalar Types

# bool - true / false

$completed = true;

# int - 1,2,3,-8 (no decimal)

$score = 75; 

# float - 1.5,0.1

$price = 1;

# string - "Gio" "Hello World"

$name = "Teodor";

echo $completed; 
echo $score;
echo $price;
echo $name;

# 4 Compound Types 

# array 

$companies = [1, 2, 3, 0.5, -9.2, "b", true];
echo $companies;

# object 
# callable 
# iterable 

# 2 Special Types 

#resource 
#null 

/*function sum($x, $y) {
    return $x + $y;
}
echo sum(2, 3);*/

$x = (int) "5";

var_dump($x);

