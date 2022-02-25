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
 $expenses=$_POST['expenses'];
 $qry="UPDATE `data` SET`expenses`='$expenses' WHERE `email`='$email' AND `password`='$password'";
 $update=mysqli_query($con,$qry);
 if(!$update){
     echo "There is some problem while updating the data in database";
 }
 else{
     echo "data updated";
 }

?>