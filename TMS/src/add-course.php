<?php include('db/course/add-course.php') ?>

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
        <section class="add-course">
            <div class="grid-container">
                <div class="item">
                    <button type="button" id="btn-h1" class="btn-course">Create New Course</button>
                </div>
                <div class="item" id="form-item">
                    <h4>New Course Details</h4>
                    <?php include('errors.php'); ?>

                    <form method="post" action="add-course.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-25">
                                <label for="course_name">Course Name*</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="course_name" value="<?php echo $course_name; ?>" name="course_name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="institution_name">Institution</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="institution_name" value="<?php echo $institution_name; ?>" name="institution_name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="duration">Duration</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="duration" value="<?php echo $duration; ?>" name="duration">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lecturer">Lecturer</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="lecturer" value="<?php echo $lecturer; ?>" name="lecturer">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="fees">Fees</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fees" value="<?php echo $fees; ?>" name="fees">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="description">Course Description</label>
                            </div>
                            <div class="col-75">
                                <textarea id="description" name="description" style="height:100px">
                                    <?php echo $description; ?>
                                </textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="fees">Image</label>
                            </div>
                            <div class="col-75">
                                <input type="file" style="margin-top : 15px;" name="uploadfile" value="" />
                            </div>
                        </div>

                        <div class="row">
                            <a class="btn-cancel" href="http://localhost/TMS/src/courses.php">Cancel</a>
                            <input type="submit" value="Submit" name="create_course">
                        </div>
                    </form>
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