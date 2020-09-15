<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpooptest";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$product_name = $_REQUEST['product_name'];
$description = $_REQUEST['description'];

$sql = "INSERT INTO `products`(`product_name`, `description`) VALUES ('$product_name','$description')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
