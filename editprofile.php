<html>
    <head>
      <title> PROFILE</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

<body style="background-color: #f1e0e0">
    

<div class="container">
    
	<div class="row">
     
      <div class="col-md-9 personal-info">
       
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">
            <?php
            $server = 'localhost';
	$user = 'root';
	$password ='';
	$database = 'client';

	$connect = @mysqli_connect($server, $user, $password, $database);
	
	if(!$connect){
		die('Fail to connect '. mysqli_connect_error());
    }
        
            $sql="SELECT * from customer";
            $result=mysqli_query($connect,$sql);

            while($rows=mysqli_fetch_array($result))
            {
                $Firstname=$rows['firstName'];
                $lastName=$rows['lastName'];
                $email=$rows['email'];
                $pswd=$rows['password'];
                $mnumber=$rows['mobileNumber'];
                $city=$rows['city'];

                
            }



            ?>
 <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="fname" value="<?php  echo("$Firstname");?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="lname" value="<?php  echo("$lastName"); ?>" >
            </div>
          </div>

          <div class="form-group">
                <label class="col-lg-3 control-label">Email:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="email" name="email" value="<?php  echo("$email"); ?>">
                </div>
              </div>

              <div class="form-group">
                    <label class="col-md-3 control-label">Password:</label>
                    <div class="col-md-8">
                      <input class="form-control" type="password" name="pswd" value="<?php  echo("$pswd"); ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Confirm password:</label>
                    <div class="col-md-8">
                      <input class="form-control" type="password" name="">
                    </div>
                  </div>

          <div class="form-group">
                <label class="col-lg-3 control-label">mobile number:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="integer" name="mnumber" value="<?php  echo("$mnumber"); ?>">
                </div>
              </div>


          <div class="form-group">
            <label class="col-lg-3 control-label">City:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="cty" value="<?php  echo("$city"); ?>" >
            </div>
          </div>
         
          
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-success" value="Cancel" style="margin-left:300px">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
    
<script src="jquery-3.3.1.slim.min.js"></script>
<script src="popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>


</body>
</html>