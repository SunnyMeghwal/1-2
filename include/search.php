<?php 
session_start();
include('connection.php');


$select ='select * from post INNER JOIN employee';
$results =mysqli_query($connect, $select);
echo "<table>";
 while($row = mysqli_fetch_array($results))
 {
    echo "<tr valign='middle'><td><a href='empDetails.php?idname=".$row['id']."'>Emp000".$row['id']."</a></td>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['post']."</td>";
    echo "<td>".$row['emp_id']."</td>";                
                  
    
 }
 echo "</table>";


?>