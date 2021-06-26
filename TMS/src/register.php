 
<?php include('db/course/add-user.php') ?>
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
        <script type="text/javascript" src="js/myScript.js"></script>
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
<br>
<center>
<form   action="#" method="post" name="form1" onsubmit="return enablebtn()">


  <div class="regfields"> 
<label>Full name</label>

<input type="text" id="fname" name="fname" style="width: 500px" placeholder="enter the name">
<br><br>

<label>User name</label>  

<input type="text" id="username" name="username" style="width: 500px" placeholder="user name" required>
<br><br>


<label> E-mail address</label>  

<input type="email" id="emailad" name="emailad" style="width: 500px" placeholder="abc@gmail.com" required>
<br><br>

<label>Password</label>
<input type="password" id="password" name="password" style="width: 500px" placeholder="password" required>
<br><br>

<label>Confirm Password</label>
<input type="password" id="rpassword" name="rpassword" style="width: 500px" placeholder="re-enter the password" required>
<br><br>
<label>Accept privacy policy & terms</label>

<input type="checkbox" id="policy" name="policy" required onclick="enablebtn()">
</div> 
 <div class="layout">
<input class="bttn" id="btn1" type="submit" name="register" value="register Now" >

</form>
 
</center>





 
<! -- footer srt here -->
<footer class="footer">
    <?php include('shared-pages/footer.php'); ?>
</footer>

</body>
</html>