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


// Get the ProductID from the POST parameter
$productId = $_POST['product_id'];

// Delete the corresponding row from the Product table
$sql = "DELETE FROM Product WHERE ProductID='$productId'";
if ($conn->query($sql)) {
    echo 'success';
} else {
    echo 'error';
}

// Close the database connection
$conn->close();
?>