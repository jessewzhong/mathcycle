<?php   
session_start();
if (isset($_SESSION['userID']) == false || isset($_SESSION['number']) == false) {
    header("Location: ./profile.php?return");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Home</title>
        <meta name="author" content="Jesse Zhong">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link rel="stylesheet" href="./node_modules/animate.css/animate.css">
    </head>
    <body> 
        <div class="top">
            <div class="header">
                <a class="title" href="index.php">
                <span class="headertitlea">math</span><span class="headertitleb">cycle</span>
                </a>
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="logoutbutton" style="float: right" onclick="popUpA()"><a style="cursor: pointer">Logout</a></li>
                <li class="active" style="float: right"><a href="profile.php">Profile</a></li>
            </ul>
            </div>
        </div>
        <div class="body animated slow fadeIn">
            <div class="large">Practice</div>
            <div class="medium" style="padding-top: 0">
                <?php echo "<b>".$_SESSION['topic'].":</b>"." <i>Problem ".mb_substr($_SESSION['topic'], 0, 1).$_SESSION['number']."</i>";?>
            </div>
            <hr>
            <p class="regular" style="min-height: 25vh">
                <?php echo $_SESSION['text']; ?>
            </p>
            <form action="problemqueue.php" method="post">
                <button type="submit" class="under" name="login-submit" style="color: red; font-weight: bold;">  
                    <b> &nbsp; submit &nbsp; </b>
                </button>
            </form>
        </div>
        <div class="header" style="background-color: black; display: block; text-align: right">
            <div style="display: inline-block;">
                <a class="title" href="index.php">
                <span class="headertitlea">math</span><span class="headertitleb">cycle</span>
                </a>
            </div>
        </div>
        <div id="logout" class="center clicky">
            <img id="exit" src="./pictures/exit.png" style="width: 5%; margin: 1%; cursor: pointer; position: absolute; top: 0; right: 0">
            <form class="clicky" id="logoutA" action="logout.php" method="post">
                <p class="regular clicky">
                    <b class="clicky">math</b><span class="clicky" style="color: red">cycle</span>
                </p>
                <div class="large clicky" style="text-align: center">Logout</div>
                <p class="clicky regular" style="text-align: center; padding-top: 1em; padding-bottom: 0.5em">Are you sure?</p>
                <div class="clicky" style="text-align: center; padding-bottom: 1em">
                        <button type="submit" class="under clicky" name="login-submit" style="color: red; font-weight: bold;"> &nbsp; logout &nbsp; </button>
                </div>
                <div class="clicky" style="text-align: center">
                    <span class="under" style="cursor: pointer; color: red; font-weight: bold;"> &nbsp; close &nbsp; </span>
                </div>
            </form>
        </div>
        <script src="logoutstuff.js"></script>
    </body>
</html>
