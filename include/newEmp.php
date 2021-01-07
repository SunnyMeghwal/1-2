<?php 
session_start();
if(isset($_SESSION['user']) == TRUE)
{ 
?>
<?php include_once('header.php') ?>

<!-- Wrapper-->
<div class="wrapper">


    <!-- Main content-->
    <section class="content">
       

        <div class="container-center animated slideInDown">


            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-unlock"></i>
                </div>
                <div class="header-title">
                    <h3>Login</h3>
                   
                    <?php
                        if(isset($_GET['emptybox']))
                        {?>
                            <small class='alert-light text-dark p-2'> <?php echo $_GET['emptybox'] ;?> </small>
                       <?php  }
                        else
                        {echo "<small >Please enter your credentials to login.</small>";}
                        ?>
                   
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                    <form method="post" action="dataInsert.php" enctype="multipart/form-data" id="loginForm" >
                    <input type="hidden" name="createBy" value="<?php echo $_SESSION['user']?>">
                        <div class="form-group">
                            <label class="col-form-label" for="username">Emp Name</label>
                            <input type="text" placeholder="enter your user Name" title="Please enter you username" required value="" name="empName" id="username" class="form-control" />
                           
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="username">Emp Email</label>
                            <input type="text" placeholder="enter your user Name" title="Please enter you username" required value="" name="empMail" id="username" class="form-control" />
                            
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="password">Emp Contact no</label>
                            <input type="text" title="Please enter your password" placeholder="Enter Your emp contact no"  value="" name="empNo" id="password" class="form-control">
                           
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="photo">Emp Photo</label>
                            <input type="file" title="Please enter your password" name="empImg" id="password" class="form-control">
                          
                        </div>
                        <div>
                            <button type="submit" class="btn btn-accent"  name="submit" >Login</button>
                            <a class="btn btn-default" href="newEmp.php">Register</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<?php include_once('footer.php'); 
}
else {
    echo "<script>
    window.location.href='index.php?emptybox=please login first'
     </script>";
}

?>


