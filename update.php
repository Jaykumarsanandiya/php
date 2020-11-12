<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aasan</title>
</head>

<?php
include "connect.php" ;

$id_before_update = $_GET['idsame'];

$qurry_before_update="SELECT * FROM `aasan` WHERE Enrollment_No = $id_before_update";
$show_before_update = mysqli_query($con , $qurry_before_update);
$arrdata = mysqli_fetch_array($show_before_update);

if(isset($_POST['Update'])){
    

    $id_after_update= $_GET['idsame'];

    $naam=$_POST['naam'] ;
    $book=$_POST['book'];

$qurry_after_update= "UPDATE `aasan` set  naam='$naam',book='$book'
 WHERE Enrollment_No = $id_after_update";
    
    
    $insert_check= mysqli_query($con,$qurry_after_update);

     if($insert_check){
         echo "<br> Update successfully ";
     }
     else{
        echo " <br> Update failure ";
     }

}
?>
<body>
    <h1> Aaasan php</h1>
    <form  method="POST">
        <p> Name:<input type="text" name="naam" value="<?php echo $arrdata[1] ?>" >
        </p>
        <p> Book:<input type="text" name="book" value="<?php echo $arrdata[2]?>">
        </p>
        <input type="submit" name="Update" value="Update">
        <a href="http://localhost/aaasan/display.php" >
        <input type="button" name="check" value="check"> </a>
    </form>
    
</body>
</html>
