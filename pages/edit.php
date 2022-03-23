<?php
    session_start();
    /*if(!$_SESSION['user']){
        header('Location: ../index.php');
    }*/
    include "../inc/connect.php";
    $id = $_GET['id'];
    // echo $_GET['id'];
    // var_damp($_GET)
    // printf($id)
    // $connect = mysqli_connect('localhost', 'root' , 'root' , 'bibala');
    $result = mysqli_query($connect,"SELECT * FROM `products` WHERE `id` = '$id'");
    // print_r($result);
    //ini_set('date.timezone', 'Asia/Almaty');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $day = mysqli_fetch_assoc($result);
    ?>
    <form action="../inc/edit.php" method="POST">
        <input type="text" name="id" value="<?php echo $day['id']; ?>">
        <input type="text" name="name" value="<?php echo $day['name']; ?>">
        <input type="text" name="price" value="<?php echo $day['price']; ?>">
        <button type="submit">Изменить</button>
    </form>
</body>
</html>