<?php
  if(isset($_POST['Book']))
  {
   $full_name = $_POST['full_name'];
   $bookingNumber = $_POST['bookingNumber'];
   $email = $_POST['email'];
   $problem = $_POST['problem'];
   

   //Database Connection
   $host="localhost";
   $username="root";
   $password=" ";
   $dbname="chatapp";

   ///connection
   $con=mysqli_connect($host,$username,$password,$dbname);

   if(!$con)
   {
    die("connection failed".mysqli_connect_error());
   }
   $sql="insert into counselling (full_name,bookingNumber,email,problem) values ('$full_name','$bookingNumber','$email','$problem')";
   $rs=mysqli_query($con,$sql);
   if($rs){
    echo"registered sucessfully";
   }
   else{
    echo"error";
   }
   mysqli_close($con);
  }
?>