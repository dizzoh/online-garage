
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>Dashboard</title>

    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>


    <style>


      #footer{
        background: #333333;
        color: #ffffff;
        text-align: center;
        padding: 30px;
        margin-top: 30px;

      }

      #header{
         background: #333333;
         color: #ffffff;
         padding-bottom: 10px;
         margin-bottom: 15px;
      }

      #header  .create{
        padding-top: 20px;

      }
      /* .navbar{
        min-height: 33px;
        margin-bottom: 0;
        border-radius: 0;
      } */
/* 
      .navbar-nav>li>a, .navbar-brand{
        padding-top: 6px !important;
        padding-bottom: 0 !important;
        height: 33px;
          */


      }

     
    </style>
  
  </head>
  <body style="background-color: #f1e0e0">
        <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <a class="navbar-brand"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Automobile Repair</a>
                  </div>
              
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!-- <ul class="nav navbar-nav">
                      <li class="active"><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
                      <li><a href="#">Pages</a></li>
                      <li><a href="#">Post</a></li>
                      <li><a href="#">Users</a></li>
                    </ul> -->
                    <!-- <form class="navbar-form navbar-left">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form> -->
                    <!-- <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">Welcome,Admin</a></li>
                      <li><a href="#">logout</a></li> -->
                      
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>

            

<section id="main">
<div class="container">
    <div class="row">
        <div class="col-md-3">
                <div class="list-group">
                        <a href="adminpanel.php" class="list-group-item active"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                          Dashboard
                        </a>
                        <a href="adminservice.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>Service Requests <span class="badge">

                        <?php
                                        include("connection.php");
        
                                        $sql =" SELECT  COUNT(*) as num FROM manager";
                                        $result=mysqli_query($connect,$sql);
                                        $result = mysqli_fetch_assoc($result);
                                        $total=$result['num'];
                                        echo "$total";
                                        ?>


                        </span></a>
                        <a href="reg.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Add technician <span class="badge">


                        <?php
                                include("connection.php");

                                $sql =" SELECT  COUNT(*) as num FROM admin";
                                $result=mysqli_query($connect,$sql);
                                $result = mysqli_fetch_assoc($result);
                                $total=$result['num'];
                                echo "$total";
                                ?>


                        </span></a>
                        <a href="report.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Report <span class="badge"></span></a>
                        <a href="adminservice.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Users <span class="badge">


                        <?php
                                include("connection.php");

                                $sql =" SELECT  COUNT(*) as num FROM customer";
                                $result=mysqli_query($connect,$sql);
                                $result = mysqli_fetch_assoc($result);
                                $total=$result['num'];
                                echo "$total";
                                ?>




                        </span></a>

                      
                      </div>



        </div>
        <div class="col-md-9">
                <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Website overview</h3>
                        </div>
                        <div class="panel-body">
                        <div class="col-md-3">
                            <div class="well dash-box">
                                <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                <?php
                                include("connection.php");

                                $sql =" SELECT  COUNT(*) as num FROM customer";
                                $result=mysqli_query($connect,$sql);
                                $result = mysqli_fetch_assoc($result);
                                $total=$result['num'];
                                echo "$total";
                                ?>
                                </h2>
                                <h4>Users</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                                <div class="well dash-box">
                                    <h2><span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                                        <?php
                                        include("connection.php");
        
                                        $sql =" SELECT  COUNT(*) as num FROM manager";
                                        $result=mysqli_query($connect,$sql);
                                        $result = mysqli_fetch_assoc($result);
                                        $total=$result['num'];
                                        echo "$total";
                                        ?>
                                    
                                    </h2>
                                    <h4>Requests</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="well dash-box">
                                        <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                      
                                      
                                        <?php
                                include("connection.php");

                                $sql =" SELECT  COUNT(*) as num FROM admin";
                                $result=mysqli_query($connect,$sql);
                                $result = mysqli_fetch_assoc($result);
                                $total=$result['num'];
                                echo "$total";
                                ?>
                                      
                                      
                                      
                                      
                                      
                                      
                                      </h2>
                                        <h4>technicians</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                        <div class="well dash-box">
                                            <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></h2>
                                            <h4>Visiters</h4>
                                        </div>
                                    </div>
                        </div>
                      </div>

                      <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">Latest user</h3>
                            </div>
                            <div class="panel-body">
                              
                                    <table class="table table-striped table-hover">
                                      <tr>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Email</th>
                                      </tr>
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
                                           
                                          </table>
                                        </div>

                            </div>
                          </div>

        </div>


    </div>

</div>

</section>
<footer id="footer">
<p>Copyright, &copy; O'GARAGE 2019</p>

</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>

    </body>
</html>
