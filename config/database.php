<?php
$servername = "localhost";
$username = "u68579";
$password = "5317204";
$dbname = "u68579";

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>
