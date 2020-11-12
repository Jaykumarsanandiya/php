<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <!-- <?php include "style.css" ?> -->
    <!-- <link style.css > -->
    

    
<table border="1" align="center">
    <thead>
        <tr>
            <th>Enrollment</th>
            <th>Name</th>
            <th>Book</th>
            <th>Operation</th>
        </tr>
    </thead>
    <tbody>
        
    <?php include "connect.php"; 

    $select_query="SELECT * FROM `aasan` WHERE 1";
    $query=mysqli_query($con,$select_query);
  
    
    while($res=mysqli_fetch_array($query)){
        ?>
  
   
        <tr>
            <td><?php echo $res[0]?></td>
            <td><?php echo $res[1]?></td>
            <td><?php echo $res[2]?></td>
            <td><a href="http://localhost/aaasan/update.php?idsame=<?php echo $res[0]?>" >Edit</a></td>
            <td><a href="http://localhost/aaasan/delete.php?idsame=<?php echo $res[0]?>" >Delete</a></td>
        </tr>
  
    <?php
    }
    
    ?>
      </tbody>
    </table>


</head>
<body>


</body>
</html>




