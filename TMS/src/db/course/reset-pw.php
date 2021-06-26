<?php session_start(); ?>
<?php include_once 'database.php'; ?> 

<?php 

if(isset($_POST['reset'])){
	$cpassword = $_POST['cpassword'];
	$npassword = $_POST['npassword'];
	$rpassword = $_POST['rpassword'];
	//$empID = $_SESSION['ID'];


		$query = "SELECT * FROM users
						 
						LIMIT 1 ";


			$result_set = mysqli_query($conn,$query);
			$result = mysqli_fetch_assoc($result_set);

			$pwd = $result['passWord'];
			$empID = $result['ID'];




	if($cpassword == $pwd){

		if($npassword == $rpassword){

			$sql = "UPDATE users SET passWord = '$npassword',confirmPassword='$rpassword' WHERE ID = '$empID'";
			$result = mysqli_query($conn, $sql);

			if ($result) {
				 echo " You Have Successfully channged the Password";
				  header('location: userprofile.php');
        exit();
			}else{
				 echo " You Have Entered wrong Password";
        exit();
			}

		
		}else{
			 echo " You Have Entered unmatched Password";
        exit();
		}

	}else{
		 echo " Your current password is wrong ";
        exit();
	}



}

 ?>