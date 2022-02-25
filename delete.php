<?php
$host="localhost";
$user="root";
$pass="";
$db="expenses";

$con=new mysqli($host,$user,$pass,$db);
if(!$con){
    echo "There is some problem while connecting the database";
}
 $email=$_POST['email'];
 $password=$_POST['password'];
 $qry="DELETE FROM `data` WHERE `email`='$email' AND `password`='$password'";
 $del=mysqli_query($con,$qry);
 if(!$del){
     echo "There is some problem while deleting the data in database";
 }
 else{
     echo "data deleted";
 }

?>