<?php
session_start();
if(isset($_SESSION['user']) == TRUE)
{ 
include_once('header.php') ;
include('connection.php');

                    $empid = $_GET['idname'];
                            if($connect)
                            {
                                $select = 'select * from employee where id= "'.$empid.'"';
                                
                                $result = mysqli_query($connect, $select);
                                if($result)
                                {
                                    if(mysqli_num_rows($result) > 0)
                                    {
                                       ?>
                                       

<div class="wrapper">


    <!-- Main content-->
    <section class="content">
       

        <div class="container-center animated slideInDown">


            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-add-user"></i>
                </div>
                <div class="header-title">
                    <h3>Edit user details</h3>
                    <small>
                        Please enter your credentials to edit.
                    </small>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                    <?php
                while($row = mysqli_fetch_assoc($result))
                                       {
                                                    
                                       ?>
                    <form method="post" action="" enctype="multipart/form-data" id="loginForm" novalidate>
                   
                    <input type="hidden" name="createBy" value="<?php echo $_SESSION['user']?>">
                        <div class="form-group">
                            <label class="col-form-label" for="username">Username</label>
                            <input type="text" placeholder="enter your user Name" title="Please enter you username" required="" value="<?php echo $row['name']; ?>" name="empName" id="username" class="form-control">
                            <span class="form-text small">Your unique username to app</span>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="username">Email</label>
                            <input type="text"  title="Please enter you username" required="" value="<?php echo $row['email']; ?>" name="empMail" id="username" class="form-control">
                        
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="username">Mobile no.</label>
                            <input type="text" title="Please enter you username" required="" value="<?php echo $row['mobile']; ?>" name="empNo" id="username" class="form-control">
                            
                        </div>
                       
                      
                        <div>
                            <button type="submit" class="btn btn-accent"  name="submit" >update</button>
                            
                        </div>
                        <?php 
                                }
                                }
                                }
                                    else{
                                    echo 'data not fetchd';
                                    }
                                } 

                                ?>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- End main content-->

</div>
    <?php include_once('footer.php');
}
else {
    echo "<script>
    window.location.href='index.php?emptybox=session expire'
     </script>";
}
    
    ?>

<?php

  if(isset($_POST['submit']))
  { 
      $_empName = $_POST['empName'] ;
      $_empMail = $_POST['empMail'] ;
      $_empNo = $_POST['empNo']; 
      $_empNo = $_POST['empNo']; 
      $_createBy = $_POST['createBy'];
     
      $_empUpdate = "UPDATE `employee` SET `name` = '$_empName', `email` = '$_empMail', `mobile` = '$_empNo', `createBy` = '$_createBy' WHERE `employee`.`id` = '$empid'";
      
      if($connect)
    {
        if(mysqli_query($connect,$_empUpdate))
        {
            echo "<script>
            alert('data updated successfully')
            window.location.href='welcome.php'
             </script>";
        }
        else
        {
             die(mysqli_error($connect).'data not updated succesfully');
        }
    }
    }


?>