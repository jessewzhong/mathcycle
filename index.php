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
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
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
            <div class="gridbox">
                <div style="width: 50%" class="right">
                    <div class="extralarge" style="color: black; font-weight: bold; padding-bottom: 0.5em; text-align: right">math</div>
                    <div class="gradient" style="padding-right: 0.5em">
                        <p class="regular"> 
                            a complete set or series
                        </p>
                        <p class="regular"> 
                            a simplicial chain with 0 boundary
                        </p>
                        <p class="regular"> 
                            a group that is generated by a single element
                        </p>
                        <p class="regular"> 
                            a unit of plane angle measurement equal to 2π radians
                        </p>
                        <p class="regular"> 
                            a series of events that are regularly repeated in the same order
                        </p>
                        <p class="regular"> 
                            a sequence for which the same terms are repeated over and over
                        </p>
                        <p class="regular"> 
                                a path of edges and vertices wherein a vertex is reachable from itself
                        </p>
                        <p class="regular"> 
                            a permutation of the elements of some set X which maps the elements of some subset S of X to each other in a cyclic fashion
                        </p>
                    </div>
                    <p class="regular" style="padding-right: 0.5em">
                        <b>infinite</b>
                    </p>
                </div>
                <div style="width: 50%">
                    <div class="extralarge" style="padding-bottom: 0.5em">cycle</div>
                    <div class="gradient" style="padding-left: 0.5em">
                        <p class="regular"> 
                            a complete set or series
                        </p>
                        <p class="regular"> 
                            a simplicial chain with 0 boundary
                        </p>
                        <p class="regular"> 
                            a group that is generated by a single element
                        </p>
                        <p class="regular"> 
                            a unit of plane angle measurement equal to 2π radians
                        </p>
                        <p class="regular"> 
                            a series of events that are regularly repeated in the same order
                        </p>
                        <p class="regular"> 
                            a sequence for which the same terms are repeated over and over
                        </p>
                        <p class="regular"> 
                                a path of edges and vertices wherein a vertex is reachable from itself
                        </p>
                        <p class="regular"> 
                            a permutation of the elements of some set X which maps the elements of some subset S of X to each other in a cyclic fashion
                        </p>
                    </div>
                    <p class="regular" style="padding-left: 0.5em; color: red">
                        <b>possibilities</b>
                    </p>
                </div>
            </div>
            <div class="parallax" style="position: relative">
                <div class="center">
                    <span class="large" style="padding-bottom: 0; color: white">Math <i>Evolved</i></span>
                </div>
            </div>
            <div>
                <p class="regular" style="padding-bottom: 0"> 
                    <span class="medium" style="display: inline-block">The days</span> of black ink or pencil sketches on plain, white 
                    paper are gone. It's 2019, and the realm of math education, competitions, and resources
                    has shifted to a more dynamic, extensible web-based approach in parallel to the world around us. <b>math</b><span style="color: red">cycle</span> 
                    believes that we can utilize the advancement of technology and online resources to further our mission of providing each and every student the tools 
                    and opportunities to delve into the unparalleled beauty of not just competition math, but of mathematics and problem solving in general. In this sense, 
                    we hope to <i>evolve</i> math education through a unique and personalized experience for students of all backgrounds.
                </p>
                <div class="medium"><i>Click to Explore</i></div>
                <hr style="background-color: red">
                <div class="gridbox" style="align-items: flex-start">
                    <div class="grid redback">
                        <div class="extralarge disp" onclick="display(this)">Accessible</div>
                        <img src="./pictures/accessible.jpg" style="width: 50%; object-fit: contain">
                    </div>
                    <p class="grid regular hide">
                        This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test 
                        This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test 
                        This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test 
                        This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test 
                        This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test 
                        This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test
                    </p>
                    <div class="grid redback">
                        <div class="extralarge disp" onclick="display(this)">Unique</div>
                        <img src="./pictures/unique.jpg" style="width: 50%; object-fit: contain">
                    </div>
                    <p class="grid regular hide">
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 
                        years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from 
                        a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 
                        1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory 
                        of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32
                    </p>
                    <div class="grid redback">
                        <div class="extralarge disp" onclick="display(this)">Dynamic</div>
                        <img src="./pictures/dynamic.png" style="width: 50%; object-fit: contain">
                    </div>
                    <p class="grid regular hide">
                        This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test 
                        This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test 
                        This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test 
                        This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test 
                        This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test 
                        This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test This is a test
                    </p>
                </div>
            </div>
            <div class="parallax" style="position: relative">
                <div class="center">
                    <span class="large" style="padding-bottom: 0; color: white">The <i>Core</i></span>
                </div>
            </div>
            <div style="position: relative">
                <div class="medium" style="text-align: center"><i>Algebra</i></div>
                <hr style="background-color: red">
                <div class="gridbox" style="align-items: flex-start">
                    <div class="grid2">
                        <img src="./pictures/alg1.png">
                    </div>
                    <div class="grid2">
                        <img src="./pictures/alg3.png">
                    </div>
                    <div class="grid2">
                        <img src="./pictures/alg4.gif">
                    </div>
                    <div class="grid2">
                        <img src="./pictures/alg2.png">
                    </div>
                </div>
                <p class="regular slide">
                    Al-Khwarizmi, known as the "father of algebra," first introduced the word <i>algebra</i> in his book <i>Ilm al-jabr wa'l-muḳābala</i>, and it 
                    translates roughly to "the reunion of broken parts." This broad part of mathematics has been introduced and widespread through all levels of education, 
                    from courses titled "Algebra I" and "Algebra II" to "Algebraic Number Theory" and "Linear Algebra." We are led into this realm through the introduction 
                    of expressions, variable expressions, and simple algebraic equations. But this area of math truly is integrated with and is foundational for 
                    multiple other parts of mathematics, spanning concepts such as analysis of functions, operations on polynomials, and fundamental properties of 
                    factoring and simplification.<br><br>
                    <b>math</b><span style="color: red">cycle</span> hopes to illustrate how concepts introduced in high school algebra, such as solving equations, 
                    factoring, and graphing functions, can be applied to solving clasical and interesting problems in math competitions and beyond. Moreover, we aspire 
                    to push beyond the limits of a high school course, paving a math to understanding motivation and intution in approaching challenging problems in 
                    algebra. How do we prove the formula for the partial sums of a geometric sequence? Why is it useful to multiple by a factor and then divide it out 
                    after a series of computations and simplifications? These are the types of questions that you will have a chance to delve into and answer.<br><br>
                </p>
                <div class="slider" style="margin: auto; background-color: red; height: 20px; width: 100px; cursor: pointer" onclick="slide(this)">
                    <img class="slidebutton">
                </div>
            </div>
            <div style="position: relative">
                <div class="medium" style="text-align: center"><i>Geometry</i></div>
                <hr style="background-color: red">
                <div class="gridbox" style="align-items: flex-start">
                    <div class="grid2">
                        <img src="./pictures/geo1.png">
                    </div>
                    <div class="grid2">
                        <img src="./pictures/geo2.gif">
                    </div>
                    <div class="grid2">
                        <img src="./pictures/geo3.png">
                    </div>
                    <div class="grid2">
                        <img src="./pictures/geo4.png">
                    </div>
                </div>
                <p class="regular slide">
                        Geometry is truly all around us. Look to the left or to the right. What is the shape of the 300-page Calculus textbook on the desk? How is the 
                        cabinet structured so that it maximizes space while maintaining geometric structural integrity. The previous example might involve a bit of physics, 
                        but nonetheless, geometry has been a centerpiece of mathematics from as long ago as 6 B.C. In particular, Greek mathematician Euclid formalized many 
                        of the axioms and theorems of "Euclidean" geometry that form the majority of the content taught in high school geometry courses today. Since the 
                        publication of Euclid's <i>Elements</i>, we've expanded our knowledge base from more convoluted areas of Euclidean geometry, such as transformations 
                        and properties of special points in triangles and quadrilaterals, to more abstract representations, such as hyperbolic or spherical geometry. A 
                        cornerstone for visualizing concepts in other areas of mathematics as well as for the underlying principles of other areas of the natural sciences, 
                        geometry is an ever-evolving area of mathematics, and there are always nifty ideas to explore and unearth.<br><br>
                        Here at <b>math</b><span style="color: red">cycle</span>, we aim to build upon the principles and ideas brought forth in a standard high school 
                        geometry course, such as similar triangles, angle chasing, and areas and volumes, in order to delve into the "beauty of geometry." There are a myriad 
                        of genuinely amazing and beautiful theorems and properties of geometric configurations that require simply an extended field of view while implementing 
                        basic geometric methods. For example, how can one prove the relatively simple angle bisector theorem? You've seen that the medians of a triangle 
                        intersect at a point called the centroid. Why is this? Why do the altitudes intersect also? Angle bisectors? Why can we draw a circle around a triangle 
                        anyways and inscribe it within? These are some of the deceptively simple questions that we hope to bring to light. In addition, we wish to derive 
                        connections between geometric concepts, establishing a link and relationship between ideas that are seemingly unrelated: How are the ratios related with 
                        the centroid of a triangle connected to those of the center of a tetrahedron?<br><br>
                </p>
                <div class="slider" style="margin: auto; background-color: red; height: 20px; width: 100px; cursor: pointer" onclick="slide(this)">
                    <img class="slidebutton">
                </div>
            </div>
            <div style="position: relative">
                <div class="medium" style="text-align: center"><i>Combinatorics</i></div>
                <hr style="background-color: red">
                <div class="gridbox" style="align-items: flex-start">
                    <div class="grid2">
                        <img src="./pictures/combo1.png">
                    </div>
                    <div class="grid2">
                        <img src="./pictures/combo2.png">
                    </div>
                    <div class="grid2">
                        <img src="./pictures/combo3.png">
                    </div>
                    <div class="grid2">
                        <img src="./pictures/combo4.png">
                    </div>
                </div>
                <p class="regular slide">
                        How many ways can you pick five players from your basketball team roster to be starters? How many scalene triangles have each of their vertices as 
                        the 8 vertices of a unit cube? How many ways are there to arrange the letters "abbccd" to create a "word"? These are several examples of combinatorics&mdash;
                        perhaps the most notorious aspects of mathematics for its tediousness and occassional monotony. However, this relatively new field of mathematics is 
                        fully integrated into numerous other areas of study, including but not limited to the study of finite structures (graphs, plots, etc.), optimization, and 
                        computer science theory. Nonetheless, there is an inherent beauty in combinatorics, mapping very complex, intricate problems to simplified versions, taking 
                        advantage of well-conceived structures for aid. For example, the classic method of "balls and urns" allows us to reduce a problem of distributing a certain 
                        number <i>n</i> of identical objects to a group of <i>k</i> people to that of arranging <i>n</i> circles and <i>k</i> dividers in a line, a much easier 
                        problem that can be solved with a standard combination computation.<br><br>
                        <b>math</b><span style="color: red">cycle</span>'s goal is to be able to expand upon the fairly limited introduction (if at all) to combinatorial 
                        mathematics that high school mathematics courses provide. From introductory ideas such as ordering, combinations, and permuations, we hope to build 
                        up an intuition to attacking more complex, challenging problems. Moreover, central ideas and methods to solving combinatorial problems will be evoked, 
                        providing a strong foundation to begin constructing the basis for fluency in combinatorial thinking. There are inevitably numerous ways and approaches 
                        to combinatorial problems, and we will help motivate and explain the positives and drawbacks of different methods, establishing pathways that include topics 
                        such as constructive counting, complementary counting, and bijective maps.<br><br>
                </p>
                <div class="slider" style="margin: auto; background-color: red; height: 20px; width: 100px; cursor: pointer" onclick="slide(this)">
                    <img class="slidebutton">
                </div>
            </div>
            <div style="position: relative">
                <div class="medium" style="text-align: center"><i>Number Theory</i></div>
                <hr style="background-color: red">
                <div class="gridbox" style="align-items: flex-start">
                    <div class="grid2">
                        <img src="./pictures/nt1.png">
                    </div>
                    <div class="grid2">
                        <img src="./pictures/nt4.png">
                    </div>
                    <div class="grid2">
                        <img src="./pictures/nt3.gif">
                    </div>
                    <div class="grid2">
                        <img src="./pictures/nt2.png">
                    </div>
                </div>
                <p class="regular slide">
                        Can every even number greater than 2 be represented as the sum of two primes? Are there any odd perfect numbers? Are there an infinite number of twin 
                        primes? Which integers can be written as the sum of three perfect cubes? Although these questions seem extremely simple to the ear, they are just a few of 
                        the many unsolved number theory problems in mathematics. Numbers are inherently all around us. We learn how to count from 1 to 10... We learn how to count 
                        and skip every other number... We learn that some numbers are special and only have two divisors. Number theory, at its essence, is <i>arithmetic</i>, and 
                        the works of Fermat, Euler, Lagrance, and many more, have allowed us to gain a greater grasp of how to categorize, manipulate, and perform operations on 
                        numbers. Its applications are widespread throughout, from probablisitc and statistical models to solutions of diophantine and modular equations.<br><br>
                        Whereas most high school mathematics courses do not touch upon the subject of number theory in the slightest, <b>math</b><span style="color: red">cycle</span> 
                        will introduce this expansive subject from the ground up, touching on core topics such as prime factorization, divsion properties, and least common multiple 
                        and greatest common divisor ideas, and providing an in-depth journey into intriguin topics such as modular arithmetic, special operations, and sequences and 
                        series. A brief introduction to a fun topic: Given boxes of 5 and 8 chicken nuggets, what is the largest number of chicken nuggets that cannot be formed from 
                        a combination of these two quantities? This question, motivated by a casual encounter at a local fast food restaurant, has led to the well known Chicken 
                        McNugget Theorem.<br><br>
                </p>
                <div class="slider" style="margin: auto; background-color: red; height: 20px; width: 100px; cursor: pointer" onclick="slide(this)">
                    <img class="slidebutton">
                </div>
            </div>
            <div class="parallax" style="position: relative">
                <div class="center">
                    <span class="large" style="padding-bottom: 0; color: white">Contests: <i>2018 - 2019</i></span>
                </div>
            </div>
            <div class="medium"><i>AMC Series</i></div>
            <hr style="background-color: red">
            <div class="contests">
                <p class="regular faded"> 
                    <b>AMC 8:</b> Nov 13, 2018
                </p>
                <p class="regular" style="color: red; text-decoration: underline; text-decoration-color: red"> 
                    <b>AMC 10/12:</b> Feb 7, 2019 (A), Feb 13, 2019 (B)
                </p>
                <p class="regular"> 
                    <b>AIME:</b> Mar 13, 2019 (I), Mar 21, 2019 (II)
                </p>
                <p class="regular"> 
                    <b>USA(J)MO:</b> Apr 17-19, 2019 
                </p>
            </div>
            <div class="medium"><i>MathCounts</i></div>
            <hr style="background-color: red">
            <div class="contests">
                <p class="regular" style="color: red; text-decoration: underline; text-decoration-color: red"> 
                    <b>Chapter:</b> Feb 1-28, 2019
                </p>
                <p class="regular"> 
                    <b>State:</b> Mar 1 - Apr 1, 2019
                </p>
                <p class="regular"> 
                    <b>Nationals:</b> May 11-14, 2019
                </p>
            </div>
            <div class="medium"><i>School Tournaments</i></div>
            <hr style="background-color: red">
            <div class="contests">
                <p class="regular faded"> 
                    <b>Texas A&M (TAMU):</b> Oct 20, 2018
                </p>
                <p class="regular faded"> 
                    <b>Duke (DMM):</b> Nov 3, 2018
                </p>
                <p class="regular faded"> 
                    <b>HMMT November (Harvard):</b> Nov 10, 2019
                </p>
                <p class="regular faded"> 
                    <b>Princeton (PuMAC):</b> Nov 17, 2019 
                </p>
                <p class="regular faded"> 
                    <b>Carnegie Mellon (CMIMC):</b> Jan 26, 2019
                </p>
                <p class="regular" style="color: red"> 
                    <b>HMMT February (MIT):</b> Feb 16, 2019
                </p>
                <p class="regular"> 
                    <b>Stanford (SMT):</b> Mar 2, 2019
                </p>
                <p class="regular" sty> 
                    <b>Berkeley (BMT):</b> Mar 2019
                </p>
            </div>
            <div class="medium"><i>USAMTS</i></div>
            <hr style="background-color: red">
            <div class="contests">
                <p class="regular faded">  
                    <b>Round I:</b> Sep 4 - Oct 15, 2018
                </p>
                <p class="regular faded">  
                    <b>Round II:</b> Oct 15 - Nov 26, 2018
                </p>
                <p class="regular faded">  
                    <b>Round III:</b> Nov 26, 2018 - Jan 2, 2019
                </p>
            </div>
            <div class="medium"><i>Who Wants to Be a Mathematician (WWTBAM)</i></div>
            <hr style="background-color: red">
            <div class="contests">
                <p class="regular faded">  
                    <b>Round I:</b> Sep 26, 2018
                </p>
                <p class="regular faded"> 
                    <b>Round II:</b> Oct 3-19, 2018
                </p>
                <p class="regular faded">  
                    <b>Finals:</b> Jan 19, 2019
                </p>
            </div>
            <div class="medium"><i>Mandelbrot</i></div>
            <hr style="background-color: red">
            <div class="contests">
                <p class="regular faded">  
                    <b>Round I:</b> Oct 1-7, 2018
                </p>
                <p class="regular faded">  
                    <b>Round II:</b> Oct 29 - Nov 4, 2018
                </p>
                <p class="regular faded">  
                    <b>Round III:</b> Dec 3-9, 2018
                </p>
                <p class="regular faded"> 
                    <b>Round IV:</b> Jan 28 - Feb 3, 2019
                </p>
                <p class="regular"> 
                    <b>Round V:</b> Feb 25 - Mar 3, 2019
                </p>
            </div>
            <div class="medium"><i>Others</i></div>
            <hr style="background-color: red">
            <div class="contests">
                <p class="regular faded">  
                    <b>Math Prize for Girls:</b> Sep 23, 2018
                </p>
                <p class="regular faded">  
                    <b>OMO (Fall):</b> Oct 26 - Nov 6, 2018
                </p>
                <p class="regular faded">  
                    <b>Canada Open Mathematics Challenge (COMC):</b> Nov 8, 2018
                </p>
                <p class="regular"> 
                    <b>Math Kangaroo:</b> Mar 21, 2019
                </p>
                <p class="regular"> 
                    <b>OMO (Spring):</b> Mar 22 - Apr 9, 2019
                </p>
                <p class="regular"> 
                    <b>Purple Comet:</b> Apr 2-11, 2019
                </p>
                <p class="regular"> 
                    <b>ARML:</b> Jun 1, 2019
                </p>
                <p class="regular"> 
                    <b>MOP:</b> Jun 2019
                </p>
                <p class="regular"> 
                    <b>IMO:</b> Jul 2019
                </p>
            </div>
            <p class="regular" style="padding-top: 1em">
                See 
                <a href="https://artofproblemsolving.com/community/c5h1670248_201819_contest_info" target="blank" style="color: red; text-decoration: none">
                    <b>here</b>
                </a> 
                for a complete list with more contests.
            </p>
            <p class="regular">
                Key: <span class="faded">completed</span> | <span style="color: red; text-decoration: underline; text-decoration-color: red">ongoing</span> | 
                <span style="color: red">soon</span> | future
            </p>
            <div style="display: flex">
                <div style="width: 15%; cursor: pointer" >
                    <div class="click" onclick="nut()"></div>
                </div>
                <div style="overflow: hidden; display: flex; flex-wrap: nowrap; width: 70%; position: relative">
                    <a href="index.html" style="left: 0%; opacity: 1" class="left">
                        <img src="./pictures/amc.png" style="height: 100%; width: 100%">
                    </a>
                    <a href="resources.html" style="left: 100%; opacity: 0" class="left">
                        <img src="./pictures/cmimc.png" style="height: 100%; width: 100%">
                    </a>
                    <a href="contact.html" style="left: -100%; opacity: 0" class="left">
                        <img src="./pictures/pumac.png" style="height: 100%; width: 100%;">
                    </a>
                </div>
                <div style="width: 15%; cursor: pointer">
                    <div class="click" onclick="scrollRight()"></div>
                </div>
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
                    <button type="submit" class="under clicky" name="login-submit" style="cursor: pointer; color: red; font-weight: bold; background-color:white"> &nbsp; submit &nbsp; </button>
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
                        <button type="submit" class="under clicky" name="signup-submit" style="cursor: pointer; color: red; font-weight: bold; background-color:white"> &nbsp; submit &nbsp; </button>
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
                        <button type="submit" class="under clicky" name="login-submit" style="cursor: pointer; color: red; font-weight: bold; background-color:white"> &nbsp; logout &nbsp; </button>
                </div>
                <div class="clicky" style="text-align: center">
                    <span class="under" style="cursor: pointer; color: red; font-weight: bold;"> &nbsp; close &nbsp; </span>
                </div>
            </form>
        </div>
        <script src="slidebar.js"></script>
        <script src="display.js"></script>
        <script src="slidedown.js"></script>
        <script src="samewidth.js"></script>
        <script src="contestsadjustpadding.js"></script>
        <script src="loginstuff.js"></script>
        <script src="logoutstuff.js"></script>
        <script src="maintainwidth.js"></script>
    </body>
</html>
