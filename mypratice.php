<html>
    <head>
        <title>MYNAVBAR</title>


        <link rel="stylesheet" href="css/bootstrap.min.css"  crossorigin="anonymous">
 <!-- <script src="jquery-3.3.1.slim.min.js" ></script>
        <script src="popper.js/1.14.7/umd/popper.min.js" ></script>
        <script src="js/bootstrap.min.js" ></script> -->

    </head>
<style>
        .dropdown:hover>.dropdown-menu{
            display:block;
        }
    </style>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

                <a class="navbar-brand"  href="">O'GARAGE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                 aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">  </span>
                      </button>
<div class="collapse navbar-collapse" id="#navbarTogglerDemo01">
        
            <ul class="navbar-nav   ml-auto">
               
                        <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Edit Profile
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">My profile</a>
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
                  <a href="#" class="list-group-item active" style="background-color: #928b8d">profile</a>
                  <a href="request.html" class="list-group-item">service</a>
                  <a href="#" class="list-group-item">contact</a>
                  <a href="request.html" class="list-group-item">Payment</a>
                  <a href="#" class="list-group-item">message</a>
                  <a href="request.html" class="list-group-item">comments</a>
                  <a href="#" class="list-group-item">about</a>
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