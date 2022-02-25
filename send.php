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
 $qry="INSERT INTO data(`email`, `password`, `expenses`) VALUES ('$email','$password',$expenses)";
 $insert=mysqli_query($con,$qry);
 if(!$insert){
     echo "There is some problem while inserting the data in database";
 }
 else{
     echo "data inserted";
 }

?>