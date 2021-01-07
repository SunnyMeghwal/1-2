<?php
session_start();
if(isset($_SESSION['user']) == TRUE)
{ 
include_once('header.php');
require_once('connection.php');

  if(isset($_POST['submit']))
  { 
      $_empName = $_POST['empName'] ;
      $_empMail = $_POST['empMail'] ;
      $_empNo = $_POST['empNo']; 
   
      $file_name = $_FILES['empImg']['name'];
      $file_size = $_FILES['empImg']['size'];
      $file_tmp = $_FILES['empImg']['tmp_name'];
      $file_type = $_FILES['empImg']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['empImg']['name'])));
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) 
      {
         move_uploaded_file($file_tmp,"../upload/".$file_name);
        }
        $_createBy = $_POST['createBy'];
      $insData ="INSERT INTO `employee` (`id`, `name`, `email`, `mobile`, `createBy`,`images`) VALUES ('', '$_empName', '$_empMail', '$_empNo', '$_createBy', '$file_name')";

      if($connect)
    {
        if(mysqli_query($connect,$insData))
        {
          echo "<script>
          alert('data inserted successfully')
          window.location.href='welcome.php'
           </script>";;
        }
        else
        {
          echo "<script>
          alert('data not inserted successfully')
          window.location.href='welcome.php'
           </script>";
        }
    }
    }
  }

?>