<?php
$host = "localhost";
$dbname = "weblearning"; // tên database bạn vừa tạo
$username = "root"; // mặc định của XAMPP
$password = "";     // mặc định rỗng

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
