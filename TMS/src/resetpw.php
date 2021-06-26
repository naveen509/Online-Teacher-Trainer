 
<?php include('db/course/reset-pw.php') ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add course</title>
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
                <li><a href="http://localhost/TMS/src/index.php">Home</a></li>
                <li class="current"><a href="http://localhost/TMS/src/courses.php">Courses</a></li>
                <li><a href="#">Subjects</a></li>
                <li><a href="#">News & Blog</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </nav>
    </div>
</div>
<! -- nav bar end -->
<br><br><br>
<center>
<form   action="#" method="post" name="formrp" >


  <div class="resetfields">  
<label>current password</label>

<input type="password" id="cpassword" name="cpassword" style="width: 500px"  required>
<br><br>

<label>New password</label>  

<input type="password" id="npassword" name="npassword" style="width: 500px"  required>
<br><br>

<label>Confirm New password</label>  

<input type="password" id="rpassword" name="rpassword" style="width: 500px"  required>
<br><br>
 

</div>

<input  id="reset" class="resetclass" type="submit" name="reset" value="reset password">

</form>
 
</center>





 
<! -- footer srt here -->
<footer class="footer">
    <?php include('shared-pages/footer.php'); ?>
</footer>

</body>
</html>