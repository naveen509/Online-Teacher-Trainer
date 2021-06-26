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

$id = $_GET['id'];

// ADD COURSE
if (isset($_POST['update_course'])) {
    // receive all input values from the form
    $course_name = mysqli_real_escape_string($conn, $_POST['course_name']);
    $institution_name = mysqli_real_escape_string($conn, $_POST['institution_name']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $lecturer = mysqli_real_escape_string($conn, $_POST['lecturer']);
    $fees = mysqli_real_escape_string($conn, $_POST['fees']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

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
    }

    // add course if there are no errors in the form
    if (count($errors) == 0) {
        $query = "UPDATE courses SET course_name='$course_name', institution_name='$institution_name', duration='$duration',
                   lecturer='$lecturer', fees='$fees', description='$description'
                   WHERE id='$id'";


        if ($conn->query($query) === TRUE) {
            $_SESSION['success'] = "Course updated successfully...";
            echo('<script type="text/javascript">window.location = "courses.php";</script>');
        } else {
            $_SESSION['error'] = "Could not update course. Something went wrong!";
            echo('<script type="text/javascript">window.location = "courses.php";</script>');
        }
    }
}

