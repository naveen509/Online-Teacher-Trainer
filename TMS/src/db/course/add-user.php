<?php
session_start();

include_once 'database.php';


$full_name = "";
$user_name = "";
$email = "";
$password = "";
$confirmpassword = "";
 

$errors = array();

// ADD COURSE
if (isset($_POST['register'])) {
    // receive all input values from the form
    $full_name = mysqli_real_escape_string($conn, $_POST['fname']);
    $user_name = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['emailad']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST['rpassword']); 

    
   

    // form validation: ensure that the form is correctly filled
    if (empty($full_name)) {
        array_push($errors, "full name is required");
    }if (empty($user_name)) {
        array_push($errors, "User name is required");
    }if (empty($email)) {
        array_push($errors, "Email is required");
    }if (empty($password)) {
        array_push($errors, "Password is required");
    }if (empty($confirmpassword)) {
        array_push($errors, "confirmpassword is required");
    } 
     
    

    // add course if there are no errors in the form
    if (count($errors) == 0 and ($password == $confirmpassword) ) {
        $query = "INSERT INTO users (fullName,userName, emailAddress, passWord, confirmPassword) 
					  VALUES('$full_name', '$user_name', '$email', '$password', '$confirmpassword')";

        if ($conn->query($query) === TRUE) {
            $_SESSION['success'] = "You are registered successfully...";
        } else {
            $_SESSION['error'] = " Something went wrong!";
        }

        header('location: userprofile.php');
    }
}

?>


