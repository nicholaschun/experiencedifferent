@include('includes.back_includes.head')

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                @include('includes.back_includes.side_up')
                <br />

                <!-- sidebar menu -->
                @include('includes.back_includes.side')
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>

                    <a href="{{url('auth/logout')}}" data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            @include('includes.back_includes.top_header')
            <div class="message-container">
                @include('includes.back_includes.messages')
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Home page <small></small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4">
        <div class="x_panel">
        <div class="x_title">
            <h2>Slide shows <small>Home Page</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            {!! Form::open(['url' => '/admin/home','files'=>'true']) !!}
        <p class="text-muted font-13 m-b-30">
        </p>
            <p>
                <b>Add Slides </b>
                <span class="btn btn-xs btn-info"><a href="javascript:void(0);"  class="add_slide"><i class="fa fa-plus"></i></a></span>

            <div class="x_panel">


                <div class="form-group">
                    {!! Form::label('image', 'Choose an image') !!}
                    <article class="styled">
                        <input type="file" name="slide_path[]" onchange="previewImage(this,[256],4);" />
                        <div class="imagePreview"></div>
                    </article>
                </div>


            </div>

            <div id="addslide">

            </div>
            </p>



            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add Slider</button>

{!! Form::close() !!}
        </div>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-8">
        <div class="x_panel">
        <div class="x_title">
            <h2>Preview <small></small></h2>
            <div class="clearfix"></div>
        </div>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('assets/img/s1.png');"></div>

                </div>
                @foreach($home as $homeSlider)
                    <div class="item">
                        <!-- Set the second background image using inline CSS below. -->
                        <div class="fill" style="background-image:url({{ asset('/assets/img/home_slider/'.$homeSlider->slide_image_path) }});"></div>

                    </div>
                @endforeach;
                <!--<div class="item">
                    <!-- Set the third background image using inline CSS below.
                    <div class="fill" style="background-image:url('assets/img/s3.png');"></div>

                </div>-->



        </div>
            <div class="">
                @foreach($home as $homeSliderthumb)
                    <span><img width="200" height="100" src="{{ asset('/assets/img/home_slider/'.$homeSliderthumb->slide_image_path) }}" alt="">

                    <span class="slideDelete"><a href="{{url ('admin/home/deleteSlide',$homeSliderthumb->id)}}"><i class="fa fa-times fa-1x"></i> </a></span></span>

                    &nbsp;&nbsp;&nbsp;
                    @endforeach
            </div>
        </div>
        </div>


        </div>
        </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('includes.back_includes.footer')
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
@include('includes.back_includes.scripts')

<!-- Script to Activate the Carousel -->


</body>
</html>