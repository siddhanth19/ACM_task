<?php
$host="localhost";
$user="root";
$pass="";
$db="expenses";

$con=new mysqli($host,$user,$pass,$db);
if(!$con){
    echo "There is some problem while connecting the database";
}
else{
    echo "Connection sucessful<br>";
}
 $email=$_POST['email'];
 $password=$_POST['password'];

 $qry="SELECT * FROM `data` WHERE `email`='$email' AND `password`='$password';";
 $see=mysqli_query($con,$qry);
 echo $see;
?>