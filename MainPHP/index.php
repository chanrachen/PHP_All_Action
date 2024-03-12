<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- <div class="container mt-5"> -->
        <!-- <a href="create.php" class="">Add New</a> -->
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name Client</th>
                    <th>Pay</th>
                    <th>Option</th>
                </tr>
                
            </thead>
            <tbody>
                <?php
                //database information
                $host = 'localhost:3307';
                $user = 'root';
                $password = '';
                $db = 'saledb';
                $conn = new mysqli($host,$user,$password,$db);
                $sql = "SELECT * FROM products";
                $query = $conn->query($sql);
                $results = $query->fetch_all(MYSQLI_ASSOC);
                $i = 1;

                foreach($results as $item){
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $item['prodName']; ?></td>
                    <td>$ <?php echo $item['price']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $item['id']; ?>">Edit</a>
                        |
                        <a href="show.php?id=<?php echo $item['id']; ?>">Show</a>
                        |
                        <a href="delete.php?id=<?php echo $item['id']; ?>">Delete</a>
                    </td>
                    <!-- <td>Delete</td> -->
                </tr>
                <?php
                    $i = $i+1;
                    } 
                ?>

            </tbody>
            


        </table>
    </div>

    <!-- <div class="container mt-5"> -->
        <a href="create.php" class="">Add New</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>