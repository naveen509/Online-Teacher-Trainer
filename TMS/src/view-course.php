<?php
include_once 'db/course/database.php';

if($id = $_GET['id']) {
    $result = mysqli_query($conn,"SELECT * FROM courses where id='$id'");

    if(!$row = $result->fetch_assoc()) {
        header('location: courses.php');
    }
}else{
    header('location: courses.php');

}

?>

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
        <div class="btn-back">
            <a  href="http://localhost/TMS/src/courses.php"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <?php
                if($result) {
                    echo('
                         <section class="view-course">
                            <div class="grid-container">
                            <div class="item">
                                <img src="images/course-images/'.$row['image'].'" alt="image">
                            </div>
                            <div class="item">
                                <div class="stars">
                                    <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                                    <i class="fa fa-star" style="color: yellow;"></i>
                                    <i class="fa fa-star" style="color: yellow;"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="cou-name">
                                   <span>'.$row['course_name'].'</span>
                                </div>
                                <div class="btn-star">
                                    <button type="button" >Start Now</button>
                                </div>
                            </div>
                            <div class="item2">
                                <div style="text-align:center" id="c-circle">
                                    <span class="dot">
                                        <p>10</p>
                                    </span>
                                    <span class="dot">
                                          <p>8</p>
                                    </span>
                                    <span class="dot">
                                          <p>24</p>
                                    </span>
                                </div>
          
                                <div id="v-footer">
                                    <div id="m-name-1">Modules</div>
                                    <div id="m-name-2">Topics</div>
                                    <div id="m-name3">Hours</div>
                                </div>
                            </div>
                            </div>
                        </section>
                    ');
                }else{
                    echo('<h3>The course that you are trying see, is missing!</h3>');
                }
                ?>

        <section class="modules">
            <button type="button">MODULE-1</button>
            <div class="grid-container">
                <div class="item-1">
                    <div class="module">
                        <a href="#"  type="button">1- Introduction</a>
                    </div>
                </div>
                <div class="item-2">
                    <img src="images/icons/video_player.jpg" alt="icon">
                </div>
            </div>

            <div class="grid-container">
                <div class="item-1">
                    <div class="module">
                        <a href="#"  type="button">2- Installation anc configure</a>
                    </div>
                </div>
                <div class="item-2">
                    <img src="images/icons/video_player.jpg" alt="icon">
                </div>
            </div>
        </section>
    </div>
</div>

<footer class="footer">
    <?php include('shared-pages/footer.php'); ?>
</footer>

</body>
</html>