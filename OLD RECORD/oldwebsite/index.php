<?php
$servername = "localhost";
$username = "u765974444_ab";
$password = "Ankit1@9";
$dbname = "u765974444_abc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO employee (emp_name, emp_address, emp_salary)
VALUES ('John', 'Doe', 12000)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>