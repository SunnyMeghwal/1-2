<?php
    $hostname='localhost';
    $dbusername='root';
    $dbpassword='';
    $connect=mysqli_connect($hostname,$dbusername,$dbpassword);

    if($connect)
    {
        $db='create database mydb';
        if(mysqli_query($connect,$db))
        {
            echo 'database is created';
        }
        else
        {
            die( mysqli_error($connect).'database is not created');
        }
    }
    else
    {
         die( mysqli_error($connect).'database is not created');
    }
?>