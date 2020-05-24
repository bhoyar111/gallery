<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registration form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <center>
      <div class="row regi trans">
        <div class="col-md-8 ">
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
    </center>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>




