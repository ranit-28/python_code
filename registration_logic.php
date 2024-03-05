<?php

include("database.php");

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mail=$_POST['mail'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $education=$_POST['education'];
    $profession=$_POST['profession'];
    $gender=$_POST['gender'];
    $pass=$_POST['pass'];
    $college=$_POST['college'];

}

try{
    $sql="INSERT INTO user(fname, lname, mail_id,college_name,state_name,city,education,profession,gender,pass) Values 
        ('$fname','$lname','$mail','$college','$state','$city','$education','$profession','$gender','$pass')";


$res=mysqli_query($con,$sql);

if($res)
{
    header("Location:Login.html");
}
}
catch (mysqli_sql_exception $e) { 

    // echo $e;
      header("Location:NewRegistration.html"); 
 } 

?>

