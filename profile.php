<?php   
session_start();
if (isset($_SESSION['userID']) == false) {
    header("Location: ./index.php?return");
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
            <div class="large">Profile</div>
            <div class="medium" style="padding-top: 0">Welcome, <?php echo $_SESSION['userUID'];?>!</div>
            <hr>
            <p class="regular"><span style="color: red">Your ID:</span> <?php echo sprintf('%04u', $_SESSION['userID']);?></p>
            <p class="regular"><b>math</b><span style="color: red">cycle</span> aims to share the beauty and elegance of the study of mathematics with students, teachers, 
                professionals... the list goes on. We are committed to providing quality, original, and free resources to the community so that the mesmerizing sphere of 
                math is not restricted from anyone. Approachable to anyone, we hope to instill a greater appreciation of the sheer grandeur of math and reveal innumerous 
                possibilities to each and every user.
            </p>
            <div class="medium">Practice</div>
            <hr>
            <div class="contests" style="display: table">
                <div> 
                    <form action="problemqueue.php" method="post">
                        <button type="submit" name="alg-submit" class="regular subject">  
                            <b>Algebra</b>
                        </button>
                    </form>
                </div>  
                <div>
                    <form action="problemqueue.php" method="post">
                        <button type="submit" name="geo-submit" class="regular subject">  
                            <b>Geometry</b>
                        </button>
                    </form>
                </div>  
                <div>
                    <form action="problemqueue.php" method="post">
                        <button type="submit" name="combo-submit" class="regular subject">  
                            <b>Combinatorics</b>
                        </button>
                    </form>
                </div>  
                <div>
                    <form action="problemqueue.php" method="post">
                        <button type="submit" name="NT-submit" class="regular subject">  
                            <b>Number Theory</b>
                        </button>
                    </form>
                </div>  
            </div>
        </div>
        <div class="header" style="background-color: black; display: block; text-align: right">
            <div style="display: inline-block;">
                <a class="title" href="index.php">
                <span class="headertitlea">math</span><span class="headertitleb">cycle</span>
                </a>
            </div>
        </div>
        <div id="login" class="center clicky">
            <img id="exit" src="./pictures/exit.png" style="width: 5%; height: 5%; margin: 1%; cursor: pointer; position: absolute; top: 0; right: 0">
            <form class="clicky" id="loginA" action="login.php" method="post">
                <p class="regular clicky">
                    <b class="clicky">math</b><span class="clicky" style="color: red">cycle</span>
                </p>
                <div class="large clicky" style="text-align: center">Login</div>
        
                <label class="clicky" for="email">Email</label>
                <input class="clicky" id="focus" type="text" placeholder="Enter Email" name="email" required autofocus><br>
            
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
        <script src=contestsadjustpadding.js></script>
        <script src="loginstuff.js"></script>
        <script src="logoutstuff.js"></script>
    </body>
</html>
