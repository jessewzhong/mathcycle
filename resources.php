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
                <li><a class="active" href="resources.php">Resources</a></li>
                <li><a href="contact.php">Contact</a></li>
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
            <div class="large">Resources</div>
            <p class="regular">
                <b>math</b><span style="color: red">cycle</span> is by no means the only online resource for students of various mathematical interests, 
                from high school competitions to theory and research. Below, you will find resources of every kind, inclduing lists of numerous summer programs for 
                mathematical growth and edification as well as renowned math contests around the globe. 
            </p>
            <div class="medium">Websites</div>
            <hr style="background-color: red">
            <div class="gridbox">
                <a class="grid" href="https://artofproblemsolving.com/" target="_blank">
                    <img src="./pictures/aops-main.svg">
                </a>
                <a class="grid" style="background-color: rgb(82, 28, 168); background-clip: content-box" class="grid" href="https://www.expii.com/" target="_blank">
                        <img style="width:60%; height:60%; display: block; margin: auto; position: relative; top: 50%; transform: translateY(-50%)" src="./pictures/expii.svg">
                </a>
                <a class="grid" href="https://www.khanacademy.org/" target="_blank">
                        <img src="./pictures/khanacademy.png">
                </a>
                <a class="grid" href="https://brilliant.org/" target="_blank">
                        <img src="./pictures/brilliant2.png">
                </a>
            </div>
            <div class="medium">Summer Programs</div>
            <hr>
            <div class="gridbox">
                <a class="grid" href="https://www.awesomemath.org/" target="_blank">
                        <img src="./pictures/awesomemath.png">
                </a>
                <a class="grid" href="https://ideamath.org/" target="_blank">
                        <img src="./pictures/ideamath.png">
                </a>
                <a class="grid" href="https://www.mathcamp.org/" target="_blank">
                        <img src="./pictures/mathcamp.gif">
                </a>
                <a class="grid" href="https://promys.org/" target="_blank">
                        <img src="./pictures/promys.gif">
                </a>
                <a class="grid" href="https://rossprogram.org/" target="_blank">
                        <img src="./pictures/ross.svg">
                </a>
                <a style="background-color: #8e130e; background-clip: content-box" class="grid" href="https://sumac.stanford.edu/" target="_blank">
                        <img style="width:95%; height:95%; display: block; margin: auto; position: relative; top: 50%; transform: translateY(-50%)" src="./pictures/sumac.png">
                </a>
                <a class="grid" href="https://hcssim.org/" target="_blank">
                        <img src="./pictures/hcssim.png">
                </a>
            </div>
            <div class="medium">Competitions</div>
            <hr>
            <div class="gridbox"> 
                <a style="background-color: #782323; background-clip: content-box" class="grid" href="http://www.hmmt.co/" target="_blank">
                        <img style="width:65%; height:65%; display: block; margin: auto; position: relative; top: 50%; transform: translateY(-50%)" src="./pictures/hmmt.png">
                </a>
                <a class="grid" href="https://jason-shi-f9dm.squarespace.com/" target="_blank">
                        <img src="./pictures/pumac.png">
                </a>
                <a class="grid" href="http://www.cmimc.org/" target="_blank">
                        <img src="./pictures/cmimc.png">
                </a>
                <a class="grid" href="http://www.arml2.com/arml_2018/page/index.php?page_type=public&page=home" target="_blank">
                        <img src="./pictures/arml.jpg">
                </a>
                <a class="grid" href="http://www.usamts.org/index.php" target="_blank">
                        <img src="./pictures/usamts.gif">
                </a>
                <a class="grid" href="http://www.mandelbrot.org/" target="_blank">
                        <img src="./pictures/mandelbrot.gif">
                </a>
                <a class="grid" href="https://www.maa.org/math-competitions/" target="_blank">
                    <img src="./pictures/amc.png">
                </a>
                <a class="grid" href="https://www.mathcounts.org/" target="_blank">
                        <img src="./pictures/mathcounts2.jpg">
                </a>
            </div>
        </div>
        <div class="header" style="background-color: black; display: flex; align-items: baseline; justify-content: space-between">
            <div class="regular" style="color: white">Questions? Contact Us!</div>
            <div style="display: inline-block; float: right">
                <a class="title" href="../index.php">
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
        <div id="createlogin" class="center clicky">
            <img id="exit" src="./pictures/exit.png" style="width: 5%; margin: 1%; cursor: pointer; position: absolute; top: 0; right: 0">
            <form class="clicky" id="createloginA" action="signup.php" method="post">
                <p class="regular clicky">
                    <b class="clicky">math</b><span class="clicky" style="color: red">cycle</span>
                </p>
                <div class="large clicky" style="text-align: center">Login</div>
        

                <label class="clicky" for="user">Username</label>      
                <input class="clicky" id="focuss" type="text" placeholder="Enter Email" name="user" required autofocus><br>

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
        <script src="onethirdwidth.js"></script>
    </body>

</html>

