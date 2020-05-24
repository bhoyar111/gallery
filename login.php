<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login_form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <center>
      <div class="container">
        <div class="row login">
          <div class="col-md-6 col-md-offset-3" >
            <form method="post" action="getdata.php">
              <div class="form-group text-center">
                <a href="index.php"><img src="img/PLOGO.png" class="img-responsive" width="40%"></a>
                <h2>LOGIN FORM</h2>
              </div>
                
              <div class="form-group">
                <label for="exampleInputEmail1">Email </label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group an">
                <a href="registration.php">Register here</a>
                <p><button type="submit" name="log_sub" class="btn btn-default">Submit</button></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </center>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>




