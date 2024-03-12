<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
    <h1>Update</h1>
    <?php 
        $updateId = $_GET['id'];
        $updateProdName = $_POST['prodName'];
        $updateBrand = $_POST['brand'];
        $updateColor = $_POST['color'];
        $updatePrice = $_POST['price'];

        $updateSql = "UPDATE products
                    SET prodName = '$updateProdName',
                        brand = '$updateBrand',
                        color = '$updateColor',
                        price = '$updatePrice'
                    WHERE id = '$updateId'
                    ";
             $host = 'localhost:3307';
             $user = 'root';
             $password = '';
             $db = 'saledb';
             $conn = new mysqli($host,$user,$password,$db);
             $query = $conn->query($updateSql);
             if($query){
            ?>
                <h3>Update Successfully</h3>
                <?php
             }else{
                echo $conn->error;
             }
             ?>
             <a href="index.php">all products</a>
    
</body>
</html>