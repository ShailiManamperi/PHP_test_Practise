<?php
echo "Hello World<br><br>";

/*all three echo statements below are equal and legal:*/

ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br><br>";

/*all variable names are case-sensitive!*/
$color = "red";
$COLOR = "white";
$coLOR =  "blue";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br><br>";

/*The PHP echo statement is often used to output data to the screen.*/

$txt = "W3Schools.com";
echo "I love $txt! <br>";
$txt1 = "W3Schools.com";
echo "I love " . $txt1 . "! <br><br>" ;

/*To get the data type of a variable, use the var_dump() function.*/

var_dump(5);
echo "<br>";
var_dump("John");
echo "<br>";
var_dump(3.14);
echo "<br>";
var_dump(true);
echo "<br>";
var_dump([2, 3, 56]);
echo "<br>";
var_dump(NULL);
echo "<br>";

/*A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function*/

$x = 5; // global scope

function myTest() {
    // using x inside this function will generate an error
    global $x;
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

?>
