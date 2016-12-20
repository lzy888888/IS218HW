<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'DB.php';

if($user->is_loggedin()!="")
{
 $user->redirect('Home.php');
 }

 if(isset($_POST['btn-login']))
 {
  $uname = $_POST['txt_uname_email'];
  $umail = $_POST['txt_uname_email'];
  $upass = $_POST['txt_password'];
      
  if($user->login($uname,$umail,$upass))
  {
   $user->redirect('Home.php');
  }
  else
  {
   $error = "Wrong Details !";
  } 
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login : cleartuts</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css"  />
</head>
<body>
<div class="container">
     <div class="form-container">
        <form method="post">
	    <h2>Sign in.</h2><hr />
	    <?php
	    if(isset($error))
	    {
	       ?>
	       <div class="alert alert-danger">
	           <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
               </div>
	       <?php
	   }
	   ?>
	   <div class="form-group">
	    <input type="text" class="form-control" name="txt_uname_email" placeholder="Username or Email ID" required />
	   </div>
	   <div class="form-group">
	    <input type="password" class="form-control" name="txt_password" placeholder="Your Password" required />
	   </div>
	   <div class="clearfix"></div><hr />
	   <div class="form-group"> 
	   <button type="submit" name="btn-login" class="btn btn-block btn-primary"> 
	       <i class="glyphicon glyphicon-log-in"></i>&nbsp;SIGN IN
	      </button>
	   </div>
	   <br />
	   <label>Don't have account yet ! <a href="signup.php">Sign Up</a></label>        
	   </button>
	   </div>
	   <br />
	   <label>Users <a href="https://web.njit.edu/~zl326/FinalProject/csv/csv.php">List</a></label>
	</form>
       </div>
   </div>

</body>
</html>
