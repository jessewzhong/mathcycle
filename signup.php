<?php

if (isset($_POST['signup-submit'])) {

    require 'dbh.php';

    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $passwordConfirm = $_POST['pswc'];

    $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_perpare($stmt, $sql)) {
        header("Location: ../signup.php?error=sqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0) {
            header("Location: ../singup.php?error=usertaken");
            exit();
        }
        else {
            $sql = "INSERT INTO users () VALUES ()";
        }

    }

}