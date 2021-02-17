<?php 
include("db_connection.php");?>
<!DOCTTYPE html>
<html>
<head>
<title>Registration system PHP and MySQL</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h2>Login</h2>
</div>
 <form method="post" action="login.php">
 <?php include('errors.php'); ?>
 <div class="form-group">
     <label>Username</label>
     <input type="text" name="username">
 </div>
 <div class="form-group">
     <label>Password</label>
     <input type="password" name="password">
 </div>
 <div class="input-type">
      <button type="submit" class="btn" name="login.user">Login</button> 
 </div>
    <p>
    Don't have an account? <a href="register.php">Sign up</a>
    </p>

 </form>
</body>
</html>