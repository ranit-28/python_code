
<?php
include("database.php");


if(isset($_POST['submit'])){
    $name=$_POST['uname'];
    $pass=$_POST['pass'];
   
 }

$sql="SELECT * from user where mail_id='$name' and pass = '$pass'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of ea
  $row = $result->fetch_assoc();
  session_start();
  $_SESSION['user_id']=$row['user_id'];
  $_SESSION['fname']=$row['fname'];
  $_SESSION['lname']=$row['lname'];
  $_SESSION['college_name']=$row['college_name'];
  $_SESSION['mail_id']=$row['mail_id'];
  $_SESSION['state']=$row['state_name'];
  $_SESSION['city']=$row['city'];
  $_SESSION['education']=$row['education'];
  $_SESSION['profession']=$row['profession'];

    header("Location:profile.php");
  
} else {
  header("Location:Login.html");


}

mysqli_close($con);

?>
