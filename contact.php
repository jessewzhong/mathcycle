<?php
session_start();
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
                <li><a class="active" href="contact.php">Contact</a></li>
                <?php
                if (isset($_SESSION['userID'])) { ?>
                    <li id="logoutbutton" style="float: right" onclick="popUpA()"><a style="cursor: pointer">Logout</a></li>
                    <li style="float:right"><a href="profile.php">Profile</a></li>
                <?php }
                else { ?>
                    <li id="logbutton" style="float: right" onclick="popUp()"><a style="cursor: pointer">Login</a></li>
                <?php } ?>
            </ul>
            </div>
        </div>
        <div class="body animated slow fadeIn">
            <div class="large">Contact</div>
            <p class="regular">
                <b>math</b><span style="color: red">cycle</span> is designed to be an interactive, open, and elovling resource for the math community. If you have any questions, comments, or concerns, do 
                not hesitate to contact us at: 
            </p>
            <p class="regular" style="text-align: center">
                <b>jwz2111<span style="color: red">@</span>columbia.edu</b></p>
            <p class="regular">
                In addition, we are always looking for more problems and ideas to add to our database, especially those with originality that have not appeared 
                in contests or other online resources. If you wish to contribute, please send LaTeXed problems and solutions to the email above, and we will be sure to credit 
                you for your contribution.
            </p>    
        </div>
        <div class="header" style="background-color: black; display: flex; align-items: baseline; justify-content: space-between">
            <div class="regular" style="color: white">Questions? <a href="contact.php" style="color: red; text-decoration: none"><b>Contact Us!</b><a></div>
            <div style="display: inline-block; float: right">
                <a class="title" href="index.php">
                <span class="headertitlea">math</span><span class="headertitleb">cycle</span>
                </a>
            </div>
        </div>
        <div id="login" class="center clicky">
            <img id="exit" src="./pictures/exit.png" style="width: 5%; margin: 1%; cursor: pointer; position: absolute; top: 0; right: 0">
            <form class="clicky" id="loginA" action="login.php" method="post">
                <p class="regular clicky">
                    <b class="clicky">math</b><span class="clicky" style="color: red">cycle</span>
                </p>
                <div class="large clicky" style="text-align: center">Login</div>
        
                <label class="clicky" for="user">Username</label>
                <input class="clicky" id="focus" type="text" placeholder="Enter Username" name="user" required autofocus><br>
            
                <label class="clicky" for="psw">Password</label>
                <input class="clicky" type="password" placeholder="Enter Password" name="psw" required>

                <div class="clicky" style="text-align: center">
                    <button type="submit" class="under clicky" name="login-submit" style="color: red; font-weight: bold;"> &nbsp; submit &nbsp; </button>
                </div>
                <p class="clicky regular" style="text-align: center; padding-top: 1em; padding-bottom: 0.5em">Don't have an account yet?</p>
                <div class="clicky" style="text-align: center">
                    <span class="under" id="account" onclick="loadCreate()"> &nbsp; click here &nbsp; </span>
                </div>
                <div class="clicky" style="text-align: center; padding-top: 1em">
                    <span class="under" style="cursor: pointer; color: red; font-weight: bold;"> &nbsp; close &nbsp; </span>
                </div>

            </form>
        </div>
        <div id="createlogin" class="center clicky">
            <img id="exit" src="./pictures/exit.png" style="width: 5%; margin: 1%; cursor: pointer; position: absolute; top: 0; right: 0">
            <form class="clicky" id="createloginA" action="signup.php" method="post">
                <p class="regular clicky">
                    <b class="clicky">math</b><span class="clicky" style="color: red">cycle</span>
                </p>
                <div class="large clicky" style="text-align: center">Sign Up</div>
        
                <label class="clicky" for="user">Username</label>      
                <input class="clicky" id="focuss" type="text" placeholder="Enter Username" name="user" required autofocus><br>

                <label class="clicky" for="email">Email</label>      
                <input class="clicky" type="text" placeholder="Enter Email" name="email" required><br>
            
                <label class="clicky" for="psw">Password</label>
                <input class="clicky" type="password" placeholder="Enter Password" name="psw" required><br>

                <label class="clicky" for="pswc">Confirm</label>
                <input class="clicky" type="password" placeholder="Confirm Password" name="pswc" required>
                <div class="clicky" style="text-align: center; padding-bottom: 1em">
                        <button type="submit" class="under clicky" name="signup-submit" style="color: red; font-weight: bold;"> &nbsp; submit &nbsp; </button>
                </div>
                <div class="clicky" style="text-align: center">
                    <span class="under" style="cursor: pointer; color: red; font-weight: bold;"> &nbsp; close &nbsp; </span>
                </div>
            </form>
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
        <script src="maintainwidth.js"></script>
        <script src="loginstuff.js"></script>
        <script src="logoutstuff.js"></script>
    </body>
</html>

