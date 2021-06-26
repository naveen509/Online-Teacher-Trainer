<?php
session_start();

include_once 'database.php';

$id = $_GET['id'];

$course = mysqli_query($conn,"SELECT id, image from courses where id='$id'");

if(!$row = $course->fetch_assoc()) {
    header('location: courses.php');
}

$file_name =  '../../images/course-images/'.$row['image'];


if (file_exists($file_name)) {
    unlink($file_name);
}else{
    echo($file_name);
}

$sql = "DELETE FROM courses WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    $_SESSION['success'] = "Course deleted successfully...";
    echo('<script type="text/javascript">window.location = "http://localhost/TMS/src/courses.php";</script>');
} else {
    $_SESSION['error'] = "Could not delete course. Something went wrong!";
    echo('<script type="text/javascript">window.location = "http://localhost/TMS/src/courses.php";</script>');
}
