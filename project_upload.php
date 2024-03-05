<?php
include("database.php");
session_start();
if(isset($_POST['submit']))
{
    // print("I got call");028
    $project_name=$_POST['pname'];
    $guide_name=$_POST['gname'];
    $subject=$_POST['subject'];
    $year=$_POST['year'];
    $src=$_POST['src'];
    $disc=$_POST['disc'];
    $u_id=$_SESSION['user_id'];
    $img=$_SESSION['file'];
}


// try{
//     $sql="INSERT INTO project(project_name, guide_name, sub , upload_year, src, disc ,img ,u_id) Values 
//         ('$project_name','$guide_name','$subject','$year','$src','$disc','$img','$u_id')";


// $res=mysqli_query($con,$sql);

// if($res)
// {
//     header("Location:profile.php");
// }
// }
// catch (mysqli_sql_exception $e) { 

//     // echo $e;
//      header("Location:NewRegistration.php"); 
//  }

//  Insert into project(project_name, guide_name, sub , upload_year, src, disc ,img ,u_id)
// Values (’Anayesis of data’,’Raj Thorat’ ,’Math’,’2012’,’Google’,’a project to create & implement real data anyalesis ’,’demo.jpg’,’1’);


//     // $move = "/Users/George/Desktop/uploads/";
//     // $photo=$_FILES["photo_data"]['name'];
//     // $photo_name = $photo['name'];
// //     $move = '/image';
// //     print_r("demo");
// //     print_r($_FILES);
// // echo "data".$_FILES["file"]['name'];
// // $uzanti = explode(".", $_FILES[''][name]);
// // echo $uzanti;
//     // copy($_FILES["file"]['tmp_name'], $move);
//     // move_uploaded_file($_FILES[""]['name'], $move);

// // die();

    
// // if(isset($_POST['smt_image'])):

//     // if(!empty($_FILES['files']['tmp_name']) && ($_POST['image_name']) || !empty($_FILES['files']['tmp_name']) && (empty($_POST['image_name']))){
    
//         $errors= array();
        
//         //foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
        
//         $file_name = $key.$_FILES['files']['photo_data'];
        
//         $temp = explode(".", $_FILES['files']['name']);
        
//         $newfilename = round(microtime(true)) .'.'. end($temp);
        
//         $file_size =$_FILES['files']['size'];
        
//         $file_tmp =$_FILES['files']['tmp_name'];
        
//         $file_type=$_FILES['files']['type'];
        
//         if($file_size > 2097152){
        
//         $errors[]='File size must be less than 2 MB';
        
//         }
        
//     // $query="INSERT INTO images (IMAGE_NAME) VALUES('".$newfilename."')";
    
//          $desired_dir="assets/images/";
    
//         if(empty($errors)==true){
        
//             if(is_dir($desired_dir)==false){
        
//                 mkdir("$desired_dir", 0700);                  // Create directory if it does not exist
        
//             }
        
//             if(is_dir("$desired_dir/".$newfilename)==false){
        
//                 move_uploaded_file($file_tmp,"$desired_dir/".$newfilename);
        
//             }else{ // rename the file if another one exist
        
//                 $new_dir="$desired_dir/".$newfilename.time();
        
//                 rename($file_tmp,$new_dir) ;
        
//             }
        

//         // }
//     }




    // var_dump('$photo');
//    $data =  move_uploaded_file($photo_name, $new_path);
//    $location = public_path('assets/uploads/images/'.$photo_name);

//    if($request->hasFile('photo'))
//    {
//        $avatar = $request->file('photo');
//        $filename = time().'.'.$avatar->getClientOriginalExtension();
//        $location = public_path('assets/uploads/images/'.$filename);
//        Image::make($avatar)->resize(300, 300)->save($location);
//        $user->avatar = $location;
//    }
//    $user->save(); 
// echo $new_dir;


    $user_id=$_SESSION['user_id'];
 


try{
    $sql="INSERT INTO project(project_name, guide_name, sub , upload_year, src, disc ,img ,u_id) Values 
        ('$project_name','$guide_name','$subject','$year','$src','$disc','$photo_name',$user_id)";


$res=mysqli_query($con,$sql);

if($res)
{
    header("Location:profile.php");
}
}
catch (mysqli_sql_exception $e) { 
    header("Location:NewRegistration.php"); 
 } 


//  Insert into project(project_name, guide_name, sub , upload_year, src, disc ,img ,u_id)
// Values (’Anayesis of data’,’Raj Thorat’ ,’Math’,’2012’,’Google’,’a project to create & implement real data anyalesis ’,’demo.jpg’,’1’);


?>