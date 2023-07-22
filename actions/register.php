<?php 
 include('connection.php');  // connection Database
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $username = $_POST["username"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   $cpassword = $_POST["cpassword"];
   
   if($password== $cpassword){
      $data = "SELECT * FROM `registration` WHERE user_email = '$email'";
      $result = mysqli_query($con,$data);
      $row = mysqli_fetch_row($result) ;
      if($row > 0){
         echo "Email Already Exists";
      }else{
         $query = "INSERT INTO `registration`(user_name, user_email, user_password) VALUES('$username','$email','$password')";
         $query = mysqli_query($con,$query);
         if($query){
         $msg = 'Registration Successfull';
         $status = 'Success';
         header('location:../index.php?msg='.$msg);
         }else{
         $msg = 'Registration Failed! Plz Try Again';
        
         header('location:../register.php?msg='.$msg);
   }

      }
   }
   else{
      echo "Password Do Not Matched";
   }


   
}









?>