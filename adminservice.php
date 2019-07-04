
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
      
     
    </style>
  
  </head>
  <body style="background-color: #f1e0e0">
        <nav class="navbar navbar-default">
                <div class="container-fluid">
                  
                  <div class="navbar-header">
                    <a class="navbar-brand" href="#">Automotive repair</a>
                  </div>
              
                
                   
                      
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
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>Service Requests <span class="badge"></span></a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Add Technician <span class="badge"></span></a>
                        <a href="report.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Report<span class="badge"></span></a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>User <span class="badge"></span></a>

                      
                      </div>



        </div>
        <div class="col-md-9">
                

                      <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">Service Requests</h3>
                            </div>
                            <div class="panel-body">
                              
                              <table class="table table-striped table-hover">
                                <tr>
                                  <th>email</th>
                                  <th>services</th>
                                  <th>location</th>
                                  <th>comments</th>
                                  <th>carmodel</th>
                                  <th>date</th>
                                </tr>
                                
                               <?php

                               Include('connection.php');
                               $sql="SELECT * from manager";
                               $result=mysqli_query($connect,$sql);

                               while($rows=mysqli_fetch_array($result))
                               {
                                   $email=$rows['email'];
                                   $services=$rows['services'];
                                   $location=$rows['location'];
                                   $comments=$rows['comments'];
                                   $carmodel=$rows['carmodel'];
                                   $date=$rows['date'];

                                   echo("<tr>");
                                       echo("<td>$email</td>");
                                       echo("<td>$services</td>");
                                       echo("<td>$location</td>");
                                       echo("<td>$comments</td>");
                                       echo("<td>$carmodel</td>");
                                       echo("<td>$date</td>");
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
<p>Copyright, &copy; 2019</p>

</footer> 



 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>

    </body>
</html>
7