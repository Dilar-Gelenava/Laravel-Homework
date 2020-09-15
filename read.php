<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpooptest";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT `id`, `product_name`, `description` FROM `products`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Product: " . $row["product_name"]. "  descritpion: " . $row["description"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>
