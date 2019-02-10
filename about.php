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
                <li><a class="active" href="about.php">About</a></li>
                <li><a href="resources.php">Resources</a></li>
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
            <div class="large">About</div>
            <p class="regular" style="text-align: center"><i>The book of nature is written in the language of Mathematics</i></p>
            <p class="regular" style="text-align: center">- Galileo, <span style="color: red">1623</span></p>
            <p class="regular"><b>math</b><span style="color: red">cycle</span> aims to share the beauty and elegance of the study of mathematics with students, teachers, 
                professionals... the list goes on. We are committed to providing quality, original, and free resources to the community so that the mesmerizing sphere of 
                math is not restricted from anyone. Approachable to anyone, we hope to instill a greater appreciation of the sheer grandeur of math and reveal innumerous 
                possibilities to each and every user.
            </p>
            <div class="medium">Team</div>
            <hr>  
            <div style="text-align: center">
                <div class="medium">Jesse Zhong</div>
                <div class="medium" style="font-size: 1.5em; padding-top: 0"><i>Founder and Developer</i></div>  
                <img src="./pictures/team1.jpg" style="width: 25%; object-fit: contain">
                <p class="regular">Hi! I'm Jesse, and I'm current freshman at Columbia University pursuing a double major in Mathematics and Computer Science. As an avid 
                    enthusiast of math contests since middle school, I've had a plethora of compeition experience, participating in contests such as Mathcounts, ARML, HMMT, 
                    AIME, USAJMO, and many more. I am a dedicated teacher and math educator with years of tutoring, mentoring, and teaching experience. To this end, I've 
                    worked at numerous organizations such  Mathnasium, Awesome Math, and Idea Math, where I am currently an instructor year-round in New York City. My main 
                    area of expertise is geometry, but I hope you find all of the problems my team and I have written to be enjoyable and fascinating. If you have any 
                    questions, don't hesitate to <a href="contact.html" style="text-decoration: none; color: red"><b>contact me</b></a>.
                </p>
            </div>
            <div style="text-align: center">
                <div class="medium">Jesse Zhong</div>
                <div class="medium" style="font-size: 1.5em; padding-top: 0"><i>Founder and Developer</i></div>  
                <img src="./pictures/team1.jpg" style="width: 25%; object-fit: contain">
                <p class="regular">Hi! I'm Jesse, and I'm current freshman at Columbia University pursuing a double major in Mathematics and Computer Science. As an avid 
                    enthusiast of math contests since middle school, I've had a plethora of compeition experience, participating in contests such as Mathcounts, ARML, HMMT, 
                    AIME, USAJMO, and many more. I am a dedicated teacher and math educator with years of tutoring, mentoring, and teaching experience. To this end, I've 
                    worked at numerous organizations such  Mathnasium, Awesome Math, and Idea Math, where I am currently an instructor year-round in New York City. My main 
                    area of expertise is geometry, but I hope you find all of the problems my team and I have written to be enjoyable and fascinating. If you have any 
                    questions, don't hesitate to <a href="contact.html" style="text-decoration: none; color: red"><b>contact me</b></a>.
                </p>
            </div>
            <div style="text-align: center">
                <div class="medium">Jesse Zhong</div>
                <div class="medium" style="font-size: 1.5em; padding-top: 0"><i>Founder and Developer</i></div>  
                <img src="./pictures/team1.jpg" style="width: 25%; object-fit: contain">
                <p class="regular">Hi! I'm Jesse, and I'm current freshman at Columbia University pursuing a double major in Mathematics and Computer Science. As an avid 
                    enthusiast of math contests since middle school, I've had a plethora of compeition experience, participating in contests such as Mathcounts, ARML, HMMT, 
                    AIME, USAJMO, and many more. I am a dedicated teacher and math educator with years of tutoring, mentoring, and teaching experience. To this end, I've 
                    worked at numerous organizations such  Mathnasium, Awesome Math, and Idea Math, where I am currently an instructor year-round in New York City. My main 
                    area of expertise is geometry, but I hope you find all of the problems my team and I have written to be enjoyable and fascinating. If you have any 
                    questions, don't hesitate to <a href="contact.html" style="text-decoration: none; color: red"><b>contact me</b></a>.
                </p>
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
    </body>
</html>

