<?php
$sqlinsert="INSERT INTO supplier(Field1,Field2,Field3,Field4,Field5,Field6)
  VALUES('".mysqli_real_escape_string($con,$_POST["name1"])."',
        '".mysqli_real_escape_string($con,$_POST["n1me2"])."',
        '".mysqli_real_escape_string($con,$_POST["name3"])."',
        '".mysqli_real_escape_string($con,$_POST["name4"])."',
        '".mysqli_real_escape_string($con,$_POST["name5"])."',
        '".mysqli_real_escape_string($con,$_POST["name6"])."')";
$resultinsert=mysqli_query($con,$sqlinsert) or die ("sql error in sqlinsert" . mysqli_error($con));
?>