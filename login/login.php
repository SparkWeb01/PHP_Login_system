<?php
session_start();
include "db_conn.php";
if(isset($_POST['username']) && isset($_POST['password'])) {
    function validate ($data){
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if(empty($uname)) {
        header("Location: index.php?error=Логин не введен или введен не верно");
        exit();
    }else if(empty($pass)) {
        header("Location: index.php?error=Пароль не введен или введен не верно");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] == $uname && $row['password'] == $pass) {
                $_SESSION['uname'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                header("Location: home.php");
                exit();
            } else {
                header("Location: index.php?error=Пароль или Логин введены не верно");
                exit();
            }
        } else{
            header("Location: index.php?error=Пароль или Логин введены не верно");
            exit();
        }
    }
}else{
    header("Location: index.php");
    exit();
}