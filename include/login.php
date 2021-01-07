<?php 
 include_once('header.php');
 require_once('connection.php');
 session_start();
 if(isset($_POST['admName']) && isset($_POST['admPassword']) == TRUE)
   {
       $admName = $_POST['admName'];
       $admPassword = $_POST['admPassword'];
       if(empty($admName) && empty($admPassword))
       {
        echo "<script>
        window.location.href='index.php?emptybox=fill in blanks'
         </script>";
       }
       else
       {
           $select = 'select * from admin where Admin_Name ="'. $admName .'" and  Admin_Password ="'.$admPassword.'"';
           $result = mysqli_query($connect, $select);
       if($connect)
        {
        if($result)
        {
            if(mysqli_fetch_assoc($result))
            {
               $_SESSION['user'] = $_POST['admName'];
               header('location:welcome.php')  ; 
            }
            else
            {
                header('location:index.php?emptybox= invalid user name and password');
            }

        }
        else{
            die(mysqli_error($connect));
        }
    }
}
   }
?>
