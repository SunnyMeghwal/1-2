
<?php

if(isset($_SESSION['user']) == TRUE)
{ 

?>
<!-- Wrapper-->
<div class="wrapper">

    <!-- Header-->
    <nav class="navbar navbar-expand-md navbar-default fixed-top">
        <div class="navbar-header">
            <div id="mobile-menu">
                <div class="left-nav-toggle">
                    <a href="#">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
            </div>
            <a class="navbar-brand" href="index.html">
                LUNA
                <span>v.1.4</span>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="left-nav-toggle">
                <a href="">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </a>
            </div>
            <form class="navbar-form mr-auto">
                <input type="text" class="form-control" placeholder="Search data for analysis" style="width: 175px">
            </form>
            <ul class="nav navbar-nav">
                <li class="nav-item profil-link">
                    
                    <?php 
                    $admName =$_SESSION['user'];
                    $select = 'select * from admin where Admin_Name ="'. $admName .'"';
                    $result = mysqli_query($connect, $select);
                 
                   if($result)
                   {
                       while($row = mysqli_fetch_assoc($result))
                       {
                           /* print_r($row); */
                            echo '<a href="#" >'.$row['Admin_Name'].'</a>';
                            echo "<img src='../upload/".$row['Admin_Photo']."'>";
                       }
                      }
              
                  
                    ?>
                   
                </li> <li class="nav-item uppercase-link">
                    <a href="logOut.php" class="nav-link">Log out
                        <span class="pe-7s-power"></span>
                    </a>
                </li>
               
            </ul>
        </div>
    </nav>
    <!-- End header-->
    <?php 
 }
else {
    echo "<script>
    window.location.href='index.php?emptybox=session expire'
     </script>";
}

                        
?>

<!-- data from ajax -->


