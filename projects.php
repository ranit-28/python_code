<?php
include("database.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSP</title>

      <!-- Bootstrap Link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Style sheet link -->
  <link rel="stylesheet" href="projectStyle.css">
  <!-- Font Awesome Link -->
  <script src="https://kit.fontawesome.com/d19fd4286f.js" crossorigin="anonymous"></script>

</head>
<!-- Body Start Here -->
</head>

<body>

  <nav class="navbar navbar-expand-sm  justify-content-end" style="background-color: #74EBD5;
  background-image: linear-gradient(90deg, #a4eadd 0%, #9FACE6 100%);
  ">
  
    <h3 style="margin-right:45%;color: rgb(127, 7, 201);">Knowledge_Sharing_Portal</h3>

    <div>
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link hover-underline-animation" href="tempHome.html">Home</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item">
          <a class="nav-link hover-underline-animation" href="uploads.html">Uploads</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover-underline-animation" href="Login.html">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover-underline-animation" href="AboutUs.html">About_Us</a>
        </li>
        <li class="nav-item">
               <a class="nav-link hover-underline-animation" href="ContactUs.html">Contact_Us</a>
             </li>
        <li class="nav-item">
          <a class="nav-link hover-underline-animation" href="FAQ.html">FAQ</a>
        </li>
      </ul>
    </div>
     
      </nav>

      <br>

      <?php 
      $sub=$_POST['subject'];
      $sql="SELECT * from project where sub='$sub'" ; 
      $result=mysqli_query($con,$sql); 
     
      while($data=$result->fetch_assoc())
      {
     ?>

     <div class="row" style="margin: 2%;background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(235,131,130,1) 0%, rgba(235,131,130,0.75) 38.6%, rgba(211,177,125,0.52) 72.1%, rgba(211,177,125,0.24) 94.7% );box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">

     <div class="col col-lg-4">
         <br>
         <img src="1.jpg" style="width: 80%;height:80%;">
     </div>

     <div class="col col-lg-7 project_data" >
         <h6>Project Name: <?php echo $data['project_name']?></h6>
         <h6>Project Guide: <?php echo $data['guide_name']?></h6>
         <h6>Subject:  <?php echo $data['sub']?></h6>
         <h6>Year of completion:  <?php echo $data['upload_year']?></h6>
         <h6>Sourced use:<?php echo $data['src']?></h6>
         <h6>Project Description: <?php echo $data['disc']?></h6>

         <br>
                
     </div>

 </div>
 <?php
      }
     ?>
</body>
</html>