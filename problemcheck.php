<?php

if (isset($_POST['answer-submit'])) {
    session_start();
    require 'dbh.php';

    $answer = $_POST['answer'];
    $username = $_SESSION['userID'];

    $sql = "SELECT * FROM users WHERE idUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ./practice.php?error=sqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            if ($_SESSION['topic'] == "Algebra") {
                $var = "alg";
            }
            else if ($_SESSION['topic'] == "Geometry") {
                $var = "geo";
            }
            else if ($_SESSION['topic'] == "Combinatorics") {
                $var = "combo";
            }
            else if ($_SESSION['topic'] == "Number Theory") {
                $var = "NT";
            }

            $_SESSION['number'];

            $sql1 = "SELECT * FROM problems WHERE type=? AND number=?";
            $stmt1 = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt1, $sql1)) {
                header("Location: ./practice.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt1, "si", $var, $_SESSION['number']);
                mysqli_stmt_execute($stmt1);
                $result1 = mysqli_stmt_get_result($stmt1);
                if ($row1 = mysqli_fetch_assoc($result1)) {
                    if ($answer == $row1['answer']) {
                        $_SESSION['state'] = "correct";
                    }
                    else {
                        $_SESSION['state'] = "wrong";
                    }
                }
                else {   
                    header("Location: ./practice.php?error=sqlerror");
                    exit();
                }
            }

            header("Location: ./practice.php?problem=".substr($_SESSION['topic'], 0, 1).$_SESSION['number']."=".$_SESSION['state']);
            exit();
        }
        else {
            header("Location: ./practice.php?error");
            exit();
        }
    }
}
else {
    header("Location: ./practice.php?error");
    exit();
}