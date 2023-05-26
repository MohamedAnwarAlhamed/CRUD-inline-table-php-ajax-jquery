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
$productName = $_POST['product_name'];
$description = $_POST['description'];
$price = $_POST['price'];
$quantityInStock = $_POST['quantity_in_stock'];
$category = $_POST['category'];
$manufacturer = $_POST['manufacturer'];
$sku = $_POST['sku'];

// Insert the new data into the Product table
$sql = "INSERT INTO Product (ProductName, Description, Price, QuantityInStock, Category, Manufacturer, SKU) VALUES ('$productName', '$description', '$price', '$quantityInStock', '$category', '$manufacturer', '$sku')";
if ($conn->query($sql)) { // successfully
    echo 'success';
} else {
    echo 'error';
}

// Close the database connection
$conn->close();
?>