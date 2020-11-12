<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aasan</title>
</head>
<body>
    <h1> Aaasan php</h1>
    <form action="https://jaykumarsanandiya.github.io/php/index.php" method="POST">
        <p> Name:<input type="text" name="naam" >
        </p>
        <p> Book:<input type="text" name="book" >
        </p>
        <input type="submit" name="register" value="register">
        <a href="https://jaykumarsanandiya.github.io/php/display.php" >
        <input type="button" name="check" value="check"> </a>
    </form>
    
</body>
</html>

<?php
include "https://jaykumarsanandiya.github.io/php/connect.php" ;

if(isset($_POST['register'])){
    $naam=$_POST['naam'] ;
    $book=$_POST['book'];

    $qurry_insert="INSERT INTO `aasan`( `naam`, `book`)
     VALUES ('$naam','$book')";

     $insert_check=mysqli_query($con,$qurry_insert);

     if($insert_check){
         echo "\n inserted successfully";
     }
     else{
        echo " \n insert failure";
     }

}
?>