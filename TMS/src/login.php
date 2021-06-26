<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/myScript.css">
</head>
<body>

<div class="navbar-top">
    <?php include('shared-pages/header.php'); ?>
</div>

<div class="navbar-menu">
    <div class="container">
        <nav class="navbar-menu-items">
            <ul class="primary-nav">
                <li class="current"><a href="http://localhost/TMS/src/index.php">Home</a></li>
                <li ><a href="http://localhost/TMS/src/courses.php">Courses</a></li>
                <li><a href="#">Subjects</a></li>
                <li><a href="#">News & Blog</a></li>
                <li><a href="#">About Us</a></li>
           
            </ul>
        </nav>
    </div>
</div>

<div class="main">
    <div class="container">
        
    </div>
</div>


<?php include('db/course/log-in.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>login form</title>
  <link rel="stylesheet" type="text/css" href="styles/loginformStyles.css">
</head>
<body>
<center>
<div class="form-style-6">
<h1>Login With Us</h1>


<form method = "POST" action="#">
<div class="loginfield">	  
<label>Username</label>
<input type="text" id="uname" name="uname" placeholder="Your Username" /><br>
<label>Password</label>
<input type="password" id="pwd" name="pwd" placeholder="Password" /><br/><br/>

</div>

<input class="btnlogin" type="submit" name="login" value="Log In"><br/><br/>
	 


   
            
  </center>      
</form>

</div>
 
</body>
</html>

 

<h4 align="center"><a href="https://courseweb.sliit.lk"> visit us </a></h4> 




<footer class="footer">
    <?php include('shared-pages/footer.php'); ?>
</footer>

</body>
</html>