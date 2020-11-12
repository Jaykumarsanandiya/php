<?php
$username="root";
$password="";
$server="localhost";
$db="simple";

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    echo "Successfully connected";
}
else{
    echo "connect failure";
}
?>