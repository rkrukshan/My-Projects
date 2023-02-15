<?php
$sqlupdate="UPDATE table_name SET
name='".mysqli_real_escape_string($con,$_POST["txtname"])."',
mobile='".mysqli_real_escape_string($con,$_POST["txtmobile"])."',
land='".mysqli_real_escape_string($con,$_POST["txtland"])."',
email='".mysqli_real_escape_string($con,$_POST["txtemail"])."',
address='".mysqli_real_escape_string($con,$_POST["txtaddress"])."'
    WHERE id='".mysqli_real_escape_string($con,$_POST["txtid"])."'";
$resultupdate=mysqli_query ($con,$sqlupdate) or die("Error in sqlupdate" . mysqli_error($con));
?>