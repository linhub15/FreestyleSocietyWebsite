<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Freestyle Movement</title>

    <!--Google Analytics Script-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-80140861-1', 'auto');
        ga('send', 'pageview'); 
    </script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Site Style Sheet -->
    <link href="css/site.css" rel="stylesheet">
    
    <!-- Page specific CSS page -->
    <?php 
    	$domain = "localhost/";
    	$url = $_SERVER['REQUEST_URI'];
    	if (strstr($url, "about-mission.php")) {
    		echo ("<link href=\"css/about-mission-page.css\" rel=\"stylesheet\">");
    	}
    	else if (strstr($url, "classes.php")) {
    		echo ("<link href=\"css/classes-page.css\" rel=\"stylesheet\">");
    	}
    	else if (strstr($url, "classes-level-one.php")) {
    		echo ("<link href=\"css/classes-level-one.css\" rel=\"stylesheet\">");
    	}
    ?>
    
	<!-- JQuery Load before page-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
    
    <!--Bootstrap JS-->
    <script src="js/bootstrap.js"></script>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
</head>
<body>
    <header>
          <nav class="navbar navbar-inverse navbar-fixed-top">
          
            <div class="container container-fluid">
            
                <!-- Brand and collapse toggle get grouped for better mobile display -->
                <div class="navbar-header">
                
                	<a class="navbar-brand" href="index.php">
                    	<img src="images/stamp_white.png" alt="Freestyle Movement Text">
                	</a>
                	
                	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topNavBar">
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
                  	</button>
                	<!-- <a class="navbar-brand" href="#">Freestyle Movement</a> -->
                	
                </div><!-- /.navbar-header -->
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="topNavBar">
                
                    <ul class="nav navbar-nav">
                        <li>
                        	<a href="index.php">Home</a>
                        </li>                       
                        <li>
                        	<a  href="about-mission.php">About</a>
                        </li>
                        
<!--                         <li class="dropdown"> -->
                        
<!--                             <a  href="about-mission.php" data-toggle="dropdown" class="dropdown-toggle">About<b class="caret"></b></a> -->
                            
<!--                             <ul class="dropdown-menu"> -->
<!--                                 <li><a href="about-mission.php">Mission</a></li>  -->
<!--                                 <li class="divider"></li> -->
<!--                                 <li><a href="about-team.php">Team</a></li> -->
<!--                             </ul> -->
                            
<!--                         </li> -->
                        
                        <li><a href="schedule.php">Schedule</a></li>           
                                    
                        <li class="dropdown">
                        
                            <a href="classes.php" data-toggle="dropdown" class="dropdown-toggle">Classes<b class="caret"></b></a>
                            
                            <ul class="dropdown-menu">
                            
                                <li><a href="classes.php">Overview</a></li>
                                <li class="divider"></li>
                                <li><a href="classes-level-one.php">Level 1</a></li>
                                <li class="divider"></li>
                                <li><a href="classes-bboylink.php">Level 2</a></li>
                                
                                <!-- <li class="divider"></li>
                                <li><a href="#">Level 3</a>
                                <li class="divider"></li>
                                <li><a href="#">Level 4</a> -->
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                
            </div><!-- /.container-fluid -->
            <div class="greenNav"></div> <!--green bar-->
        </nav>
    </header>