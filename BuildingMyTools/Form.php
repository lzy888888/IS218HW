<!DOCTYPE html> 
<html>
<body>
  <h1> Project 2</h1>
</body>
</html>
<?php
  function my_autoloader($class) {
    include 'classes/' . $class . '.class.php';
  }
  spl_autoload_register('my_autoloader');
  $app = new app;
?>
