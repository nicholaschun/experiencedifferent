@include('includes.front_includes.head')


<body>


<!-- Navigation -->
<!-- Full Page Image Background Carousel Header -->
<header>

    @include('includes.front_includes.menu')

</header>

<div class="main-body">

<section id="about">

    <div class="container text-center">
        <h2 class="heading text-center">about us</h2>

        <div class="about">
<p>
    The Experience Different Project is a Ghanaian design studio <br> that specialises in providing
    high quality photo realistic 3D visualisation,graphic design and animation services.<br>
    Modernist ideals, attention to detail and photo-realism are hallmarks of the studio<br>
    that ensure quality service provision.
</p>
        </div>
    </div>
</section>

<section id="whatwedo">
    <div class="container text-center">
        <h2 class="heading">what we do</h2>

        <div class="watwedo">

         <div class=" container ">
             <div class="col-lg-4">
                 <img src="assets/img/3d.png" alt="" width="100" height="100"/><br>
                 <span>3D visualisation</span>
             </div>

             <div class="col-lg-4">
                 <img src="assets/img/gd.png" alt="" width="100" height="100"/><br>
                 <span>Graphic Design</span>
             </div>

             <div class="col-lg-4">
                 <img src="assets/img/a.png" alt="" width="100" height="100"/><br>
                 <span>Animation</span>
             </div>
         </div>

        </div>
    </div>
</section>

<section id="getintouch">
    <div class="container" >
        <h2 class="heading text-center">get in touch</h2>


        </div>
<div class="container">

    <div class="col-lg-offset-2 col-lg-9 text-center contact-links pull-left" >

            <span>
               <i class="glyphicon glyphicon-phone"></i> +233(0)246015155
            </span>
        <br>
            <span>
               <i class="glyphicon glyphicon-phone"></i> +233(0)245162066
            </span>
        <br>
            <span>
               <i class="glyphicon glyphicon-envelope"></i> info@experiencedifferent.com
            </span>
        <br>
        <span>
               <i class="glyphicon glyphicon-globe"></i> www.experiencedifferent.com
            </span>

    </div>
</div>







</section>

<section id="clients">
    <div class="container text-center">
            <h2 class="heading text-center">some of our awesome clients</h2>
        <div class="client">

            <img src="assets/img/Logo_Appolonia.png" alt="" width="200" height="100"/>
            <img src="assets/img/Logo_White_wall_Properties.png" alt="" width="150" height="100"/>
            <img src="assets/img/logo_primrose.png" alt="" width="200" height="100"/>

        </div>
    </div>
</section>
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


@include('front_includes.scripts')


</body>

</html>
