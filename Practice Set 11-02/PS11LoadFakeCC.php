<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practiceset11";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ccid, creditCardType, creditCardNumber, creditCardExpirationDate, userIdNumber, password FROM creditcard";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ccid"]. " - Credit Card Type: " . $row["creditCardType"]. " - Credit Card Number: " . $row["creditCardNumber"]. " - Credit Card Expiration Date: " . $row["creditCardExpirationDate"]. " - user ID Number: " . $row["userIdNumber"]. "\n";
  }
} else {
  echo "0 results";
}
$conn->close();
?>