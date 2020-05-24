<?php 
 $con = new mysqli('localhost', 'root', '', 'gallery');

 $query = "SELECT * FROM img_upload";

 $result = $con->query($query);

 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home-Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div class="container-fluid">
      <!-- header section -->
      <div class="row">
        <div class="col-md-12 head">
          <nav class="navbar navbar-default">
            <div class="Logout">
              <a href="logout.php"><button class="btn btn-danger">Logout</button></a>
            </div>
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="img/PLOGO.png" class="img-responsive" width="25%"></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="feedback.php">Feedback</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>
      </div>

      <!-- banner section -->
      <div class="row banner">
        <div class="col-md-12 opacity">
          <div class="jumbotron text-center">
            <h1>WELCOME TO <br>IMAGE GALLERY</h1>
            <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">More Details</a>
          </div>
        </div>
      </div>

      <!-- Category section -->
      <div class="row category text-center">
        <h2>CATEGORIES</h2>
        <?php 
          while ($data= $result->fetch_assoc()) {
            echo "<div class='col-md-3 down'>";
            
                echo "<a href='admin_IG/upload/".$data['image']."'class='thumbnail'>
                <img src='admin_IG/upload/".$data['image']."'class= img-responsive></a>";
              
                echo "<a href='download.php?file=".$data['image']."' class='btn btn-primary'><span class='glyphicon glyphicon-save' area-hidden='true'></span>Download</a>";
                
            echo "</div>";
          }
         ?>
      </div>
      <!-- Link section -->
      <div class="row link">
        <div class="container">
          <div class="col-md-5">
            <h3>About</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-3">
            <h3>Quick links</h3>
            <p>
              <ul>
                <li><a href="about.php">About</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="service.php">services</a></li>
              </ul>
            </p>
          </div>
          <div class="col-md-4">
            <h3>Contact</h3>
            <p>
              <a href="https://g.page/WebGurukul-IT-Training-Courses?share"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"> </span>https://g.page/WebGurukul-IT-Training-Courses?</a>
            </p>
            <p>
             <a href=""> <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>  918698273854</a>
            </p>
            <p><a href=""> <span class="glyphicon glyphicon-envelope" aria-hidden="true"> </span> akashbhoyar49@gmail.com</a></p>
            <p><!-- Button trigger modal -->
              <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">
               SIGNUP
              </button>

              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Registration</h4>
                    </div>
                    <div class="modal-body">
                      <!DOCTYPE html>
                      <html lang="en">
                        <head>
                          <meta charset="utf-8">
                          <meta http-equiv="X-UA-Compatible" content="IE=edge">
                          <meta name="viewport" content="width=device-width, initial-scale=1">
                          <title>registration</title>

                          <!-- Bootstrap -->
                          <link href="css/bootstrap.min.css" rel="stylesheet">
                          <link rel="stylesheet" type="text/css" href="css/style.css">
                        </head>
                        <body>
                          <center>
                            <div class="row regi">
                              <div class="col-md-8">
                                <form method="post" action="getdata.php">
                                  <div class="form-group text-center">
                                     <a href="index.php"><img src="img/PLOGO.png" class="img-responsive" width="35%"></a>
                                      <h2>Rgistration Form</h2>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputFirstName1">First Name</label>
                                    <input type="text" name="fname" class="form-control" id="exampleInputFirstNamel1" placeholder="Name">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputLast_Name1">Last Name</label>
                                    <input type="text" name="lname" class="form-control" id="exampleInputEmail1" placeholder="Last_Name">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password"  name="cpassword" class="form-control" id="exampleInputEmail1" placeholder="Password">
                                  </div>
                               
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Mobile Number</label>
                                    <input type="number" name="mobile" class="form-control" id="exampleInputMobile1" placeholder="Number">
                                  </div>
                                  
                                  <div class="checkbox">
                                    <label><input type="checkbox"> Check me out</label>
                                  </div>
                                  <p><button type="submit" name="reg_sub" class="btn btn-default">Submit</button></p>
                                  <div class="form-group text-center">
                                    <label>Already have an account?<a href="login.php">LOGIN</a></label>
                                  </div>
                                </form>
                              </div>
                            </div>
                           </div>
                         </div>
                         </center>

                          
                        </body>
                      </html>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                      
                    </div>
                  </div>
                </div>
              </div>
            </p>
          </div>
        </div>
      </div>
      <!-- Footer section -->
      <div class="row footer">
        <div class="col-md-12">
          <p>
            Copyright &copy; Webgurukul 2019.
          </p>
        </div>
      </div>
    </div>  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>







