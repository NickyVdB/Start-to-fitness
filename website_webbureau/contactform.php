<!doctype html>

<html lang="nl">

<head>
    <meta charset="utf-8">
    <title>Resultaat</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet">
	<link href="img/logo.png" rel="icon"/>
	<style type="text/css">
	@import url("mijnstijl.css");
    </style>
</head>

<body class="index">
<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="http://r0374251.sinners.be/website_webbureau/index.html">Vimani Webdesign</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="http://r0374251.sinners.be/website_webbureau/index.html"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://r0374251.sinners.be/website_webbureau/index.html#services">Wat doen wij?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://r0374251.sinners.be/website_webbureau/index.html#portfolio">Projecten</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://r0374251.sinners.be/website_webbureau/index.html#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://r0374251.sinners.be/website_webbureau/index.html#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welkom <?php echo $_REQUEST["name"]; ?> 
                in ons webbureau!</div>
			<p class="col-sm-12">Uw e-mailadres: <?php echo $_REQUEST["email"]; ?></p>
            <p>Uw bericht: <?php echo $_REQUEST["message"]; ?></p>
            <h2>Bedankt voor uw bericht! Wij trachten deze zo snel mogelijk te beantwoorden!</h2>
                
                <a href="http://r0374251.sinners.be/website_webbureau/index.html" class="page-scroll btn btn-xl">Terug naar hoofdpagina</a>
            </div>
        </div>
    </header>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    
<!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
</body>

</html>
