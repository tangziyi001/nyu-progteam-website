<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NYU Progteam</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="10">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">NYU</span> Progteam
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#followus">FollowUs</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contest">Practice</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#schedule">Schedules</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://cs.nyu.edu/acm/progteam/prognova/">Prognova</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">NYU Progteam</h1>
                        <p class="intro-text">Leverage your problem solving ability<br>with competitive programming contests</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About NYU Progteam</h2>
                <p>Our team is consisted of brilliant students who enjoy solving algorithmic problems and learning blazingly fast algorithm implementations.</p>
                <p>We host weekly onsite practice contests on each Friday night, with refreshments. No matter you are a programming veteran or a beginner, just bring your fully charged laptop and come. You will always benefit from our 2 hour weekly meetings.</p>
                <p>We hold <a href="http://cs.nyu.edu/acm/progteam/prognova/">NYU ProgNova Programming Contest</a> annually. The winners, as well as all qualified Progteam members, are encouraged to attend the <a href="https://icpc.baylor.edu/">ACM International Colligiate Programming Contest</a>. </p>
            </div>
        </div>
    </section>

    <!-- FollowUp Section -->
    <section id="followus" class="container content-section text-center" style="margin-bottom:90px">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Follow Us</h2>
                <p>If you are passionate about solving algorithmic problems with us from now on, learning advanced algorithmic thoughts and eventually becoming an experienced competitive programmer, don't forget to sign up for our <a href="http://www.cs.nyu.edu/mailman/listinfo/progteam">mailing list</a> for future announcements.</p>
            </div>
        </div>
    </section>


    <!-- Ranking Section -->
    <section id="contest" class="content-section text-center">
        <div class="contest-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>GET Practice!</h2>
                    <p>Practice makes perfect. You can get started with our tutorial, then solving Progteam's practice problems on our platform. You can also check your scores ranking. The more problems you've solved, the higher score you would gain.</p>
                    <a href="tutorial/index.html" class="btn btn-default btn-lg">tutorial</a>
                    <a href="http://vjudge.net/contest/#contestType=0&contestRunningStatus=0&contestOpenness=0&title=nyu&manager=" class="btn btn-default btn-lg">Platform</a>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">ranking</button>
                    <!-- <p>Besides, there are several renown online judges for you to show off your problem solving skills.</p>
                        <a href="https://uva.onlinejudge.org/" class="btn btn-default btn-lg"> <span class="network-name">UVA</span></a>
                        <a href="http://codeforces.com/" class="btn btn-default btn-lg"><span class="network-name">Codeforces</span></a>
                        <a href="http://poj.org/" class="btn btn-default btn-lg"> <span class="network-name">POJ</span></a> -->
                </div>
            </div>
        </div>
        
    </section>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog" style="background-color:black;">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" style="background-color:black;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="text-align:center">Scores Ranking<br>(Fall 2016 - Spring 2017)</h4>
          </div>
          <div class="modal-body" id="modalbody" style="height:500px;overflow: scroll;">
            <table class="table" id="ranking">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Handle</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody id="tablebody">
                    <?php include 'ranking.php';?>
                </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- schedule Section -->
    <section id="schedule" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Progteam Schedule</h2>
                <p>
                    Here is a schedule of upcoming Progteam events.
                </p>
            </div>
            <iframe src="https://calendar.google.com/calendar/embed?src=hd7f0dg0pteelkh3d2abt4jhg0%40group.calendar.google.com&ctz=America/New_York" style="border: 0" width="800" height="400" frameborder="0" scrolling="no"></iframe>
            <div style="margin-top:100px"></div>
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contest Schedule</h2>
                <p>
                    Here is a schedule of several competitive programming contests held by renown online coding platforms.
                </p>
            </div>
                <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;height=500&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=4s4sei7e00r3s6a3pt57l3acv8%40group.calendar.google.com&amp;color=%2342104A&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="400" frameborder="0" scrolling="no">
                </iframe>
            
        </div>
    </section>
    <!-- Space  -->
    <!-- <div style="margin:0 auto;margin-top:300px">
    </div> -->
    <!-- Footer -->
    <footer>
        <div id="foot" class="container text-center">
            <p>Copyright &copy; New York University Programming Team 2016</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
</body>

</html>
