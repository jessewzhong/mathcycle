<?php

if (isset($_POST['login-submit'])) {

    require 'dbh.php';

    $user = $_POST['user'];
    $password = $_POST['psw'];

    $sql = "SELECT * FROM users WHERE uidUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ./index.php?error=sqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "s", $user);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($password, $row['pwdUsers']);
            if ($pwdCheck == false) {
                header("Location: ./index.php?error=wrongPassword");
                exit();
            }
            else if ($pwdCheck == true) {
                session_start();
                $_SESSION['userID'] = $row['idUsers'];
                $_SESSION['userUID'] = $row['uidUsers'];
                $_SESSION['algNumber'] = $row['alg'];
                $_SESSION['geoNumber'] = $row['geo'];
                $_SESSION['comboNumber'] = $row['combo'];
                $_SESSION['NTNumber'] = $row['NT'];
                $_SESSION['score'] = $row['alg'] + $row['geo'] + $row['combo'] + $row['NT'] - 4;

                header("Location: ./index.php?login=success");
                exit();
            }
        }
        else {
            header("Location: ./index.php?error=noUser");
            exit();
        }
    }
}