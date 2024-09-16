<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['id'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Домашняя страница</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Здравствуйте <?php echo $_SESSION['name'] ?></h1>
    <a href="logout.php">Выйти</a>
</body>
</html>
<?php
} else {
    header("Location: index.php");
    exit();
}
?>
