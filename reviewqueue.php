<?php

if (isset($_POST['alg-submit'])) {
    session_start();
    require 'dbh.php';

    $username = $_SESSION['userID'];

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
            $_SESSION['topic'] = "Algebra";
            $_SESSION['number'] = $_SESSION['algNumber'];

            $_SESSION['review'] = array();

            for ($i = )

            header("Location: ./profile/review.php?alg");
            exit();
        }
        else {
            header("Location: ./profile.php?error");
            exit();
        }
    }
}

else if (isset($_POST['geo-submit'])) {
    session_start();
    require 'dbh.php';

    $username = $_SESSION['userID'];

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
            $_SESSION['topic'] = "Geometry";
            $_SESSION['number'] = $_SESSION['geoNumber'];

            header("Location: ./profile/review.php?geo");
            exit();
        }
        else {
            header("Location: ./profile.php?error");
            exit();
        }
    }
}

else if (isset($_POST['combo-submit'])) {
    session_start();
    require 'dbh.php';

    $username = $_SESSION['userID'];

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
            $_SESSION['topic'] = "Combinatorics";
            $_SESSION['number'] = $_SESSION['comboNumber'];

            header("Location: ./profile/review.php?combo");
            exit();
        }
        else {
            header("Location: ./profile.php?error");
            exit();
        }
    }
}

else if (isset($_POST['NT-submit'])) {
    session_start();
    require 'dbh.php';

    $username = $_SESSION['userID'];

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
            $_SESSION['topic'] = "Number Theory";
            $_SESSION['number'] = $_SESSION['NTNumber'];

            header("Location: ./profile/review.php?NT");
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