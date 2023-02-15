<?php
$primary_key =$_GET["primary_key_Name"];
$sqledit = "SELECT * FROM table_name WHERE field='$primary_key'";
$resultedit = mysqli_query($con,$sqledit) or die("Sql edit error ".mysqli_error($con));
?>