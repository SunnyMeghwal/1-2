<?php
session_start();
if(isset($_SESSION['user']) == TRUE)
{ 
include_once('header.php') ;
include('connection.php');
 
 $imgLocation = glob('../upload/*.*');
 
 foreach($imgLocation as $img)
 {
    $ext = pathinfo($img, PATHINFO_EXTENSION);
    if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg')
    {
     echo '<a href="'.$img.'"><img src="'.$img.'" alt="" class="img-thumbnail" style="height:100px !important"></a>';  }
     else{
         echo 'image extension doesnot mathc';
     }
 }
 
include_once('footer.php');

}
else {
    echo "<script>
    window.location.href='index.php?emptybox=session expire'
     </script>";
}
    
    ?>
