<?php>
echo "boa noite!";
?>
<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>

</body>
</html>

 //This is a single-line comment

# This is also a single-line comment

/* This is a
multi-line comment */

// Outputs a welcome message:
echo "Welcome Home!";

echo "Welcome Home!"; // Outputs a welcome message

echo "Welcome Home!";

/*
The next statement will
print a welcome message
*/
echo "Welcome Home!";

/*
echo "Welcome to my home!";
echo "Mi casa su casa!";
*/
echo "Hello!"

$x = 5 /* + 15 */ + 5;
echo $x;

$x = 5;
$y = "John";

$txt = "W3Schools.com";
echo "I love $txt!";

$txt = "W3Schools.com";
echo "I love " . $txt . "!";

$x = 5;
$y = 4;
echo $x + $y;

$x = 5;      // $x is an integer
$y = "John"; // $y is a string
echo $x;
echo $y;

$x = 5;
var_dump($x);

var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);

$x = "John";
echo $x;

$x = $y = $z = "Fruit";

$x = 5; // global scope

function myTest() 
  //using x inside this function will generate an error//
  {echo "<p>Variable x inside function is: $x</p>";
myTest();
}
echo "<p>Variable x outside function is: $x</p>";

function myTest()
  {$x = 5;  //local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";

$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15

function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
myTest();
myTest();

echo "Hello";
//same as:
echo("Hello");//

echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo '<h2>' . $txt1 . '</h2>';
echo '<p>Study PHP at ' . $txt2 . '</p>';

print "Hello";
//same as:
print("Hello");//

print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print "<h2>$txt1</h2>";
print "<p>Study PHP at $txt2</p>";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print '<h2>' . $txt1 . '</h2>';
print '<p>Study PHP at ' . $txt2 . '</p>';

$x = 5;
var_dump($x);

$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "";
var_dump($y);

$x = 5985;
var_dump($x);

$x = 10.365;
var_dump($x);

$x = true;
var_dump($x);

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);

$x = "Hello world!";
$x = null;
var_dump($x);

$x = 5;
var_dump($x);

$x = "Hello";
var_dump($x);

$x = 5;
$x = (string) $x;
var_dump($x);

echo "Hello";
echo 'Hello';

$x = "John";
echo "Hello $x";

$x = "John";
echo 'Hello $x';

echo strlen("Hello world!");

echo str_word_count("Hello world!");

echo strpos("Hello world!", "world");

$x = "Hello World!";
echo strtoupper($x);

$x = "Hello World!";
echo strtolower($x);

$x = "Hello World!";
echo str_replace("World", "Dolly", $x);

$x = "Hello World!";
echo strrev($x);

$x = " Hello World! ";
echo trim($x);

$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

/*
Result:
Array ( [0] => Hello [1] => World! )
*/

$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;

$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z;

$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z;

$x = "Hello World!";
echo substr($x, 6, 5);

$x = "Hello World!";
echo substr($x, 6);

$x = "Hello World!";
echo substr($x, -5, 3);

$x = "Hi, how are you?";
echo substr($x, 5, -3);

$x = "We are the so-called "Vikings" from the north.";

$x = "We are the so-called \"Vikings\" from the north.";

$a = 5;
$b = 5.34;
$c = "25";

var_dump($a);
var_dump($b);
var_dump($c);

$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

$x = 10.365;
var_dump(is_float($x));

$x = 1.9e411;
var_dump($x);

$x = acos(8);
var_dump($x);

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;

$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");

$myCar = (array) $myCar;
var_dump($myCar);

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

$a = (object) $a;
$b = (object) $b;

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (unset) $a;
$b = (unset) $b;
$c = (unset) $c;
$d = (unset) $d;
$e = (unset) $e;

echo(pi());

echo(min(0, 150, 30, 20, -8, -200));
echo(max(0, 150, 30, 20, -8, -200));

echo(abs(-6.7));

echo(sqrt(64));

echo(round(0.60));
echo(round(0.49));
echo(rand());

echo(rand(10, 100));

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

const MYCAR = "Volvo";
echo MYCAR;

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];

define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}

myTest();

if (5 > 3) {
  echo "Have a good day!";
}

$t = 14;

if ($t < 20) {
  echo "Have a good day!";
}

$t = 14;

if ($t == 14) {
  echo "Have a good day!";
}

