<?php

if(isset($_SESSION['user']) == TRUE)
{ 
?>


            <?php
            }
            else {
                echo "<script>
                window.location.href='index.php?emptybox=session expire'
                </script>";
            }

                        
?>