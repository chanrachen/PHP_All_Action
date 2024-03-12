<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <h1>Delete</h1>
    <?php
        $deleteId = $_GET['id'];
        $deleteSql = "DELETE FROM products WHERE id='$deleteId'";

        $host = 'localhost:3307';
        $user = 'root';
        $password = '';
        $db = 'saledb';
        $conn = new mysqli($host,$user,$password,$db);
        $query = $conn->query($deleteSql);

        if($query){
        ?>
            | <h3>Delete successfully</h3>
        <?php 
        }else{
            echo $conn->error;
        }
        ?>
        <a href="index.php">all products</a>
</body>
</html>