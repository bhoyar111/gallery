 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact-Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div class="container-fluid">
      <!-- header section -->
      <div class="row ">
        <div class="col-md-12 head">
          <nav class="navbar navbar-default">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="img/PLOGO.png" class="img-responsive" width="25%"></a>
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
            <h1>CONTACT TO <br>IMAGE GALLERY</h1>
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

      <!-- contact form section -->
      <div class="row category">
        <h2 class="text-center">CONTACT FORM</h2>
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-md-offset-2 contact">
              <img src="img/contactus.jpg" class="img-responsive">
            </div>
            <div class="col-md-4 contact1">
              <form method="post" action="getdata.php">
                <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="FirstName" name="fname">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Last  Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="LastName" name="lname">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email </label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone"  name="phone">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Message</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Message" name="message">
                </div>
                <button type="submit" name="cont_sub" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
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
              <a href=""><span class="glyphicon glyphicon-map-marker" aria-hidden="true"> </span> https://g.page/WebGurukul-IT-Training-Courses?</a>
            </p>
            <p>
             <a href=""> <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>  918698273854</a>
            </p>
            <p><a href=""> <span class="glyphicon glyphicon-envelope" aria-hidden="true"> </span> akashbhoyar49@gmail.com</a></p>
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




