<?php
include 'config.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Registration Form</title>
    <style>
    form{
      width: 30%;
      margin:0px auto;
      padding: 20px;
      border: 2px solid #B0C4DE;
      background: white;
      border radius:0px 0px 10px 10px;
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="register.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Team</a>
    </li>
  </ul>
</nav>

<div class="container">
<div class="header text-center">
    <h2>Register</h2>
</div>
<form action="" method="post">
     <div class="form-group">
       <label for="username">Username:</label>
       <input type="text" class="form-control" id="username" placeholder="Enter name" name="username" required>
     </div>
     <div class="form-group">
       <label for="email">Email:</label>
       <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
     </div>
     <div class="form-group">
       <label for="pwd">Password:</label>
       <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password1" required>
     </div>
     <div class="form-group">
        <label for="pwd">Confirm Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password2" required>
        </label>
     </div>
     <button type="submit" name="register" class="btn btn-primary">Register</button>
    <p>
      Already a member? <a href="login.php">Sign In</a>
    </p>
   </form>
 </div>

 <?php
  if(isset($_POST["register"]))
  {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    if($password1 != $password2){
      ?>
      <div class="alert alert-danger">
       <strong>Danger!</strong>Both the password does not match.
     </div>
      <?php
    }
    if($password1 === $password2){
    $ins = "insert into registertable (username,email,password1)values('".$username."','".$email."','".$password1."') ";

      if($conn->query($ins) === true)
        {
          header("location:login.php");
        }
        else{
          echo "error";
        }
    }
    $conn->close();
  }
    ?>
</body>
</html>
