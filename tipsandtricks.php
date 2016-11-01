<?php
echo "Example 1.func_get_args \n";
// yes, the argument list can be empty
function foo() {
 
     // returns an array of all passed arguments
     $args = func_get_args();
	  
     foreach ($args as $k => $v) {
	 echo "arg".($k+1).": $v\n";
     }
			   
}
			    
foo();
/* prints nothing */
			     
foo('hello');	
/* prints
arg1: hello
*/
			     
foo('hello', 'world', 'again');
/* prints
arg1: hello
arg2: world
arg3: again
*/

echo "Example 2.using Glob \n";
$files = glob('../images/a*.jpg');
 
// applies the function to each array element
$files = array_map('realpath',$files);
  
print_r($files);
/* output looks like:
Array
(
    [0] => C:\wamp\www\images\apple.jpg
    [1] => C:\wamp\www\images\art.jpg
)
*/

echo "Example 3.memory_get_usage \n";
echo "Initial: ".memory_get_usage()." bytes \n";
/* prints
Initial: 361400 bytes
*/
 
// let's use up some memory
for ($i = 0; $i < 100000; $i++) {
    $array []= md5($i);
}
      
// let's remove half of the array
for ($i = 0; $i < 100000; $i++) {
    unset($array[$i]);
}
	   
echo "Final: ".memory_get_usage()." bytes \n";
/* prints
Final: 885912 bytes
*/
	    
echo "Peak: ".memory_get_peak_usage()." bytes \n";
/* prints
Peak: 13687072 bytes
*/

echo "Example 4.CPU Usage \n";
// sleep for 3 seconds (non-busy)
sleep(3);
 
$data = getrusage();
echo "User time: ".
    ($data['ru_utime.tv_sec'] +
    $data['ru_utime.tv_usec'] / 1000000);
echo "System time: ".
    ($data['ru_stime.tv_sec'] +
    $data['ru_stime.tv_usec'] / 1000000);
		  
/* prints
User time: 0.011552
System time: 0
*/

echo "Example 5.Magic Constants \n";
// some code
// ...
my_debug("some debug message", __LINE__);
/* prints
Line 4: some debug message
*/
 
// some more code
// ...
my_debug("another debug message", __LINE__);
/* prints
Line 11: another debug message
*/
  
function my_debug($msg, $line) {
    echo "Line $line: $msg\n";
}

echo "Example 6. uniqid \n";
// with prefix
echo uniqid('foo_');
/* prints
foo_4bd67d6cd8b8f
*/
 
// with more entropy
echo uniqid('',true);
/* prints
4bd67d6cd8b926.12135106
*/
  
// both
echo uniqid('bar_',true);
/* prints
bar_4bd67da367b650.43684647
*/

echo "Example 7.serialization \n";
// a complex array
$myvar = array(
    'hello',
    42,
    array(1,'two'),
    'apple'
);
		 
// convert to a string
$string = json_encode($myvar);
		  
echo $string;
/* prints
["hello",42,[1,"two"],"apple"]
*/
		   
// you can reproduce the original variable
$newvar = json_decode($string);
		    
print_r($newvar);
/* prints
Array
(
    [0] => hello
    [1] => 42
    [2] => Array
	(
	    [0] => 1
	    [1] => two	
	)
									 
    [3]	=> apple
)
*/

echo "Example 8.compressing strings \n";
$string =
"Lorem ipsum dolor sit amet, consectetur
adipiscing elit. Nunc ut elit id mi ultricies
adipiscing. Nulla facilisi. Praesent pulvinar,
sapien vel feugiat vestibulum, nulla dui pretium orci,
non ultricies elit lacus quis ante. Lorem ipsum dolor
sit amet, consectetur adipiscing elit. Aliquam
pretium ullamcorper urna quis iaculis. Etiam ac massa
sed turpis tempor luctus. Curabitur sed nibh eu elit
mollis congue. Praesent ipsum diam, consectetur vitae
ornare a, aliquam a nunc. In id magna pellentesque
tellus posuere adipiscing. Sed non mi metus, at lacinia
augue. Sed magna nisi, ornare in mollis in, mollis
sed nunc. Etiam at justo in leo congue mollis.
Nullam in neque eget metus hendrerit scelerisque
eu non enim. Ut malesuada lacus eu nulla bibendum
id euismod urna sodales. ";
 
$compressed = gzcompress($string);
  
echo "Original size: ". strlen($string)."\n";
/* prints
Original size: 800
*/
   
    
     
echo "Compressed size: ". strlen($compressed)."\n";
/* prints
Compressed size: 418
*/
      
// getting it back
$original = gzuncompress($compressed);

echo "Example 9.register_shutdown_function \n";
$start_time = microtime(true);
 
register_shutdown_function('my_shutdown');
  
// do some stuff
// ...
   
    
function my_shutdown() {
    global $start_time;
	 
    echo "execution took: ".
	    (microtime(true) - $start_time).
	    " seconds.";
}
?>
