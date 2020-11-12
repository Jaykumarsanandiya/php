<?php
include "https://jaykumarsanandiya.github.io/php/connect.php"; 
$id_delete=$_GET['idsame'];
?>


    <?php

$delete_query="DELETE FROM `aasan` WHERE Enrollment_No=$id_delete";
$query=mysqli_query($con,$delete_query);
 header('location:https://jaykumarsanandiya.github.io/php/display.php');

?>


