<?php
//PHP Operator
//1. Arithmatic Operators
// + - * \ %

// PHP Opertators
// 2. Assignment Operators
//   =  +=  -=   *=   /=   %= 
$a = 5;
echo $a += 1; // $a = $a + 1;
echo "<br>";

echo $a -= 1; // $a = $a - 1;
echo "<br>";

echo $a *= 1; // $a = $a * 1;
echo "<br>";

echo $a /= 1; // $a = $a / 1;
echo "<br>";

echo $a %= 1; // $a = $a % 1;
echo "<br>";

// PHP Opertators
// 3. Comparison Operators
$b = 90;
$c = '90';
if ($a == $b) {
    echo "True";
} else {
    echo "False";
}
echo "<br>";

// PHP Opertators
// 5. Pre/Post Increment/Decrement Operators
//   ++   --
$a = 5;
echo $a++  .  "<br>";   // 5   => 6
echo ++$a  .  "<br>";   // 7
echo $a--  .  "<br>";   // 7   => 6
echo --$a  .  "<br>";   // 5

// PHP Opertators
// 6. String Operators
$a = 898.34;
echo "The integer number of A is: " . (int)$a . "<br>";

// PHP Opertators
// 7. String Operators
//   .   .=

$a = 898.9999;
echo "The integer number of a is: " . (int)$a . "<br>";


// PHP Opertators
// 8. Conditional Operators
$a = 98;
$result = ($a > 100) ? 'Ture' : 'False';
echo $result . "<br>";

// PHP Opertators
// 9. Conditional Operators
// ?:(Ternary) ??
$a = null;
$b = 98;
$result = $a ?? $b;
echo $result . "<br>";
