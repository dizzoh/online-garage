<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>

        <link rel="stylesheet" href="css/bootstrap.min.css" >

<style>
.form-row ,.form-group {
    width: 310px;
}
form{
  margin-top: 50px;
}
body{
  background-color: rgb(177, 173, 169);
}
</style>
    </head>
    <body>
  
        <center>
        <form action="min.php" method="POST">
            <div class="form-row">
              <div class="col">
                <input type="text" name="fname" class="form-control" placeholder="First name">
              </div>
              &nbsp;
              <div class="col">
                <input type="text" name="lname" class="form-control" placeholder="Last name">
              </div>
            </div>
                <div class="form-row">
                  <div class="form-group ">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                  </div>
                 
                <div class="form-group">
                  <label for="inputAddress">Phone number</label>
                  <input type="text" name="contact" class="form-control" id="inputAddress" placeholder="+255">
                </div>
                         
                 <button type="submit" class="btn btn-success">submit</button>



              </form>
          </center>


 





      
              <script src="jquery-3.3.1.slim.min.js" "></script>
              <script src="popper.min.js" "></script>
              <script src="js/bootstrap.min.js" ></script>
    </body>
</html> 