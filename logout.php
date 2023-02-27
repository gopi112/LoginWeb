<?php
session_destroy();
$_SESSION["login"] = null;
header("location:login.php");
?>
