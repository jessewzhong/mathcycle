<?php

if (isset($_POST['login-submit'])) {

    require 'dbh.php';

    $email = $_POST['email'];
    $password = $_POST['psw'];

    $sql = "SELECT * FROM users WHERE emailUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?error=sqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($password, $row['pwdUsers']);
            if ($pwdCheck == false) {
                header("Location: ./index.html?error=wrongPassword");
                exit();
            }
            else if ($pwdCheck == true) {
                session_start();
                $_SESSION['userID'] = $row['idUsers'];
                $_SESSION['userUID'] = $row['uidUsers'];

                header("Location: ./index.php?login=success");
                exit();
            }
        }
        else {
            header("Location: ./index.html?error=noUser");
            exit();
        }
    }
}