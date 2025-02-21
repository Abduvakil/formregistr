<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Добро пожаловать в систему регистрации</h2>

        <?php if (isset($_SESSION["username"])): ?>
            <p class="welcome">Вы вошли как <strong><?php echo htmlspecialchars($_SESSION["username"]); ?></strong></p>
            <a href="dashboard.php" class="button">Личный кабинет</a>
            <a href="logout.php" class="button logout">Выйти</a>
        <?php else: ?>
            <a href="register.php" class="button">Регистрация</a>
            <a href="login.php" class="button">Вход</a>
        <?php endif; ?>
    </div>
</body>
</html>
