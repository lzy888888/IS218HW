<?php
echo "ReflectionClass::export \n";
class Apple {
    public $var1;
    public $var2 = 'Orange';

    public function type() {
	return 'Apple';
    }
}
ReflectionClass::export('Apple');


echo "ReflectionClass::getConstructor \n";
$class = new ReflectionClass('ReflectionClass');
$constructor = $class->getConstructor();
var_dump($constructor);


echo "ReflectionClass::getDocComment \n";
/** 
* A test class
*
* @param  foo bar
* @return baz
*/
class TestClass { }

$rc = new ReflectionClass('TestClass');
var_dump($rc->getDocComment());


echo "ReflectionClass::getExtension \n";
$class = new ReflectionClass('ReflectionClass');
$extension = $class->getExtension();
var_dump($extension);


echo "ReflectionClass::getMethod \n";
$class = new ReflectionClass('ReflectionClass');
$method = $class->getMethod('getMethod');
var_dump($method);


function pass_by_value($param) {
  push_array($param, 4, 5);
}

$ar = array(1,2,3);

pass_by_value($ar);

foreach ($ar as $elem) {
print "<br>$elem";
}


function pass_by_reference(&$param) {
  push_array($param, 4, 5);
}

$ar = array(1,2,3);

pass_by_reference($ar);

foreach ($ar as $elem) {
  print "<br>$elem";
}
?>
