<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the data from the POST parameters
$productId = $_POST['product_id'];
$productName = $_POST['product_name'];
$description = $_POST['description'];
$price = $_POST['price'];
$quantityInStock = $_POST['quantity_in_stock'];
$category = $_POST['category'];
$manufacturer = $_POST['manufacturer'];
$sku = $_POST['sku'];

// Update the existing data in the Product table
$sql = "UPDATE Product SET ProductName='$productName', Description='$description', Price='$price',
QuantityInStock='$quantityInStock', Category='$category', Manufacturer='$manufacturer', SKU='$sku' WHERE
ProductID='$productId'";
if ($conn->query($sql)) {
echo 'success';
} else {
echo 'error';
}

// Close the database connection
$conn->close();
?>