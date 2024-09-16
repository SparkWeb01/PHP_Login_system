<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>Вход</h2>
        <?php if (isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php } ?>
        <label>Логин</label>
        <input type="text" name="username" placeholder="Имя пользователя"> 

        <label>Пароль</label>
        <input type="password" name="password" placeholder="Пароль">
        <button type="submit">Войти</button>
    </form>
</body>
</html>