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

// Query the Product table
$sql = "SELECT * FROM Product";
$result = $conn->query($sql);

// Loop through the results and store them in an array
$data = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}

// Close the database connection
$conn->close();

// Return the data as a JSON object
header('Content-Type: application/json');
echo json_encode($data);
?>