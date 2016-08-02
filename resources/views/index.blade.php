@include('includes.front_includes.head')

<body>

    <!-- Navigation -->
    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">

        <nav class="navbar  navbar-fixed-top" role="navigation" >
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="logo" >
                    <a class="navbar-brand" href="index.blade.php"><span class="logo-the">the</span><br><span  style="letter-spacing: 5px;" class="logo-main">experience  different</span><br>
                        <span  class="pull-right logo-project">project</span> </a>
                        </span>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="dropdown pull-right">

                    <button class="drp-btn" onclick="myFunction()"><i class="fa fa-bars"></i> Menu</button>
                    <div id="drp-dwn" class="dropdown-content">
                        <a href="index">Home</a>
                        <a href="about">About us</a>
                        <a href="portfolio">Portfolio</a>

                    </div>
                </div>

                <!-- /.navbar-collapse -->
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>


        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('assets/img/s1.png');"></div>

            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('assets/img/s2.png');"></div>

            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('assets/img/s3.png');"></div>

            </div>

        </div>

        <!-- Controls
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
        -->




    </header>



    @include('includes.front_includes.scripts')

</body>

</html>
