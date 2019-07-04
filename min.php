<?php

$server = 'localhost';
	$user = 'root';
	$password ='';
	$database = 'client';

	$connect = @mysqli_connect($server, $user, $password, $database);
	
	if(!$connect){
		die('Fail to connect '. mysqli_connect_error());
    }

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
        $contact = $_POST['contact'];
        

			$query = "INSERT  INTO admin(firstName, lastName, email, contacts) VALUES ('$fname', '$lname','$email','$contact')";
		 	$result1 = mysqli_query($connect, $query);
		 	if ($email=="" || $fname="" ){
				echo "you are supposed to fill all the fields";
			}
			else{
            header("location:adminpanel.php");

            }
            ?>