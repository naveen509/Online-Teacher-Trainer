<?php include_once 'database.php'; ?> 

<?php      
  session_start();     
    
   if(isset($_POST['login'])){

   //chk if the user enterd
    $uname=$_POST['uname'];
    $password=$_POST['pwd'];
    
    $sql="select * from users where userName='".$uname."'AND passWord='".$password."' limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
         header('location: userprofile.php');
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}    
?> 