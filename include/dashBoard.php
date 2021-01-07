<?php

if(isset($_SESSION['user']) == TRUE)
{ 
?>
<div class="row">
                <div class="col-lg-12">
                    <div class="view-header">
                        
                        <div class="header-icon">
                            <i class="pe page-header-icon pe-7s-shield"></i>
                        </div>
                        <div class="header-title">
                            <h3 class="m-b-xs">Dashborad</h3>
                            <small>
                                Special minimal admin theme with Dark UI style for monitoring or administration web applications.
                            </small>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-xs-6">
                    <div class="panel panel-filled text-center">

                        <div class="panel-body">
                            <h2 class="m-b-none">
                                <sup> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> </span></sup>206
                            </h2>

                            <div class="big"> Total Post</div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-6">
                    <div class="panel panel-filled text-center text-center">
                        <div class="panel-body">
                            <h2 class="m-b-none">
                               <sup><span class="slight"><i class="fa fa-play fa-rotate-90 c-red"> </i> </span></sup> 140 
                            </h2>

                            <div class="small">Recent Post</div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-6">
                    <div class="panel panel-filled text-center">
                        <div class="panel-body">
                            <h2 class="m-b-none">
                                 <sup><span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> </span></sup>262
                            </h2>

                            <div class="small">Daily Post</div>
                            
                        </div>
                    </div>
                </div>
          </div>
          <?php
            }
            else {
                echo "<script>
                window.location.href='index.php?emptybox=session expire'
                </script>";
            }

                        
?>