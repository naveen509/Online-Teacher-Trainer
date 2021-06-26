<?php
session_start();
include_once 'db/course/database.php';
$results = mysqli_query($conn,"SELECT * FROM courses ORDER BY id DESC");
if(!$results) {
    echo('Something went wrong');
}

?>

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






<div class="main">
    <div class="container">
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success" id="cs-message">
                <?php if (isset($_SESSION['success'])) : ?>
                    <p><strong><?php echo("{$_SESSION['success']}"); unset($_SESSION['success']);?></strong></p>
                <?php endif ?>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error" id="ce-message">
                <?php if (isset($_SESSION['error'])) : ?>
                    <p><strong><?php echo("{$_SESSION['error']}"); unset($_SESSION['error']);?></strong></p>
                <?php endif ?>
                <a href="">Back to home</a>
            </div>

        <?php endif ?>

        <br><br>

        <a href="http://localhost/TMS/src/resetpw.php" class="btn-add-course"><i class="fa fa-plus"></i> Reset the Password</a>
        <h4 type="button" class="btn-course" width="100"> Courses in Progress</h4>
        

        <section class="course-list">
            <div class="grid-container">
                <?php
                if ($results->num_rows > 0) {
                    // output data of each row
                    while($row = $results->fetch_assoc()) {
                        echo '
                       <div class="item">
                            <img src="images/course-images/'.$row['image'].'" alt='.$row['course_name'].'>
                             <p class="course-name">'.$row['course_name'].'</p>
                            <div  class="btn-view">
                               
                            </div>
                        </div>';
                    }
                } else {
                    echo '
                        <div style="text-align: center">
                            <h5>No courses available</h5>
                        </div>
                    ';
                }
                ?>




            </div>
        </section>
<h4 type="button" class="btn-course" width="100"> Click here to chat with Administration</h4>
<h4 type="button" class="btn-course" width="100"> Click here to Rate and  our Course</h4>
<h4 type="button" class="btn-course" width="100"> Click here to get the Certificates</h4>
<h4 type="button" class="btn-course" width="100"> Click here to Endroll for new Course</h4>
    </div>
</div>


 

<footer class="footer">
    <br><br>
    <?php include('shared-pages/footer.php'); ?>
</footer>

<script type="text/javascript" src="js/courses.js"></script>
</body>
</html>