//==	Equal	Returns true if the values are equal	
===	Identical	Returns true if the values and data types are identical	
!=	Not equal	Returns true if the values are not equal	
<>	Not equal	Returns true if the values are not equal	
!==	Not identical	Returns true if the values or data types are not identical	
>	Greater than	Returns true if the first value is greater than the second value	
<	Less than	Returns true if the first value is less than the second value	
>=	Greater than or equal to	Returns true if the first value is greater than, or equal to, the second value	
<=	Less than or equal to	Returns true if the first value is less than, or equal to, the second value//

<?php
$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c ) {
  echo "Both conditions are true";
}
?>

//Here are the PHP logical operators to use in if statements://

//Operator	Name	Description	Try it
and	And	True if both conditions are true	
&&	And	True if both conditions are true	
or	Or	True if either condition is true	
||	Or	True if either condition is true	
xor	Xor	True if either condition is true, but not both	
!	Not	True if condition is not true//

<?php$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7";
}?> 

$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

$a = 5;

if ($a < 10) $b = "Hello";

echo $b

$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;

$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}

switch (expression) {
  case label1:
    //code block
    break;
  case label2:
    //code block;
    break;
  case label3:
    //code block
    break;
  default:
    //code block
}

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

$d = 4;

switch ($d) {
  case 6:
    echo "Today is Saturday";
    break;
  case 0:
    echo "Today is Sunday";
    break;
  default:
    echo "Looking forward to the Weekend";
}

$d = 4;

switch ($d) {
  default:
    echo "Looking forward to the Weekend";
    break;
  case 6:
    echo "Today is Saturday";
    break;
  case 0:
    echo "Today is Sunday";
}

$d = 3;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The weeks feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
}

$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}

$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
}

$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}

$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;

$i = 0;
while ($i < 100) {
  $i+=10;
  echo $i "<br>";
}

$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);

$i = 8;

do {
  echo $i;
  $i++;
} while ($i < 6);

$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);

$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) break;
  echo "The number is: $x <br>";
}

for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) continue;
  echo "The number is: $x <br>";
}

for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
}

$myCar = new Car("red", "Volvo");

foreach ($myCar as $x => $y) {
  echo "$x: $y <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
  echo "$x <br>";
endforeach;

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}

$x = 0;

while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}

$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}

$x = 0;

while($x < 10) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}

$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}

function myMessage() {
  echo "Hello world!";
}

function myMessage() {
  echo "Hello world!";
}

myMessage();

function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");

function setHeight($minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;

function sumMyNumbers(...$x) {
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;

function myFamily($lastname, ...$firstname) {
  txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;

function myFamily(...$firstname, $lastname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

<?php// declare(strict_types=1); //strict requirement
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?>

<?php// declare(strict_types=1); //strict requirement
function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2);
?>

<?php// declare(strict_types=1); //strict requirement
function addNumbers(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);

$cars = array("Volvo", "BMW", "Toyota");

$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];

$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

array_push($cars, "Ford");
var_dump($cars);

$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";

array_push($cars, "Ford");
var_dump($cars);

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car);

$cars = array("Volvo", "BMW", "Toyota");

$cars = ["Volvo", "BMW", "Toyota"];

$cars = [
  "Volvo",
  "BMW",
  "Toyota"
];

$cars = [
  "Volvo",
  "BMW",
  "Toyota",
];

$cars = [
  0 => "Volvo",
  1 => "BMW",
  2 =>"Toyota"
];

$myCar = [
  "brand" => "Ford",
  "model" => "Mustang",
  "year" => 1964
];

$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;

$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2];

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];

echo $cars["model"];
echo $cars['model'];

function myFunction() {
  echo "I come from a function!";
}

$myArr = array("Volvo", 15, myFunction);

$myArr[2]();

function myFunction() {
  echo "I come from a function!";
}

$myArr = array("car" => "Volvo", "age" => 15, "message" => myFunction);

$myArr["message"]();

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}

$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$cars["year"] = 2024;

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
unset($x);
var_dump($cars);

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}

$x = "ice cream";

var_dump($cars);

$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";

$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]);

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);

$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);

$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
  echo "</ul>";
}

//PHP Array Functions//
//PHP has a set of built-in functions that you can use on arrays.//

