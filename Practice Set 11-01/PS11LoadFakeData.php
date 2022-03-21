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

$sql = "SELECT id, email, lastName, firstName, userName, password FROM useraccount";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Email: " . $row["email"]. " - Last Name: " . $row["lastName"]. " - First Name: " . $row["firstName"]. " - Username: " . $row["userName"]. " - Password: " . $row["password"]. "\n";
  }
} else {
  echo "0 results";
}
$conn->close();
?>