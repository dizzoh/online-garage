
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
        $pswd= md5($_POST['pswd']);
        $mnumber = $_POST['mnumber'];
        $cty = $_POST['cty'];

			$query = "INSERT into customer(firstName, lastName,email,password,mobileNumber,city) values('$fname', '$lname','$email','$pswd','$mnumber','$cty')";
		 	$result1 = mysqli_query($connect, $query);
		 	if ($email=="" || $pswd="" ){
				echo "you are supposed to fill all the fields";
			}
			else{
			header("location:homepage.php");

		 }
		 
?>