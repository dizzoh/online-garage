<?php
session_start();
?>
<html>
    <head>
        <title>MYNAVBAR</title>


        <link rel="stylesheet" href="css/bootstrap.min.css"  crossorigin="anonymous">
 <!-- <script src="jquery-3.3.1.slim.min.js" ></script>
        <script src="popper.js/1.14.7/umd/popper.min.js" ></script>
        <script src="js/bootstrap.min.js" ></script> -->

    <!-- </head> -->
<style>
        .dropdown:hover>.dropdown-menu{
            display:block;
        }
    </style>

    <body  style="background-color: #928b8d">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

               <a class="navbar-brand"  href="" style="margin-left: 650px">O'GARAGE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                 aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">  </span>
                      </button> 
<div class="collapse navbar-collapse" id="#navbarTogglerDemo01">
        
            <ul class="navbar-nav   ml-auto">
               
                        <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Profile
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">Edit profile</a>
                                  <a class="dropdown-item" href="#">transaction</a>
                                  <a class="dropdown-item" href="test.html">logout</a>
                                </div>
                            </div>
                   
                        </ul>
                        </div>

                        

        </nav>

        <section id="main">
  
            <div class="row">
              <div class="col-md-3">
                <div class="list-group" style="padding-top: 70px; margin-left: 20px">
                  <!-- <a href="#" class="list-group-item active" style="background-color: #928b8d">profile</a> -->
                  <a class="list-group-item" >service</a>
                 
                  <a  class="list-group-item" href="payment.html">Payment</a>
                  <a href="#" class="list-group-item">message</a>
				  <a href="#" class="list-group-item">contact us</a>
                

                 
              </div>
             </div>     
          
        
          <div class="col-md-9">
            <div class="container" style="padding-top: 70px;">
                   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

      

    </head>
<style>
        .dropdown:hover>.dropdown-menu{
            display:block;
        }
    </style>

    <!-- <body  style="background-color: #928b8d"> -->

        

        <section id="main">
  
            <div class="row">
              <!-- <div class="col-md-3"> -->
                <div class="list-group" style="padding-top: 70px; margin-left: 20px">
                  <!-- <a href="#" class="list-group-item active" style="background-color: #928b8d">profile</a> -->
                  <form method="post" action="">
                  <select name="service">
                    <option value="carbreakdown">carbreakdown</option>
                    <option value="Normal service">Normal services</option>
                    <option value="Overheating">Overheating</option>
                    <option value="Fuel problem">Fuel problem</option>
                  </select>
                  &nbsp;
                  <!-- <a href="#" class="list-group-item">contact</a> -->
                  &nbsp;
                  <!-- <a href="request.html" class="list-group-item" href="request.html">Payment</a>  -->
                  &nbsp;
                 <input type="text" name="location" placeholder="Location" required>
                 <p>
                  <label for="comments">
                  Comments:
                  </label>
                  <br />
                  <textarea rows="4" cols="40" name="comment">
                  </textarea>
                  </p>
                
                  
                    <label>
                      <input type="checkbox" name="subscribe" checked="checked" />
                      Sign me up for email updates
                      </label>
                      <br />
                      <input type="submit"  name="submit" value="Submit review" />
                  </form>   
                 
              </div>
             </div>     
          
        
          <div class="col-md-9">
            <div>
              
            </div>
          </div>
            </div>
        </section>



       
<script src="jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

       
    </body>
</html>




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
    $mail = $_SESSION['login_user'];
    $query = "select email, firstName, mobileNumber from customer where email = '$mail'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    $customer = $row['email'];

    $service = $_POST['service'];
    $location = $_POST['location'];
    $comment = $_POST['comment'];

    // echo $service;
    // echo $location;
    // echo $comment;


    $query2 = "insert into manager(email, services, location, comments) values('$customer', '$service', '$location', '$comment')";
    //$result2 = );

    if(mysqli_query($connect, $query2)){
      echo"<script>window.alert('you have succefully submitted your request')</script>"; 

      //header("location:homepage.html");
    }
   
  }

    
?>