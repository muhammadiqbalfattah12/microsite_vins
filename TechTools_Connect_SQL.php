<html>
<head>
<title> Koneksi ke SQL </title>
</head>
<body>
<H2> Aku Siap Koneksi ke SQL </H2>

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
$conn->close();

?>



</body>


</html>
