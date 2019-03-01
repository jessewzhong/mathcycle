<?php

if (isset($_POST['next-submit'])) {
    session_start();
    require '../dbh.php';

    $username = $_SESSION['userID'];

    $sql = "SELECT * FROM users WHERE idUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ./practice.php?error=sqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "i", $username);
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

            $_SESSION['number'] = $_SESSION['number'] + 1;

            $sql1 = "UPDATE users SET ".$var."=? WHERE idUsers=?";
            $stmt1 = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt1, $sql1)) {
                header("Location: ./practice.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt1, "ii", $_SESSION['number'], $username);
                mysqli_stmt_execute($stmt1);
                $sql11 = "SELECT * FROM users WHERE idUsers=?";
                $stmt11 = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt11, $sql11)) {
                    header("Location: ./practice.php?error=sqlerror");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt11, "i", $username);
                    mysqli_stmt_execute($stmt11);
                    $result1 = mysqli_stmt_get_result($stmt11);
                    if ($row1 = mysqli_fetch_assoc($result1)) {
                        $_SESSION['algNumber'] = $row1['alg'];
                        $_SESSION['geoNumber'] = $row1['geo'];
                        $_SESSION['comboNumber'] = $row1['combo'];
                        $_SESSION['NTNumber'] = $row1['NT'];
                        unset($_SESSION['answer']);
                        unset($_SESSION['state']);

                        $sqlt = "SELECT * FROM problems WHERE type=?";
                        $stmtt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmtt, $sqlt)) {
                            header("Location: ../profile.php?error=sqlerror");
                            exit();
                        }
                        else {
                            $count;
                            mysqli_stmt_bind_param($stmtt, "s", $var);
                            mysqli_stmt_execute($stmtt);
                            $resultt = mysqli_stmt_get_result($stmtt);
                            while ($rowt = mysqli_fetch_assoc($resultt)) {
                                $count++;
                            }

                            if ($S_SESSION['number'] > $count) {
                                header("Location: ./congrats.php");
                                exit();
                            }
                            else {
                                ; 
                            }
                        }

                        $sql2 = "SELECT * FROM problems WHERE type=? AND number=?";
                        $stmt2 = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt2, $sql2)) {
                            header("Location: ./practice.php?error=sqlerror");
                            exit();
                        }
                        else {
                            mysqli_stmt_bind_param($stmt2, "si", $var, $_SESSION['number']);
                            mysqli_stmt_execute($stmt2);
                            $result2 = mysqli_stmt_get_result($stmt2);
                            if ($row2 = mysqli_fetch_assoc($result2)) {
                                $_SESSION['text'] = $row2['text'];
                            }
                            else {   
                                header("Location: ./practice.php?error=sqlerror");
                                exit();
                            }
                        }
                    }
                    else {   
                        header("Location: ./practice.php?error=sqlerrorssss".$_SESSION['number']);
                        exit();
                    }
                }
            }

            header("Location: ./practice.php?problem=".substr($_SESSION['topic'], 0, 1).$_SESSION['number']);
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