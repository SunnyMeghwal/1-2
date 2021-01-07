<?php
session_start();
if(isset($_SESSION['user']) == TRUE)
{ 
include_once('header.php');
require_once('connection.php');
?>
<!-- Wrapper-->
<div class="wrapper">

    <!-- Header-->
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

    <!-- Navigation-->
    <aside class="navigation">
        <nav>
            <ul class="nav luna-nav">
              
                <li class="active">
                    <a href="welcome.php" id="current1">Dashboard</a>
                </li>

                <li>
                    <a href="#monitoring" data-toggle="collapse" aria-expanded="false">
                        Manage Post <span class="sub-nav-icon"> <i class="pe-7s-angle-down"></i> </span>
                    </a>
                    <ul id="monitoring" class="nav nav-second collapse">
                        <li><a href="metrics.html"> Remove Post</a></li>
                        <li><a href=""> Manage Comment</a></li>
                        
                    </ul>
                </li>
                <li class="nav-category">
                   <a href="javascript:void(0)"> Manage user
                </li>
                <li>
                    <a href="#uielements" data-toggle="collapse" aria-expanded="false">
                        General<span class="sub-nav-icon"> <i class="pe-7s-angle-down"></i> </span>
                    </a>
                    <ul id="uielements" class="nav nav-second collapse">
                        <li><a href="panels.html">Panels</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="tabs.html">Tabs</a></li>
                        <li><a href="modals.html">Modals</a></li>
                        <li><a href="alerts.html">Alerts</a></li>
                        <li><a href="loaders.html">Loaders</a></li>
                        <li><a href="gridSystem.html">Grid system</a></li>
                        <li><a href="draggable.html">Draggable</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#tables" data-toggle="collapse" aria-expanded="false">
                        Tables design<span class="sub-nav-icon"> <i class="pe-7s-angle-down"></i> </span>
                    </a>
                    <ul id="tables" class="nav nav-second collapse">
                        <li><a href="tableStyles.html">Table styles</a></li>
                        <li><a href="dataTables.html">Data Tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#forms" data-toggle="collapse" aria-expanded="false">
                        From controls <span class="sub-nav-icon"> <i class="pe-7s-angle-down"></i> </span>
                    </a>
                    <ul id="forms" class="nav nav-second collapse">
                        <li><a href="formElements.html"> Basic elements </a></li>
                        <li><a href="autocomplete.html"> Autocomplete </a></li>
                        <li><a href="controls.html"> Selection controls </a></li>
                        <li><a href="textEditor.html"> Text editor </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#charts" data-toggle="collapse" aria-expanded="false">
                        Charts and graphs<span class="sub-nav-icon"> <i class="pe-7s-angle-down"></i> </span>
                    </a>
                    <ul id="charts" class="nav nav-second collapse">
                        <li><a href="flotCharts.html">Flot charts</a></li>
                        <li><a href="chartJs.html">ChartJS</a></li>
                        <li><a href="sparkline.html">Sparkline</a></li>
                        <li><a href="datamaps.html">Datamaps</a></li>
                    </ul>
                </li>

                <li class="nav-category">
                    App Pages
                </li>
                <li>
                    <a href="#extras" data-toggle="collapse" aria-expanded="false">
                        Basic <span class="sub-nav-icon"> <i class="pe-7s-angle-down"></i> </span>
                    </a>
                    <ul id="extras" class="nav nav-second collapse">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="support.html">Support</a></li>
                        <li><a href="nestableList.html">List</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#common" data-toggle="collapse" aria-expanded="false">
                        Common <span class="sub-nav-icon"> <i class="pe-7s-angle-down"></i> </span>
                    </a>
                    <ul id="common" class="nav nav-second collapse">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="forgotPassword.html">Forgot password</a></li>
                        <li><a href="error.html">Error page</a></li>
                    </ul>
                </li>
                <li>
                    <a href="versions.html">
                        <span class="badge pull-right">2</span>
                        Versions
                    </a>
                </li>
                <li class="nav-info">
                    <i class="pe pe-7s-shield text-accent"></i>

                    <div class="m-t-xs">
                        <span class="c-white">LUNA</span> admin theme with Dark UI style for monitoring and administration web applications.
                    </div>
                </li>
            </ul>
        </nav>
    </aside>
    <!-- End navigation-->


    <!-- Main content-->
    <section class="content">
        <div class="container-fluid" id="abc">
        
        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-filled">
                        <div class="panel-body">
                            <h2>New users </h2>
                            <table class="table table-responsive-sm">
                                <thead>
                                
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th></th>

                                    <th colspan="2">
                                <form class="form-inline" action="empsearch.php">
                                <div class="form-group mx-sm-3 mb-2 ml-auto">
                                    <label for="inputPassword2" class="sr-only">Password</label>
                                    <input type="search" name="search" class="form-control" id="searchData" placeholder="Password">
                                </div>
                                <button type="submit" name="" id="fetchData" class="btn btn-primary mb-2">Confirm identity</button>
                                
                                </form>

                                </th>
                                </tr>
                                </thead>
                           
                                 <tbody>
                                <?php 
                               $per_page_result = 10;
                               $select ='select * from employee';
                               $results =mysqli_query($connect, $select);
                               $number_of_results = mysqli_num_rows($results);
                               $number_of_pages = ceil($number_of_results / $per_page_result);
                               if(!isset($_GET['page']))
                               {
                                   $pages = 1;
                               }
                               else{
                                   $pages = $_GET['page'];
                               }
                               
                            $page_results = ($pages-1)*$per_page_result;
                            
                            $select = ' select * from employee LIMIT ' . $page_results . " , " . $per_page_result;
                            $res = mysqli_query($connect, $select);
                            while($row = mysqli_fetch_array($res))
                            {
                             $empid = $row['id'];
                            echo "<tr valign='middle'><td><a href='empDetails.php?idname=".$row['id']."'>Emp000".$row['id']."</a></td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['mobile']."</td>";                
                            echo "<td><a href='empDetails.php?idname=".$row['id']."'>View Details</a></td>";
                            echo "<td><a href='empUpdate.php?idname=".$row['id']."'>Edit</a> </td>";   
                            echo "<td><a  href='javascript:deleteData($empid)'>Delete</a></td><tr>"; 
                            
                            } ?>
                                  <tr>
                                      <td colspan="7" class="text-center">
                                          <div class="btn-group ">
                                
                                <?php
                    if($pages > 1)
                    {
                        echo '<button type="button" class="btn btn-default"><a href="welcome.php?page='.( $pages - 1 ).'"><</a></button>';
                    }
                for($pages = 1; $pages <= $number_of_pages; $pages++){
                    echo '<button type="button" class="btn btn-default active"><a href="welcome.php?page='.$pages.'" class="d-block">'.$pages.'</a></button>';
                }
               /*  if($pages > $number_of_pages)
                {
                        $pages = $_GET['page'];
                        
                        echo '<button type="button" class="btn btn-default"><a href="welcome.php?page='.( $pages+1 ).'">></a></button>';
                    }     */            
                ?></div></td>
                                  </tr>                      
                                                        
                            </table>

                        </div>
                    </div>
                </div>
            </div>
       </div>
    </section>
    <!-- End main content-->

</div>

<?php 
 include_once('footer.php');}
else {
    echo "<script>
    window.location.href='index.php?emptybox=session expire'
     </script>";
}                     
?>



