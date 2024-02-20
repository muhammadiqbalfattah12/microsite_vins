<html>
<head>
<title> Membuat Data Base Techtool </title>
</head>
<body>
<H2> Membuat Data Base Techtool </H2>

<?php
echo "Koneksi ke SQL";
echo "<br>";
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Koneksi ke SQL Berhasil";
echo "<br>";
echo "Create database Techtool";
echo "<br>";
// Create database
$sql = "CREATE DATABASE techtool";
if ($conn->query($sql) === TRUE) {
  echo "Database Techtool created successfully";
} else {
  echo "Error creating database: Techtool " . $conn->error;
}

$conn->close();

?>



</body>


</html>
