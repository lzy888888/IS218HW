<?php

echo "GLOBALS \n";
//An associative array containing references to all variables which are
//currently defined in the global scope of the script. 
function test() {
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();


echo "SERVER \n";
//SERVER is an array containing information such as headers, paths, and script
//locations.
echo $_SERVER['SERVER_NAME'];


echo "GET \n";
//An associative array of variables passed to the current script via the URL
//parameters.
echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';


echo "POST \n";
//An associative array of variables passed to the current script via the HTTP
//POST method when using application/x-www-form-urlencoded or multipart/form-data as the HTTP Content-Type in the request.
echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';


echo "FILES \n";
//An associative array of items uploaded to the current script via the HTTP POST method. 
function diverse_array($vector) { 
    $result = array(); 
    foreach($vector as $key1 => $value1) 
	foreach($value1 as $key2 => $value2) 
            $result[$key2][$key1] = $value2; 
    return $result; 
}


echo "COOKIE \n";
//An associative array of variables passed to the current script via HTTP Cookies.
echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';


echo "SESSION \n";
//An associative array containing session variables available to the current script. 
session_start();

$_SESSION['test'] = 42;
$test = 43;
echo $_SESSION['test'];


echo "REQUEST \n";
//An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.
$_GET['foo'] = 'a';
$_POST['bar'] = 'b';
var_dump($_GET); // Element 'foo' is string(1) "a"
var_dump($_POST); // Element 'bar' is string(1) "b"
var_dump($_REQUEST); // Does not contain elements 'foo' or 'bar'


echo "ENV \n";
//An associative array of variables passed to the current script via the environment.
echo 'My username is ' .$_ENV["USER"] . '!';
?>
