
<?php

if("isset['submit']"){

$server = 'localhost';
	$user = 'root';
	$password ='';
	$database = 'client';

	$connect = @mysqli_connect($server, $user, $password, $database);
	
	if(!$connect){
		die('Fail to connect '. mysqli_connect_error());
    }
    session_start();
    $mail = $_SESSION['login_user'];
    $query = "select email, firstName, mobileNumber from customer where email = '$mail'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    $customer = $row['email'];
    $services = $_POST['service'];
    $location = $_POST['location'];
    $comments = $_POST['comments'];
    $cartype = $_POST['carmodel'];
    $date = $_POST['date'];



    $query2 ="insert into manager(email, services, location, comments,carmodel,date) values('$customer', '$services', '$location', '$comments','$cartype','$date')";
    $result2 =mysqli_query($connect,$query2);

    if(mysqli_query($connect,$query2)){
     echo"<script>window.alert('you have succefully submitted your request'); window.location='homepage.php'</script>"; 

      ;

    }
   
  }

    
?>