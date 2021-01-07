<?php
include('connection.php');
   if($connect)
    {
        $crTable = "CREATE TABLE `mydb`.`employee` ( `id` INT(10) NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(200) NOT NULL , `mobile` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`))" ;
        if(mysqli_query($connect,$crTable))
        {
            echo 'created succesfully';
        }
        else
        {
             die(mysqli_error($connect).'not CREATED');
        }

    }
    else
    {
        die(mysqli_error($connect).'not connected');
    }
?>