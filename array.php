<?php
echo "array keys \n";
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue","blue");
print_r(array_keys($array, "blue"));

$array = array("color" => array("blue","red", "green"),
	       "size" => array("small", "medium". "large"));
print_r(array_keys($array));

echo "array search \n";
$array = array(0 => 'blue', 1 => 'red' , 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array); // $key = 1;

echo "array walk \n";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" =>
"apple");

function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}

function test_print($item2, $key)
{
    echo "$key. $item2<br />\n";
}

echo "Before ...:\n";
array_walk($fruits, 'test_print');

array_walk($fruits, 'test_alter', 'fruit');
echo "... and after:\n";

array_walk($fruits, 'test_print');

echo "array pop \n";
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);

echo "array push \n";
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

echo "array combine \n";
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);

echo "fgetcsv \n";
$row = 1;
if (($handle = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
	echo"<p> $num fields in line $row: <br /></p>\n";
	$row++;
	for ($c=0; $c < $num; $c++) {
	    echo $data[$c] . "<br />\n";
	}
    }
    fclose($handle);
}

echo "implode \n";

$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

echo $comma_separated; // lastname, email, phone

// Empty string when using an empty array:
var_dump(implode('hello', array())); // string(0) ""

echo "explode \n";
$pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2 


echo "array intersect \n";
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
print_r($result);

echo "array replace \n";
$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");

$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);

echo "array reverse \n";
$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($input);
print_r($reversed);
print_r($preserved);

echo "array sum \n";
$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n";

$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "\n";


echo "array fill \n";
$a = array_fill(5, 6, 'banana');
$b = array_fill(-2, 4, 'pear');
print_r($a);
print_r($b);

echo "array map \n";
function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
print_r($b);
?>
