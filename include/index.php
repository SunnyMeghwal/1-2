<?php 
session_start();

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
                    <form method="post" action="login.php" enctype="multipart/form-data" id="loginForm" novalidate>
                        <div class="form-group">
                            <label class="col-form-label" for="username">Username</label>
                            <input type="text" placeholder="enter your user Name" title="Please enter you username" required value="" name="admName" id="username" class="form-control" />
                            <span class="form-text small">Your unique username to app</span>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******"  value="" name="admPassword" id="password" class="form-control">
                            <span class="form-text small">Your strong password</span>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-accent"  name="submit" >Login</button>
                            <a class="btn btn-default" href="newEmp.php?emptybox=your r not admin">Register</a>
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
<?php include_once('footer.php') ?>

