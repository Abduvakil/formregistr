<?php
$servername = "localhost";
$username = "root"; // Замените на вашего пользователя БД
$password = ""; // Пароль БД
$dbname = "sportswear_store";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>
