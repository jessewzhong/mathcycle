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

            $var = "alg";
            $sql1 = "SELECT * FROM problems WHERE type=? AND number=?";
            $stmt1 = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt1, $sql1)) {
                header("Location: ./profile.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt1, "si", $var, $_SESSION['number']);
                mysqli_stmt_execute($stmt1);
                $result1 = mysqli_stmt_get_result($stmt1);
                if ($row1 = mysqli_fetch_assoc($result1)) {
                    $_SESSION['text'] = $row1['text'];
                }
                else {   
                    header("Location: ./profile.php?error=sqlerror");
                    exit();
                }
            }

            header("Location: ./profile/practice.php?problem=A".$_SESSION['algNumber']);
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

            $var = "geo";
            $sql1 = "SELECT * FROM problems WHERE type=? AND number=?";
            $stmt1 = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt1, $sql1)) {
                header("Location: ./profile.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt1, "si", $var, $_SESSION['number']);
                mysqli_stmt_execute($stmt1);
                $result1 = mysqli_stmt_get_result($stmt1);
                if ($row1 = mysqli_fetch_assoc($result1)) {
                    $_SESSION['text'] = $row1['text'];
                }
                else {   
                    header("Location: ./profile.php?error=sqlerror");
                    exit();
                }
            }

            header("Location: ./profile/practice.php?problem=G".$_SESSION['geoNumber']);
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

            $var = "combo";
            $sql1 = "SELECT * FROM problems WHERE type=? AND number=?";
            $stmt1 = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt1, $sql1)) {
                header("Location: ./profile.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt1, "si", $var, $_SESSION['number']);
                mysqli_stmt_execute($stmt1);
                $result1 = mysqli_stmt_get_result($stmt1);
                if ($row1 = mysqli_fetch_assoc($result1)) {
                    $_SESSION['text'] = $row1['text'];
                }
                else {   
                    header("Location: ./profile.php?error=sqlerror");
                    exit();
                }
            }

            header("Location: ./profile/practice.php?problem=C".$_SESSION['comboNumber']);
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

            $var = "NT";
            $sql1 = "SELECT * FROM problems WHERE type=? AND number=?";
            $stmt1 = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt1, $sql1)) {
                header("Location: ./profile.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt1, "si", $var, $_SESSION['number']);
                mysqli_stmt_execute($stmt1);
                $result1 = mysqli_stmt_get_result($stmt1);
                if ($row1 = mysqli_fetch_assoc($result1)) {
                    $_SESSION['text'] = $row1['text'];
                }
                else {   
                    header("Location: ./profile.php?error=sqlerror");
                    exit();
                }
            }

            header("Location: ./profile/practice.php?problem=N".$_SESSION['NTNumber']);
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