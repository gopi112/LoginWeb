<?php session_start();
if($_SESSION["login"]!=TRUE){
  header("location:login.php");
}
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>hello</h1>
<p><?php echo $_SESSION["login"]; ?></p>
<a href="logout.php"><p>logout</p></a>
  </body>
</html>
