
<html>
    <head>
        <title>MYNAVBAR</title>


        <link rel="stylesheet" href="css/bootstrap.min.css"  >
  
    </head>
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
        
            <!-- <ul class="navbar-nav   ml-auto">
               
                        <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Profile
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="editprofile.html">Edit profile</a>
                                  <a class="dropdown-item" href="#">transaction</a>
                                  <a class="dropdown-item" href="test.html">logout</a>
                                </div>
                            </div> -->
                   
                        </ul>
                        </div>

                        

        </nav>

     <section id="main">
  
            <div class="row">
              <div class="col-md-3">
                <div class="list-group" style="padding-top: 70px; margin-left: 20px">
                   <!-- <a href="#" class="list-group-item active" style="background-color: #928b8d">profile</a>  -->
                  <a href="viewservice.php" class="list-group-item" > view service</a>
                  <a href="service.html" class="list-group-item" >service</a>
                  <a  class="list-group-item" href="payment.html">Payment</a>
                  <a href="#" class="list-group-item">message</a>
                  <a href="#" class="list-group-item">contact </a>
                  <a  class="list-group-item" href="payment.html">View Payment</a>
                  

                 
              </div>
             </div> 
             <table class="table table - striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
             <?php
             
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$connect = mysqli_connect("localhost", "root", "", "client");
 
// Check connection
if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM manager";
if($result = mysqli_query($connect, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>email</th>";
                echo "<th>services</th>";
                echo "<th>location</th>";
                echo "<th>comments</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['services'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['comments'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
 
// Close connection
mysqli_close($connect);

?>

        
          <div class="col-md-9">
              
            <div class="container" style="padding-top: 70px;">
                   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


													


</div> 

</div> 

            </div>
          </div>
     
            </div>
        </section> 
        



       
<script src="jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

       
    </body>
</html>