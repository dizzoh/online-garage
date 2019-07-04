
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin</title>

    

    <!-- Bootstrap core CSS -->
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
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center" background="tools.jpg">
      <center>
    <form class="form-signin">
  <img class="mb-4" src="logo2.jpg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Username</label>
  
  <input type="email" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
  <br>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-small btn-primary btn-block" type="submit"><a href="adminpanel.php">Sign in</a> </button>

  <?php

                                     Include('connection.php');
                                     $sql="SELECT * from customer";
                                     $result=mysqli_query($connect,$sql);

                                     while($rows=mysqli_fetch_array($result))
                                     {
                                         $Firstname=$rows['firstName'];
                                         $secondname=$rows['lastName'];
                                         $email=$rows['email'];

                                         echo("<tr>");
                                             echo("<td>$Firstname</td>");
                                             echo("<td>$secondname</td>");
                                             echo("<td>$email</td>");
                                             echo("</tr>");

                                     }

                                     ?>

</form>
</center>
</body>
</html>
