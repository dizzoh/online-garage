<?php
session_start();
$server = 'localhost';
	$user = 'root';
	$password ='';
	$database = 'client';

	$connect = @mysqli_connect($server, $user, $password, $database);
	
	if(!$connect){
		die('Fail to connect '. mysqli_connect_error());
    }

   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = $_POST['email'];
      $pswd =md5($_POST['pswd']); 
      
      $sql = "SELECT * FROM customer WHERE email = '$email' and password = '$pswd'";
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_assoc($result);

      
      $count = mysqli_num_rows($result);
      
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {

         $_SESSION['login_user'] = $row['email'];
         $_SESSION['fname'] = $row['firstName'];
         $_SESSION['mnumber'] = $row['mobileNumber'];

         
        header("location:homepage.php"); 
      }
       else if($email=="" || $pswd="" ){
          echo "you are supposed to fill all the fields";

       }
      
      else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>
  <!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors"> 
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin</title>

    

    
<link href="css/bootstrap.min.css" rel="stylesheet">


    <style>
      h1{
          color: antiquewhite;
      }
    label{
        color: antiquewhite;
    }
      .form-signin{
          width: 310px;
                                   
      }

    </style>
    Custom styles for this template 
     <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center" background="tools.jpg">
      <center>
    <form action="login.php" method="POST" class="form-signin">
  <img class="mb-4" src="logo2.jpg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail"  class="sr-only">Email address</label>
  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <br />
  <input type="password" id="inputPassword" name="pswd" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-small btn-primary btn-block" type="submit">Sign in</button>
</form>
</center>
</body>
</html> -->