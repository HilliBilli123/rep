<?php
    session_start();
    /*if(!$_SESSION['user']){
        header('Location: ../index.php');
    }*/
    include "../inc/connect.php";
    //$connect = mysqli_connect('localhost', 'root' , 'root' , 'bibala');
    $result = mysqli_query($connect,"SELECT * FROM `products`");
    //print_r($result);
    //ini_set('date.timezone', 'Asia/Almaty');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Baha kotakbas</title>
</head>
<body>
    <!-- <form action="" method = "post" enctype = "multipart/form-data"> -->
    
    <!-- </form> -->
    <a href="add.php">Добавить</a>
    <table style="border:1px solid #000;">
            <tr>
                <td style="border:1px solid #000;">ID</td>
                <td style="border:1px solid #000;">name</td>
                <td style="border:1px solid #000;">imagePath</td>
                <td style="border:1px solid #000;">price</td>
                <td style="border:1px solid #000;">type</td>
                <td style="border:1px solid #000;">редактировать</td>
                <td style="border:1px solid #000;">удалить</td>
            </tr>
        <?php
            foreach($result as $product)
            {
        ?>
            <tr>
                <td><?php echo $product['id']?></td>
                <td><?php echo $product['name']?></td>
                <td><?php echo $product['imagePath']?></td>
                <td><?php echo $product['price']?></td>
                <!-- <td><?php echo $product['type']['name']?></td> -->
                <td><?php echo $product['harackter']?></td>
                <td>
                    <form action="edit.php">
                        <a href="edit.php?id=<?php echo $product['id']; ?>">редактировать</a>
                    </form>
                </td>
                <td>
                <form action="../inc/delete.php">
                    <a href="../inc/delete.php?id=<?php echo $product['id']; ?>">удалить</a>
                </form>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>