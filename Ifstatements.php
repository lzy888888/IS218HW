<?php

echo "Exampe 1 \n";
$str_isset = "";
$bol_isset = isset($str_isset);

If ($bol_isset){
   echo "The variable is set \n";
   }
   else {
       echo "The variable is not set \n";   
       }

echo "Example 2 \n";
$var = 0;

// Evaluates to true because $var is empty
if (empty($var)) {
    echo "$var is either 0, empty, or not set at all \n";
    }

    // Evaluates as true because $var is set
    if (isset($var)) {
        echo "$var is set even though it is empty \n";
	}

echo "Example 3 \n";
$str_isset = "The isset example";
$bol_isset = isset($str_isset);

If ($bol_isset){
   echo "The variable is set </BR>";
   }
   else {
       echo "The variable is not set </BR>";   
       }
       //Using unset function
       unset ($str_isset);
       $bol_isset = isset($str_isset);
       If ($bol_isset){
          echo "The variable is set";
	  }
	  else {
	      echo "The variable is not set";   
	      }

echo "Example 4 \n";
error_reporting(E_ALL);

$foo = NULL;
var_dump(is_null($inexistent), is_null($foo));


echo "Example 1 of switch-case \n";
$i = "apple";
switch ($i) {
    case "apple":
        echo "i is apple";
	break;
    case "bar":
        echo "i is bar";
	break;
    case "cake":
        echo "i is cake";
        break;
 }

echo "Example 2 of switch-case \n";
switch ($i) {
    case 0:
        echo "i equals 0";
    case 1:
	echo "i equals 1";
    case 2:
	echo "i equals 2";
}

echo "Example 3 of switch-case \n";
switch ($i) {
case 0:
case 1:
case 2:
    echo "i is less than 3 but not negative";
    break;
case 3:
    echo "i is 3";
}

echo "Example 4 of switch-case \n";
switch($beer)
{
    case 'tuborg';
    case 'carlsberg';
    case 'heineken';
        echo 'Good choice';
    break;
    default;
	echo 'Please make a new selection...';
    break;
}
?>
