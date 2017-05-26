
 <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Staff login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <span class="right">
                    <a href="MAIN.html">
                        <strong>Back to the main page</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Admin Login</span></h1>
            </header>
            <section>
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="admin/index.php" autocomplete="on" method="post">
                                <h1>Login</h1>
                                <p>
                                    <label for="username" class="uname" data-icon="u" > Admin username </label>
                                    <input id="username" name="auname" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p"> Admin password </label>
                                    <input id="password" name="apass" required="required" type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                <p class="login button">
                                    <input type="submit" value="Login" />
                                </p>
                            </form>
                            <?php
                            $flag=0;
                                if(isset($_GET["flag"]) ){
                                    echo "Wrong password";
                                }
                             ?>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