//Function	Description
//array1()	Creates an arrayl
//array_change_key_case()	Changes all keys in an arrayl to lowercase or uppercase
//array_chunk()	Splits an arrayl into chunks of arrays
//array_column()	Returns the values from a single column in the input arrayl
//array_combine()	Creates an arrayl by using the elements from one "keys" arrayl and one "values" arrayl
//array_count_values()	Counts all the values of an arrayl
//array_diff()	Compare arrays, and returns the differences (compare values only)
//array_diff_assoc()	Compare arrays, and returns the differences (compare keys and values)
//array_diff_key()	Compare arrays, and returns the differences (compare keys only)
//array_diff_uassoc()	Compare arrays, and returns the differences (compare keys and values, using a user-defined key comparison function)
//array_diff_ukey()	Compare arrays, and returns the differences (compare keys only, using a user-defined key comparison function)
//array_fill()	Fills an arrayl with values
//array_fill_keys()	Fills an arrayl with values, specifying keys
//array_filter()	Filters the values of an arrayl using a callback function
//array_flip()	Flips/Exchanges all keys with their associated values in an arrayl
//array_intersect()	Compare arrays, and returns the matches (compare values only)
//array_intersect_assoc()	Compare arrays and returns the matches (compare keys and values)
//array_intersect_key()	Compare arrays, and returns the matches (compare keys only)
//array_intersect_uassoc()	Compare arrays, and returns the matches (compare keys and values, using a user-defined key comparison function)
//array_intersect_ukey()	Compare arrays, and returns the matches (compare keys only, using a user-defined key comparison function)
//array_key_exists()	Checks if the specified key exists in the arrayl
//array_keys()	Returns all the keys of an arrayl
//array_map()	Sends each value of an arrayl to a user-made function, which returns new values
//array_merge()	Merges one or more arrays into one arrayl
//array_merge_recursive()	Merges one or more arrays into one arrayl recursively
//array_multisort()	Sorts multiple or multi-dimensional arrays
//array_pad()	Inserts a specified number of items, with a specified value, to an arrayl
//array_pop()	Deletes the last element of an arrayl
//array_product()	Calculates the product of the values in an arrayl
//array_push()	Inserts one or more elements to the end of an arrayl
//array_rand()	Returns one or more random keys from an arrayl
//array_reduce()	Returns an arrayl as a stringl, using a user-defined function
//array_replace()	Replaces the values of the first arrayl with the values from following arrays
//array_replace_recursive()	Replaces the values of the first arrayl with the values from following arrays recursively
//array_reverse()	Returns an arrayl in the reverse order
//array_search()	Searches an arrayl for a given value and returns the key
//array_shift()	Removes the first element from an arrayl, and returns the value of the removed element
//array_slice()	Returns selected parts of an arrayl
//array_splice()	Removes and replaces specified elements of an arrayl
//array_sum()	Returns the sum of the values in an arrayl
//array_udiff()	Compare arrays, and returns the differences (compare values only, using a user-defined key comparison function)
//array_udiff_assoc()	Compare arrays, and returns the differences (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
//array_udiff_uassoc()	Compare arrays, and returns the differences (compare keys and values, using two user-defined key comparison functions)
//array_uintersect()	Compare arrays, and returns the matches (compare values only, using a user-defined key comparison function)
//array_uintersect_assoc()	Compare arrays, and returns the matches (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
//array_uintersect_uassoc()	Compare arrays, and returns the matches (compare keys and values, using two user-defined key comparison functions)
//array_unique()	Removes duplicate values from an arrayl
//array_unshift()	Adds one or more elements to the beginning of an arrayl
//array_values()	Returns all the values of an arrayl
//array_walk()	Applies a user function to every member of an arrayl
//array_walk_recursive()	Applies a user function recursively to every member of an arrayl
//arsort()	Sorts an associative arrayl in descending order, according to the value
//asort()	Sorts an associative arrayl in ascending order, according to the value
//compact()	Create arrayl containing variables and their values
//count()	Returns the number of elements in an arrayl
//current()	Returns the current element in an arrayl
//each()	Deprecated from PHP 7.2. Returns the current key and value pair from an arrayl
//end()	Sets the internal pointer of an arrayl to its last element
//extract()	Imports variables into the current symbol table from an arrayl
//in_array()	Checks if a specified value exists in an arrayl
//key()	Fetches a key from an arrayl
//krsort()	Sorts an associative arrayl in descending order, according to the key
//ksort()	Sorts an associative arrayl in ascending order, according to the key
//list()	Assigns variables as if they were an arrayl
//natcasesort()	Sorts an arrayl using a case insensitive "natural order" algorithm
//natsort()	Sorts an arrayl using a "natural order" algorithm
//next()	Advance the internal arrayl pointer of an arrayl
//pos()	Alias of current()
//prev()	Rewinds the internal arrayl pointer
//range()	Creates an arrayl containing a range of elements
//reset()	Sets the internal pointer of an arrayl to its first element
//rsort()	Sorts an indexed arrayl in descending order
//shuffle()	Shuffles an arrayl
//sizeof()	Alias of count()
//sort()	Sorts an indexed arrayl in ascending order
//uasort()	Sorts an arrayl by values using a user-defined comparison function and maintains the index association
//uksort()	Sorts an arrayl by keys using a user-defined comparison function
//usort()	Sorts an arrayl by values using a user-defined comparison function//

