
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
         


      } */

     
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
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">Welcome,Admin</a></li>
                      <li><a href="#">logout</a></li>
                      
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
                        <a href="adminservice.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>Service <span class="badge">12</span></a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Payment <span class="badge">12</span></a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Message <span class="badge">12</span></a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Report<span class="badge">12</span></a>
                        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>User <span class="badge">12</span></a>

                      
                      </div>



        </div>
        <div class="col-md-9">
                

                      <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">Monthly Report</h3>
                            </div>
                            <div class="panel-body">
                              
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black">MONTHLY PROJECT REPORTS<span class="caret"></span></a>
                                      <ul class="dropdown-menu">
                                        <li><a href="?action=jan" style=":active {background: #ADD8E6}" onMouseOver="this.style.background='#ADD8E6'" onMouseOut="this.style.background='#ADD8E6'">January</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="?action=feb" style=":active {background: #ADD8E6}" onMouseOver="this.style.background='#ADD8E6'" onMouseOut="this.style.background='#FEFDFA'">February</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="?action=march" style=":active {background: #ADD8E6}" onMouseOver="this.style.background='#ADD8E6'" onMouseOut="this.style.background='#FEFDFA'">March</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="?action=april" style=":active {background: #ADD8E6}" onMouseOver="this.style.background='#ADD8E6'" onMouseOut="this.style.background='#FEFDFA'">April</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="?action=may" style=":active {background: orange}" onMouseOver="this.style.background='#ADD8E6'" onMouseOut="this.style.background='#FEFDFA'">May</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="?action=june" style=":active {background: orange}" onMouseOver="this.style.background='#ADD8E6'" onMouseOut="this.style.background='#FEFDFA'">June</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="?action=july" style=":active {background: orange}" onMouseOver="this.style.background='#ADD8E6'" onMouseOut="this.style.background='#FEFDFA'">July</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="?action=aug" style=":active {background: orange}" onMouseOver="this.style.background='#ADD8E6'" onMouseOut="this.style.background='#FEFDFA'">August</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="?action=sept" style=":active {background: orange}" onMouseOver="this.style.background='#ADD8E6'" onMouseOut="this.style.background='#FEFDFA'">September</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="?action=oct" style=":active {background: orange}" onMouseOver="this.style.background='#ADD8E6'" onMouseOut="this.style.background='#FEFDFA'">October</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="?action=nov" style=":active {background: orange}" onMouseOver="this.style.background='#ADD8E6'" onMouseOut="this.style.background='#FEFDFA'">November</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="?action=dec" style=":active {background: orange}" onMouseOver="this.style.background='#ADD8E6'" onMouseOut="this.style.background='#FEFDFA'">December</a></li>
                                      </ul>
                                    </li>
                                  </ul>


                                  <?php
                            $action=$_REQUEST['action'];
                            if($action=='jan'){
                             ?>
            
            
                        
                             <h3><center><font color="#0F9AC7"> January Service Report</font></center></h3>
                                 
                                    <div class="form-check form-check-inline">
                                        <form method="post">
                                        <table class="table table-sm detail-view  table-condensed" style="background-color:white;">
                                            
                                          
            
                                               
                                        </table>
                                        </form>
                                    </div>
                                    
            
                                    <?php
                                    include('connection.php');
                                    $get="SELECT * FROM manager WHERE date like '%-01-%'";?>
                                    
                                    <div  style="overflow-x:scroll;">
                                    <div id="printableTable">
                                    <table id="example" class="table table-striped table-hover table-condensed table-bordered table-dark">
                                        <tr style="background-color:#ADD8E6">
                                            <th>Email</th>
                                            <th>Services</th>
                                            <th>Location</th>
                                            <th>Comments</th>
                                            <th>Carmodel</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                        
                                        <?php $run_sql=mysqli_query($connect,$get);
                                                            
                                        while($fetch=mysqli_fetch_array($run_sql)){	?>
            
                                    <tr bgcolor="white">
                                    <?php
                                    echo '<td>'.$fetch['email'].'</td>'; 
                                    echo'<td>'.$fetch['services'].'</td>';
                                     echo '<td>'.$fetch['location'].'</td>'; 
                                     echo'<td>'.$fetch['comments'].'</td>';
                                     echo '<td>'.$fetch['carmodel'].'</td><td>'.$fetch['date'].'</td>';
                                
                                    }?>
                                </tr>
                                    </table>
                                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                                    </div>
                                </div>
            
                             <?php } ?>
            
                            <!-- End January-->

                            <?php
                            $action=$_REQUEST['action'];
                            if($action=='feb'){
                             ?>
            
            
                        
                             <h3><center><font color="#0F9AC7"> February Service Report</font></center></h3>
                                 
                                    <div class="form-check form-check-inline">
                                        <form method="post">
                                        <table class="table table-sm detail-view  table-condensed" style="background-color:white;">
                                            
                                          
            
                                               
                                        </table>
                                        </form>
                                    </div>
                                    
            
                                    <?php
                                    include('connection.php');
                                    $get="SELECT * FROM manager WHERE date like '%-02-%'";?>
                                    
                                    <div  style="overflow-x:scroll;">
                                    <div id="printableTable">
                                    <table id="example" class="table table-striped table-hover table-condensed table-bordered table-dark">
                                        <tr style="background-color:#ADD8E6">
                                            <th>Email</th>
                                            <th>Services</th>
                                            <th>Location</th>
                                            <th>Comments</th>
                                            <th>Carmodel</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                        
                                        <?php $run_sql=mysqli_query($connect,$get);
                                                            
                                        while($fetch=mysqli_fetch_array($run_sql)){	?>
            
                                    <tr bgcolor="white">
                                    <?php
                                    echo '<td>'.$fetch['email'].'</td>'; 
                                    echo'<td>'.$fetch['services'].'</td>';
                                     echo '<td>'.$fetch['location'].'</td>'; 
                                     echo'<td>'.$fetch['comments'].'</td>';
                                     echo '<td>'.$fetch['carmodel'].'</td><td>'.$fetch['date'].'</td>';
                                
                                    }?>
                                </tr>
                                    </table>
                                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                                    </div>
                                </div>
            
                             <?php } ?>
            
                            <!-- End February-->


                            <?php
                            $action=$_REQUEST['action'];
                            if($action=='march'){
                             ?>
            
            
                        
                             <h3><center><font color="#0F9AC7"> March Service Report</font></center></h3>
                                 
                                    <div class="form-check form-check-inline">
                                        <form method="post">
                                        <table class="table table-sm detail-view  table-condensed" style="background-color:white;">
                                            
                                          
            
                                               
                                        </table>
                                        </form>
                                    </div>
                                    
            
                                    <?php
                                    include('connection.php');
                                    $get="SELECT * FROM manager WHERE date like '%-03-%'";?>
                                    
                                    <div  style="overflow-x:scroll;">
                                    <div id="printableTable">
                                    <table id="example" class="table table-striped table-hover table-condensed table-bordered table-dark">
                                        <tr style="background-color:#ADD8E6">
                                            <th>Email</th>
                                            <th>Services</th>
                                            <th>Location</th>
                                            <th>Comments</th>
                                            <th>Carmodel</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                        
                                        <?php $run_sql=mysqli_query($connect,$get);
                                                            
                                        while($fetch=mysqli_fetch_array($run_sql)){	?>
            
                                    <tr bgcolor="white">
                                    <?php
                                    echo '<td>'.$fetch['email'].'</td>'; 
                                    echo'<td>'.$fetch['services'].'</td>';
                                     echo '<td>'.$fetch['location'].'</td>'; 
                                     echo'<td>'.$fetch['comments'].'</td>';
                                     echo '<td>'.$fetch['carmodel'].'</td><td>'.$fetch['date'].'</td>';
                                
                                    }?>
                                </tr>
                                    </table>
                                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                                    </div>
                                </div>
            
                             <?php } ?>
            
                            <!-- End of March-->

                            <?php
                            $action=$_REQUEST['action'];
                            if($action=='april'){
                             ?>
            
            
                        
                             <h3><center><font color="#0F9AC7"> April Service Report</font></center></h3>
                                 
                                    <div class="form-check form-check-inline">
                                        <form method="post">
                                        <table class="table table-sm detail-view  table-condensed" style="background-color:white;">
                                            
                                          
            
                                               
                                        </table>
                                        </form>
                                    </div>
                                    
            
                                    <?php
                                    include('connection.php');
                                    $get="SELECT * FROM manager WHERE date like '%-04-%'";?>
                                    
                                    <div  style="overflow-x:scroll;">
                                    <div id="printableTable">
                                    <table id="example" class="table table-striped table-hover table-condensed table-bordered table-dark">
                                        <tr style="background-color:#ADD8E6">
                                            <th>Email</th>
                                            <th>Services</th>
                                            <th>Location</th>
                                            <th>Comments</th>
                                            <th>Carmodel</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                        
                                        <?php $run_sql=mysqli_query($connect,$get);
                                                            
                                        while($fetch=mysqli_fetch_array($run_sql)){	?>
            
                                    <tr bgcolor="white">
                                    <?php
                                    echo '<td>'.$fetch['email'].'</td>'; 
                                    echo'<td>'.$fetch['services'].'</td>';
                                     echo '<td>'.$fetch['location'].'</td>'; 
                                     echo'<td>'.$fetch['comments'].'</td>';
                                     echo '<td>'.$fetch['carmodel'].'</td><td>'.$fetch['date'].'</td>';
                                
                                    }?>
                                </tr>
                                    </table>
                                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                                    </div>
                                </div>
            
                             <?php } ?>
            
                            <!-- End January-->

                            <?php
                            $action=$_REQUEST['action'];
                            if($action=='may'){
                             ?>
            
            
                        
                             <h3><center><font color="#0F9AC7"> May Service Report</font></center></h3>
                                 
                                    <div class="form-check form-check-inline">
                                        <form method="post">
                                        <table class="table table-sm detail-view  table-condensed" style="background-color:white;">
                                            
                                          
            
                                               
                                        </table>
                                        </form>
                                    </div>
                                    
            
                                    <?php
                                    include('connection.php');
                                    $get="SELECT * FROM manager WHERE date like '%-05-%'";?>
                                    
                                    <div  style="overflow-x:scroll;">
                                    <div id="printableTable">
                                    <table id="example" class="table table-striped table-hover table-condensed table-bordered table-dark">
                                        <tr style="background-color:#ADD8E6">
                                            <th>Email</th>
                                            <th>Services</th>
                                            <th>Location</th>
                                            <th>Comments</th>
                                            <th>Carmodel</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                        
                                        <?php $run_sql=mysqli_query($connect,$get);
                                                            
                                        while($fetch=mysqli_fetch_array($run_sql)){	?>
            
                                    <tr bgcolor="white">
                                    <?php
                                    echo '<td>'.$fetch['email'].'</td>'; 
                                    echo'<td>'.$fetch['services'].'</td>';
                                     echo '<td>'.$fetch['location'].'</td>'; 
                                     echo'<td>'.$fetch['comments'].'</td>';
                                     echo '<td>'.$fetch['carmodel'].'</td><td>'.$fetch['date'].'</td>';
                                
                                    }?>
                                </tr>
                                    </table>
                                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                                    </div>
                                </div>
            
                             <?php } ?>
            
                            <!-- End May-->

                            <?php
                            $action=$_REQUEST['action'];
                            if($action=='june'){
                             ?>
            
            
                        
                             <h3><center><font color="#0F9AC7"> June Service Report</font></center></h3>
                                 
                                    <div class="form-check form-check-inline">
                                        <form method="post">
                                        <table class="table table-sm detail-view  table-condensed" style="background-color:white;">
                                            
                                          
            
                                               
                                        </table>
                                        </form>
                                    </div>
                                    
            
                                    <?php
                                    include('connection.php');
                                    $get="SELECT * FROM manager WHERE date like '%-06-%'";?>
                                    
                                    <div  style="overflow-x:scroll;">
                                    <div id="printableTable">
                                    <table id="example" class="table table-striped table-hover table-condensed table-bordered table-dark">
                                        <tr style="background-color:#ADD8E6">
                                            <th>Email</th>
                                            <th>Services</th>
                                            <th>Location</th>
                                            <th>Comments</th>
                                            <th>Carmodel</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                        
                                        <?php $run_sql=mysqli_query($connect,$get);
                                                            
                                        while($fetch=mysqli_fetch_array($run_sql)){	?>
            
                                    <tr bgcolor="white">
                                    <?php
                                    echo '<td>'.$fetch['email'].'</td>'; 
                                    echo'<td>'.$fetch['services'].'</td>';
                                     echo '<td>'.$fetch['location'].'</td>'; 
                                     echo'<td>'.$fetch['comments'].'</td>';
                                     echo '<td>'.$fetch['carmodel'].'</td><td>'.$fetch['date'].'</td>';
                                
                                    }?>
                                </tr>
                                    </table>
                                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                                    </div>
                                </div>
            
                             <?php } ?>
            
                            <!-- End June-->

                            <?php
                            $action=$_REQUEST['action'];
                            if($action=='july'){
                             ?>
            
            
                        
                             <h3><center><font color="#0F9AC7"> July Service Report</font></center></h3>
                                 
                                    <div class="form-check form-check-inline">
                                        <form method="post">
                                        <table class="table table-sm detail-view  table-condensed" style="background-color:white;">
                                            
                                          
            
                                               
                                        </table>
                                        </form>
                                    </div>
                                    
            
                                    <?php
                                    include('connection.php');
                                    $get="SELECT * FROM manager WHERE date like '%-07-%'";?>
                                    
                                    <div  style="overflow-x:scroll;">
                                    <div id="printableTable">
                                    <table id="example" class="table table-striped table-hover table-condensed table-bordered table-dark">
                                        <tr style="background-color:#ADD8E6">
                                            <th>Email</th>
                                            <th>Services</th>
                                            <th>Location</th>
                                            <th>Comments</th>
                                            <th>Carmodel</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                        
                                        <?php $run_sql=mysqli_query($connect,$get);
                                                            
                                        while($fetch=mysqli_fetch_array($run_sql)){	?>
            
                                    <tr bgcolor="white">
                                    <?php
                                    echo '<td>'.$fetch['email'].'</td>'; 
                                    echo'<td>'.$fetch['services'].'</td>';
                                     echo '<td>'.$fetch['location'].'</td>'; 
                                     echo'<td>'.$fetch['comments'].'</td>';
                                     echo '<td>'.$fetch['carmodel'].'</td><td>'.$fetch['date'].'</td>';
                                
                                    }?>
                                </tr>
                                    </table>
                                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                                    </div>
                                </div>
            
                             <?php } ?>
            
                            <!-- End July-->

                            <?php
                            $action=$_REQUEST['action'];
                            if($action=='aug'){
                             ?>
            
            
                        
                             <h3><center><font color="#0F9AC7"> August Service Report</font></center></h3>
                                 
                                    <div class="form-check form-check-inline">
                                        <form method="post">
                                        <table class="table table-sm detail-view  table-condensed" style="background-color:white;">
                                            
                                          
            
                                               
                                        </table>
                                        </form>
                                    </div>
                                    
            
                                    <?php
                                    include('connection.php');
                                    $get="SELECT * FROM manager WHERE date like '%-08-%'";?>
                                    
                                    <div  style="overflow-x:scroll;">
                                    <div id="printableTable">
                                    <table id="example" class="table table-striped table-hover table-condensed table-bordered table-dark">
                                        <tr style="background-color:#ADD8E6">
                                            <th>Email</th>
                                            <th>Services</th>
                                            <th>Location</th>
                                            <th>Comments</th>
                                            <th>Carmodel</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                        
                                        <?php $run_sql=mysqli_query($connect,$get);
                                                            
                                        while($fetch=mysqli_fetch_array($run_sql)){	?>
            
                                    <tr bgcolor="white">
                                    <?php
                                    echo '<td>'.$fetch['email'].'</td>'; 
                                    echo'<td>'.$fetch['services'].'</td>';
                                     echo '<td>'.$fetch['location'].'</td>'; 
                                     echo'<td>'.$fetch['comments'].'</td>';
                                     echo '<td>'.$fetch['carmodel'].'</td><td>'.$fetch['date'].'</td>';
                                
                                    }?>
                                </tr>
                                    </table>
                                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                                    </div>
                                </div>
            
                             <?php } ?>
            
                            <!-- End August-->

                            <?php
                            $action=$_REQUEST['action'];
                            if($action=='sept'){
                             ?>
            
            
                        
                             <h3><center><font color="#0F9AC7"> September Service Report</font></center></h3>
                                 
                                    <div class="form-check form-check-inline">
                                        <form method="post">
                                        <table class="table table-sm detail-view  table-condensed" style="background-color:white;">
                                            
                                          
            
                                               
                                        </table>
                                        </form>
                                    </div>
                                    
            
                                    <?php
                                    include('connection.php');
                                    $get="SELECT * FROM manager WHERE date like '%-09-%'";?>
                                    
                                    <div  style="overflow-x:scroll;">
                                    <div id="printableTable">
                                    <table id="example" class="table table-striped table-hover table-condensed table-bordered table-dark">
                                        <tr style="background-color:#ADD8E6">
                                            <th>Email</th>
                                            <th>Services</th>
                                            <th>Location</th>
                                            <th>Comments</th>
                                            <th>Carmodel</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                        
                                        <?php $run_sql=mysqli_query($connect,$get);
                                                            
                                        while($fetch=mysqli_fetch_array($run_sql)){	?>
            
                                    <tr bgcolor="white">
                                    <?php
                                    echo '<td>'.$fetch['email'].'</td>'; 
                                    echo'<td>'.$fetch['services'].'</td>';
                                     echo '<td>'.$fetch['location'].'</td>'; 
                                     echo'<td>'.$fetch['comments'].'</td>';
                                     echo '<td>'.$fetch['carmodel'].'</td><td>'.$fetch['date'].'</td>';
                                
                                    }?>
                                </tr>
                                    </table>
                                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                                    </div>
                                </div>
            
                             <?php } ?>
            
                            <!-- End September-->

                            <?php
                            $action=$_REQUEST['action'];
                            if($action=='oct'){
                             ?>
            
            
                        
                             <h3><center><font color="#0F9AC7"> October Service Report</font></center></h3>
                                 
                                    <div class="form-check form-check-inline">
                                        <form method="post">
                                        <table class="table table-sm detail-view  table-condensed" style="background-color:white;">
                                            
                                          
            
                                               
                                        </table>
                                        </form>
                                    </div>
                                    
            
                                    <?php
                                    include('connection.php');
                                    $get="SELECT * FROM manager WHERE date like '%-10-%'";?>
                                    
                                    <div  style="overflow-x:scroll;">
                                    <div id="printableTable">
                                    <table id="example" class="table table-striped table-hover table-condensed table-bordered table-dark">
                                        <tr style="background-color:#ADD8E6">
                                            <th>Email</th>
                                            <th>Services</th>
                                            <th>Location</th>
                                            <th>Comments</th>
                                            <th>Carmodel</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                        
                                        <?php $run_sql=mysqli_query($connect,$get);
                                                            
                                        while($fetch=mysqli_fetch_array($run_sql)){	?>
            
                                    <tr bgcolor="white">
                                    <?php
                                    echo '<td>'.$fetch['email'].'</td>'; 
                                    echo'<td>'.$fetch['services'].'</td>';
                                     echo '<td>'.$fetch['location'].'</td>'; 
                                     echo'<td>'.$fetch['comments'].'</td>';
                                     echo '<td>'.$fetch['carmodel'].'</td><td>'.$fetch['date'].'</td>';
                                
                                    }?>
                                </tr>
                                    </table>
                                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                                    </div>
                                </div>
            
                             <?php } ?>
            
                            <!-- End October-->

                            <?php
                            $action=$_REQUEST['action'];
                            if($action=='nov'){
                             ?>
            
            
                        
                             <h3><center><font color="#0F9AC7"> November Service Report</font></center></h3>
                                 
                                    <div class="form-check form-check-inline">
                                        <form method="post">
                                        <table class="table table-sm detail-view  table-condensed" style="background-color:white;">
                                            
                                          
            
                                               
                                        </table>
                                        </form>
                                    </div>
                                    
            
                                    <?php
                                    include('connection.php');
                                    $get="SELECT * FROM manager WHERE date like '%-11-%'";?>
                                    
                                    <div  style="overflow-x:scroll;">
                                    <div id="printableTable">
                                    <table id="example" class="table table-striped table-hover table-condensed table-bordered table-dark">
                                        <tr style="background-color:#ADD8E6">
                                            <th>Email</th>
                                            <th>Services</th>
                                            <th>Location</th>
                                            <th>Comments</th>
                                            <th>Carmodel</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                        
                                        <?php $run_sql=mysqli_query($connect,$get);
                                                            
                                        while($fetch=mysqli_fetch_array($run_sql)){	?>
            
                                    <tr bgcolor="white">
                                    <?php
                                    echo '<td>'.$fetch['email'].'</td>'; 
                                    echo'<td>'.$fetch['services'].'</td>';
                                     echo '<td>'.$fetch['location'].'</td>'; 
                                     echo'<td>'.$fetch['comments'].'</td>';
                                     echo '<td>'.$fetch['carmodel'].'</td><td>'.$fetch['date'].'</td>';
                                
                                    }?>
                                </tr>
                                    </table>
                                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                                    </div>
                                </div>
            
                             <?php } ?>
            
                            <!-- End November-->

                            <?php
                            $action=$_REQUEST['action'];
                            if($action=='dec'){
                             ?>
            
            
                        
                             <h3><center><font color="#0F9AC7"> December Service Report</font></center></h3>
                                 
                                    <div class="form-check form-check-inline">
                                        <form method="post">
                                        <table class="table table-sm detail-view  table-condensed" style="background-color:white;">
                                            
                                          
            
                                               
                                        </table>
                                        </form>
                                    </div>
                                    
            
                                    <?php
                                    include('connection.php');
                                    $get="SELECT * FROM manager WHERE date like '%-12-%'";?>
                                    
                                    <div  style="overflow-x:scroll;">
                                    <div id="printableTable">
                                    <table id="example" class="table table-striped table-hover table-condensed table-bordered table-dark">
                                        <tr style="background-color:#ADD8E6">
                                            <th>Email</th>
                                            <th>Services</th>
                                            <th>Location</th>
                                            <th>Comments</th>
                                            <th>Carmodel</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                        
                                        <?php $run_sql=mysqli_query($connect,$get);
                                                            
                                        while($fetch=mysqli_fetch_array($run_sql)){	?>
            
                                    <tr bgcolor="white">
                                    <?php
                                    echo '<td>'.$fetch['email'].'</td>'; 
                                    echo'<td>'.$fetch['services'].'</td>';
                                     echo '<td>'.$fetch['location'].'</td>'; 
                                     echo'<td>'.$fetch['comments'].'</td>';
                                     echo '<td>'.$fetch['carmodel'].'</td><td>'.$fetch['date'].'</td>';
                                
                                    }?>
                                </tr>
                                    </table>
                                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                                    </div>
                                </div>
            
                             <?php } ?>
            
                            <!-- End December-->



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
