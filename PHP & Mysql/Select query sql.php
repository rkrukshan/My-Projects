<?php
$sql = "SELECT * FROM table_name WHERE field='value'";
$result = mysqli_query($con,$sql) or die("Sql error ".mysqli_error($con));
?>