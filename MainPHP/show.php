<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Product</title>
</head>
<body>
    <h1>Show</h1>

    <?php
        $editId = $_GET['id'];
        $showSql = "SELECT * FROM products WHERE id= '$editId'";

        $host = 'localhost:3307';
        $user = 'root';
        $password = '';
        $db = 'saledb';
        $conn = new mysqli($host,$user,$password,$db);
        $query = $conn->query($showSql);

        $item = $query->fetch_assoc();
        ?>
            <b>Client Name:</b> <?php echo $item['prodName']; ?><br>
            <b>Sex:</b> <?php echo $item['brand']; ?><br>
            <b>Religion:</b> <?php echo $item['color']; ?><br>
            <b>Pay:</b> <?php echo $item['price']; ?><br>
            
            <a href="index.php">all Data</a>
</body>
</html>