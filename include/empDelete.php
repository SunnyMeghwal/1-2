
<?php
session_start();
include('connection.php');
$empid = $_GET['idname'];
      $_empDelet = 'DELETE FROM employee WHERE id ="'.$empid.'"' ;
      if($connect)
        {
    if(mysqli_query($connect,$_empDelet))
        {
            echo "<script>
                alert('data deleted successfully')
                window.location.href='welcome.php'
                 </script>";
        }
        else
        {
            echo "<script>
            alert('data not deleted successfully')
            window.location.href='welcome.php'
             </script>";
        }
    }
  
    ?>