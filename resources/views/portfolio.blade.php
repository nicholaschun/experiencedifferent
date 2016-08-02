@include('includes.front_includes.head')


<body>


<!-- Navigation -->
<!-- Full Page Image Background Carousel Header -->
<header>

@include('includes.front_includes.menu')
</header>

<div class="main-body">

    <section >
        <div class="container">
            <div class="row">
                <h2 class="heading text-center">portfolio</h2>



                <!-- matter-portfolio-filter -->
                <ul class="matter-filter text-center">
                    e<li class="filter active" data-filter="all">
                        All
                    </li>
                    <li class="filter" data-filter=".3d">
                        3D visualization
                    </li>
                    <li class="filter" data-filter=".graphics">
                        Graphic Design
                    </li>
                    <li class="filter" data-filter=".animation">
                        Animations
                    </li>
                </ul>

                <div class="matter_portfolio">
                    <div  class="col-lg-4 col-md-4 col-sm-6 col-xs-12 showDiv mix  html 3d">
                        <div class="portfolio-item">
                            <a data-lightbox="image1" href="img/portfolio/41.png" class="preview">
                                <img src="img/portfolio/41.png" alt="">
                            </a>

                        </div>
                    </div>

                    <div  class="col-lg-4 col-md-4 col-sm-6 col-xs-12 showDiv mix  html 3d">
                        <div class="portfolio-item">
                            <a data-lightbox="image1" href="img/portfolio/46.png" class="preview">
                                <img src="img/portfolio/46.png" alt="">
                            </a>

                        </div>
                    </div>











                        <div align="center">
                            <a href="#" class="btn btn-info btn-lg" id="loadMore">Load More</a>
                        </div>


                </div>
            </div>

    </section>
    <!-- Portfolio Section End -->

</div>

<hr/>
<footer>
    <div class="container">
        <div class="social-media text-center">
            <span><a href="#"><i class="fa fa-facebook"></i></a></span>
            <span><a href="#"><i class="fa fa-instagram"></i></a></span>
            <span><a href="#"><i class="fa fa-twitter "></i></a></span>

        </div>
        <div class="container text-center footer">
            <span>All rights reserved © 2016 experiencedifferent.com</span>
        </div>
    </div>



</footer>



<!-- jQuery -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/modernizr.custom.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/text-rotator.js"></script>

<!--jQuery Nav-->
<script src="assets/js/jquery.nav.js"></script>

<!--WOW Scroll Spy-->
<script src="assets/js/wow.js"></script>
<!--Smooth on Scroller-->
<script src="assets/js/smooth-on-scroll.js"></script>
<!--Smooth Scroller-->
<script src="assets/js/smooth-scroll.js"></script>
<!-- Light Box -->
<script src="assets/js/lightbox.min.js"></script>
<!-- Mixitup  -->
<script src="assets/js/jquery.mixitup.min.js"></script>
<!-- Owl carousel  -->
<script src="assets/js/owl.carousel.js"></script>
<!-- preset js -->
<script src="assets/js/style.changer.js"></script>
<!-- Counterup -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- waypoints -->
<script src="assets/js/waypoints.min.js"></script>
<!-- All JS plugin Triggers -->
<script src="assets/js/main.js"></script>

<script>
    $(function () {
        $(".showDiv").slice(0, 20).show();
        $("#loadMore").on('click', function (e) {
            e.preventDefault();
            $(".showDiv:hidden").slice(0, 20).show;
            if ($(".showDiv:hidden").length == 0) {
                $("#load").fadeOut('slow');
            }

        });
    });


</script>

<script>

    $(document).ready(function () {
        size_li = $(".showDiv div").size();
        x=20;
        $('.showDiv div:lt('+x+')').fadeIn('slow');
        $('#loadMore').click(function () {
            x= (x+20 <= size_li) ? x+20 : size_li;
            $('.showDiv div:lt('+x+')').fadeIn('slow');
        });

    });
</script>
<script>

    /* When the user clicks on the button,
     toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("drp-dwn").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.drp-btn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

<script type="text/javascript">
    $(function() {
        $('#thumbnails a').lightBox();
    });
</script>



</body>

</html>
