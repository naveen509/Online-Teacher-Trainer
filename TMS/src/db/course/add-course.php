<?php
session_start();

include_once 'database.php';


$course_name = "";
$institution_name = "";
$duration = "";
$lecturer = "";
$fees = "";
$description = "";

$errors = array();

// ADD COURSE
if (isset($_POST['create_course'])) {
    // receive all input values from the form
    $course_name = mysqli_real_escape_string($conn, $_POST['course_name']);
    $institution_name = mysqli_real_escape_string($conn, $_POST['institution_name']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $lecturer = mysqli_real_escape_string($conn, $_POST['lecturer']);
    $fees = mysqli_real_escape_string($conn, $_POST['fees']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "images/course-images/".$filename;


    // form validation: ensure that the form is correctly filled
    if (empty($course_name)) {
        array_push($errors, "Course name is required");
    }if (empty($institution_name)) {
        array_push($errors, "Institution name is required");
    }if (empty($duration)) {
        array_push($errors, "Duration is required");
    }if (empty($lecturer)) {
        array_push($errors, "Lecturer name is required");
    }if (empty($fees)) {
        array_push($errors, "Fees is required");
    }if (empty($description)) {
        array_push($errors, "Description is required");
    }if (empty($filename)) {
        array_push($errors, "Image is required");
    }

    // add course if there are no errors in the form
    if (count($errors) == 0) {
        $query = "INSERT INTO courses (course_name, institution_name , duration, lecturer, fees, description,image) 
					  VALUES('$course_name', '$institution_name', '$duration', '$lecturer', '$fees', '$description', '$filename')";

        if ($conn->query($query) === TRUE && move_uploaded_file($tempname, $folder)) {
            $_SESSION['success'] = "Course added successfully...";
        } else {
            $_SESSION['error'] = "Could not add course. Something went wrong!";
        }

        header('location: courses.php');
    }
}





