<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Product</title>
</head>
<body>
    <h1>Edit</h1>
    <?php
        $editId = $_GET['id'];
        $editSql = "SELECT * FROM products WHERE id= '$editId'";

        $host = 'localhost:3307';
        $user = 'root';
        $password = '';
        $db = 'saledb';
        $conn = new mysqli($host,$user,$password,$db);
        $query = $conn->query($editSql);

        $item = $query->fetch_assoc();
        ?>
            <form action="update.php?id=<?php echo $item['id']; ?>" method="POST">
                Client Name: <input type="text" name="prodName" value="<?php echo $item['prodName']; ?>"><br>
                Sex: <input type="text" name="brand" value="<?php echo $item['brand']; ?>"><br>
                Religion: <input type="text" name="color" value="<?php echo $item['color']; ?>"><br>
                Pay: <input type="text" name="price" value="<?php echo $item['price']; ?>"><br>
                <button>Submit</button>
            </form>

</body>
</html>