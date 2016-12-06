<?php
    class homepageController extends controller {
          
	 
      public function get() {
        $this->html .= '<a href="index.php?controller=userController">User Registration</a>';
	session_start();
	print_r($_SESSION);
      }
      public function post() {}
      public function put() {}
      public function delete() {}
    
    }
?>
