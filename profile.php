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
    <link rel="stylesheet" href="navbarStyle.css">
    <!-- Font Awesome Link -->
    <script src="https://kit.fontawesome.com/d19fd4286f.js" crossorigin="anonymous"></script>

    <style>
        .collapsible {
            background-color: rgb(194, 186, 186);
            color: rgb(0, 0, 0);
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 18px;
            margin-top: 5px;
        }

        .active,
        .collapsible:hover {
            background-color: rgb(161, 161, 161);
        }

        .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #f1f1f1;
        }

        img {
            width: 32rem;
            height: 25rem;
            margin-top: 1%;
            margin-left: 11%;
        }

        #bottom {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 1vw;
            color: rgba(71, 67, 67, 0.642);
            margin-top: 8%;
        }

        .profile {
            margin: 2%;
            background-image: radial-gradient(circle 993px at 0.5% 50.5%, rgba(63, 68, 79, 0.37) 0%, rgb(0, 0, 0) 100.2%);
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            padding-left: 3%;
            padding-top: 3%;
        }


        .set_img {
            width: 22%;
            height: 27%;
            margin-left: 35%;

        }

        h6 {
            font-family: 'Times New Roman', Times, serif;
            margin-left: 5%;
            font-size: 18px;
        }
        .project_data
        {
          
            padding-left: 2%;padding-top: 2%;

        }
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-sm  justify-content-end" style="background-color: #74EBD5;
  background-image: linear-gradient(90deg, #a4eadd 0%, #9FACE6 100%);
  ">

        <h3 style="margin-right:70%;color: rgb(127, 7, 201);">Knowledge_Sharing_Portal</h3>
        <div>
            <ul class="navbar-nav">
            <li class="nav-item">
          <a class="nav-link " href="logout_logic.php"><img src="logout.png" style="width:30px;height:30px;margin-right: 5%;"></a>
        </li>
               
                <li class="nav-item">
                    <a class="nav-link " href="uploads.html"></a>
                </li>
                <!-- <li class="nav-item">
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
                </li> --> 
            </ul>
            
        </div>
    </nav>


    <div class="row">
        <div class="col" style="margin: 2%;">
            <img src="project_bg.jpg" style="width: 80%;">

        </div>
        <div class="col profile col-lg-3">
            <br>
            <h6>Name:
                <?php  echo $_SESSION['fname']." ".$_SESSION['lname']; ?>
            </h6>
            <h6>Mail ID:
                <?php  echo $_SESSION['mail_id']; ?>
            </h6>
            <h6>College Name:
                <?php  echo $_SESSION['college_name'] ?>
            </h6>
            <h6>Address:
                <?php  echo $_SESSION['city']." , ".$_SESSION['state']; ?>
            </h6>
            <h6>Education:
                <?php  echo $_SESSION['education'] ?>
            </h6>
            <h6>Profession:
                <?php  echo $_SESSION['profession'] ?>
            </h6>
            <br> <br>

            <a href="NewProject.html"> <button type="button" class="btn btn-success" style="margin-left:25%">Add New
                    Project</button></a>

        </div>

    </div>
    <br>


    <?php $u_id=$_SESSION['user_id'];
         $sql="SELECT * from project where u_id='$u_id'" ; $result=mysqli_query($con,
        $sql); 
        
         while($data=$result->fetch_assoc())
         {
        ?>

        <div class="row" style="margin: 2%;background-image: linear-gradient( 92.7deg,  rgba(245,212,212,1) 8.5%, rgba(252,251,224,1) 90.2% );box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;">

        <div class="col col-lg-4">
            <br>
            <img src="1.jpg" style="width: 80%;height:80%">
        </div>


       

        <div class="col col-lg-7 project_data" >
            <h6>Project Name: <?php echo $data['project_name']?></h6>
            <h6>Project Guide: <?php echo $data['guide_name']?></h6>
            <h6>Subject:  <?php echo $data['sub']?></h6>
            <h6>Year of completion:  <?php echo $data['upload_year']?></h6>
            <h6>Sourced use:<?php echo $data['src']?></h6>
            <h6>Project Description: <?php echo $data['disc']?></h6>

            <br>
                
                    <br> <br>
                   
        </div>

    </div>
    <?php
         }
        ?>



   
        <footer>
            <p ID="bottom" class="text-center">Copyright © 2022 Knowledge कट्टा -All Rights Reserved</p>
        </footer>


</body>

</html>