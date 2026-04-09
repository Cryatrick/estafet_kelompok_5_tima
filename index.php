<?php
$servername = "aplikasi_estafet";
$username = "estafet_user";
$password = "Qwerty123$%";
$dbname = "10.11.12.109";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";