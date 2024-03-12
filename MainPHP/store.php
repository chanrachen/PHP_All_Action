<h1>Store</h1>
<?php 
//declare value with input
$newProdName = $_POST['prodName'];
$newBrand = $_POST['brand'];
$newColor = $_POST['color'];
$newPrice = $_POST['price'];

$storeSql = "INSERT INTO products(prodName, brand, color, price)
            VALUES('$newProdName', '$newBrand', '$newColor', '$newPrice')";

//database information
$host = 'localhost:3307';
$user = 'root';
$password = '';
$db = 'saledb';
$conn = new mysqli($host,$user,$password,$db);
$query = $conn->query($storeSql);

if($query){
    echo "Insert Success";
}else{
    echo $conn->error;
}
?>
<br>
<br>
<a href="index.php">all products</a>


