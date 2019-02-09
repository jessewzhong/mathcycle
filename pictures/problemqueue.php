<?php

if (isset($_GET['algebra-submit'])) {

    require 'dbh.php';

    $username = $_SESSION['userID']

    $sql = "SELECT * FROM users WHERE idUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ./profile.php?error=sqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['topic'] = "Algebra";
            $_SESSION['number'] = $_SESSION['algNumber'];
            header("Location: ./practice?problem=A".$_SESSION['algNumber']);
            exit();
        }
        else {
            header("Location: ./profile.php?error");
            exit();
        }
    }
}
else if (isset($_GET['geo-submit'])) {

    require 'dbh.php';

    $username = $_SESSION['userID']

    $sql = "SELECT * FROM users WHERE idUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ./profile.php?error=sqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['topic'] = "Geometry";
            $_SESSION['number'] = $_SESSION['geoNumber'];
            header("Location: ./practice?problem=A".$_SESSION['geoNumber']);
            exit();
        }
        else {
            header("Location: ./profile.php?error");
            exit();
        }
    }
}
else if (isset($_GET['combo-submit'])) {

    require 'dbh.php';

    $username = $_SESSION['userID']

    $sql = "SELECT * FROM users WHERE idUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ./profile.php?error=sqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['topic'] = "Combinatorics";
            $_SESSION['number'] = $_SESSION['comboNumber'];
            header("Location: ./practice?problem=A".$_SESSION['comboNumber']);
            exit();
        }
        else {
            header("Location: ./profile.php?error");
            exit();
        }
    }
}
else if (isset($_GET['NT-submit'])) {

    require 'dbh.php';

    $username = $_SESSION['userID']

    $sql = "SELECT * FROM users WHERE idUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ./profile.php?error=sqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['topic'] = "Number Theory";
            $_SESSION['number'] = $_SESSION['NTNumber'];
            header("Location: ./practice?problem=A".$_SESSION['NTNumber']);
            exit();
        }
        else {
            header("Location: ./profile.php?error");
            exit();
        }
    }
}
else {
    header("Location: ./profile.php?error");
    exit();
}