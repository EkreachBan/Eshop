<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1 celpadd=5>
        <tr><td>Food ID</td><td>Food Name</td><td>price</td>
            <td>Description<td>Picture</td></tr>
            <?php
                include_once('../config.php');
                $query="SELECT * FROM `food` order by `F_ID`";
                $result=mysqli_query($conn,$query);

                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_array($result)){

            ?>
                <tr>
                    <td><?php echo $row['F_ID'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><img src="<?php echo $row['images_path'];?>"width=100>/</td>
                </tr>
            <?php 
                    }
                }
            ?>
    </table>
</body>
</html>