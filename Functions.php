<?php
function functionName($a, $b)
{
    $sum = $a + $b;
    echo $sum;
}
functionName(1, 1);

function functionName1($a, $b = 0)
{
    global $sum;
    $sum = $a + $b;
}
functionName1(98, 2);
echo $sum;

function functionName2()
{
    static $x;
    $x = $x + 1;
    echo $x . "<br>";
}
functionName2();
functionName2();
functionName2();

?>

<?php
// argument passed by reference
function functionName3(&$x)
{
    $x = $x + 10;
}

$num = 120;
functionName3($num);

echo $num;
?>