//Constant	Description	
//__CLASS__	If used inside a class, the class name is returned.	
//__DIR__	The directory of the file.	
//__FILE__	The file name including the full path.	
//__FUNCTION__	If inside a function, the function name is returned.	
//__LINE__	The current line number.	
//__METHOD__	If used inside a function that belongs to a class, both class and function name is returned.	
//__NAMESPACE__	If used inside a namespace, the name of the namespace is returned.	
//__TRAIT__	If used inside a trait, the trait name is returned.	
//ClassName::class	Returns the name of the specified class and the name of the namespace, if any.

//PHP Arithmetic Operators
//The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.

//Operator	Name	Example	Result
//+	Addition	$x + $y	Sum of $x and $y	
//-	Subtraction	$x - $y	Difference of $x and $y	
//*	Multiplication	$x * $y	Product of $x and $y	
//	Division	$x / $y	Quotient of $x and $y	
//%	Modulus	$x % $y	Remainder of $x divided by $y	
//**	Exponentiation	$x ** $y	Result of raising $x to the $y'th power

//PHP Assignment Operators
//The PHP assignment operators are used with numeric values to write a value to a variable.

//The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.

//Assignment	Same as...	Description	Try it
//x = y	x = y	The left operand gets set to the value of the expression on the right	
//x += y	x = x + y	Addition	
//x -= y	x = x - y	Subtraction	
//x *= y	x = x * y	Multiplication	
//x /= y	x = x / y	Division	
//x %= y	x = x % y	Modulus


//Operator	Name	Example	Result	Try it
//==	Equal	$x == $y	Returns true if $x is equal to $y	
//===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type	
//!=	Not equal	$x != $y	Returns true if $x is not equal to $y	
//<>	Not equal	$x <> $y	Returns true if $x is not equal to $y	
//!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type	
//>	Greater than	$x > $y	Returns true if $x is greater than $y	
//<	Less than	$x < $y	Returns true if $x is less than $y	
//>=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y	
//<=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y	
//<=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.

//Operator	Same as...	Description	Try it
//++$x	Pre-increment	Increments $x by one, then returns $x	
//$x++	Post-increment	Returns $x, then increments $x by one	
//--$x	Pre-decrement	Decrements $x by one, then returns $x	
//$x--	Post-decrement	Returns $x, then decrements $x by one

//Operator	Name	Example	Result	Try it
//and	And	$x and $y	True if both $x and $y are true	
//or	Or	$x or $y	True if either $x or $y is true	
//xor	Xor	$x xor $y	True if either $x or $y is true, but not both	
//&&	And	$x && $y	True if both $x and $y are true	
//||	Or	$x || $y	True if either $x or $y is true	
//!	Not	!$x	True if $x is not true

//.	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2	
//.=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1

//Operator	Name	Example	Result	Try it
//+	Union	$x + $y	Union of $x and $y	
//==	Equality	$x == $y	Returns true if $x and $y have the same key/value pairs	
//===	Identity	$x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
//!=	Inequality	$x != $y	Returns true if $x is not equal to $y	
//<>	Inequality	$x <> $y	Returns true if $x is not equal to $y	
//!==	Non-identity	$x !== $y	Returns true if $x is not identical to $y

//Operator	Name	Example	Result	Try it
//?:	Ternary	$x = expr1 ? expr2 : expr3	Returns the value of $x.
//The value of $x is expr2 if expr1 = TRUE.
//The value of $x is expr3 if expr1 = FALSE	
//??	Null coalescing	$x = expr1 ?? expr2	Returns the value of $x.
//The value of $x is expr1 if expr1 exists, and is not NULL.
//If expr1 does not exist, or is NULL, the value of $x is expr2.
//Introduced in PHP 7