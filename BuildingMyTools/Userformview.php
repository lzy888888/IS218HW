<?php
  class userformview {
     public function getHTML() {
     
       $form = '
           <h2>User Registration Form</h2>
	   <form action="Form.php?controller=userController" method="post">
	     <div>
	         <label for="username">Username:</label>
		 <input type="text" id="username" name="user" />
	     </div>
	     <div>
	         <label for="password">password:</label>
		 <input type="text" id="password" name="password" />
	     </div>
	     <div class="button">
	        <button type="submit">Register</button>
             </div>
	   </form>

           ';
	return $form;
     }																			
   }
?>
