<?php
// PHP Function
$st = "Hello";
echo strlen($st);
$sa = trim(" Hello  ");
echo strlen($sa);
echo strtoupper($st);
echo strtolower($st);
?><br>

<?php
// String Compare
$st1 = "abcd";
$st2 = "abcd";
echo strcmp($st1, $st2);
// $st1 == $st2  =>  0
// $st1  > $st2  =>  1
// $st1  < $st2  => -1
?><br>

<?php
$st1 = "this is a man";
$st2 = "is";
echo strpos($st1, $st2);
?><br>

<?php
$st1 = "this is a man";
$st2 = "is";
echo stripos($st1, $st2);
?><br>

<?php
$st1 = "This is a man";
$st2 = "is";
echo strrpos($st1, $st2);
?><br>

<?php
$st1 = "This is a man";
$st2 = "Is";
echo strripos($st1, $st2);
?><br>

<?php
$st = "Welcome to visit Cambodia";
echo substr($st, 11);
?><br>

<?php
$st = "Welcome to visit Cambodia";
echo substr($st, 11, 5);
?><br>

<?php
$st = "Welcome to visit Cambodia";
echo substr($st, -8);
?><br>

<?php
$mountain = "a large natural elevation of the earth's 
    surface rising abruptly from the surrounding 
    level; a large steep hill.";

echo str_replace('large', 'big', $mountain, $count);
echo "<h3>$count</h3>";
?><br>

<?php
$username = "Dara";
$password = addslashes("' OR ''='");
$sql = "SELECT * FROM tb_users WHERE 
                username='Dara' AND
                password='$password'
            ";
echo $sql;
?><br>

<?php
$st = "<script>alert('Hello World');</script><i>welcome</i> to <u>visit</u> <b>Cambodia</b";
//echo htmlentities($st);
echo htmlspecialchars($st);
?>