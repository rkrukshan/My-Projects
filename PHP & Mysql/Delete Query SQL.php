<?php
$sqldelete = "DELETE FROM table_name WHERE field='value'";
$resultdelete = mysqli_query($con,$sqldelete) or die ("Error in sqldelete".mysqli_error($con));
?>